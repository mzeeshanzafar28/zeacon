<?php

namespace App\Http\Controllers;

use App\Models\CryptoDeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ManualDeposit;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Models\manualAccount;

class DepositController extends Controller
{
    public function depositPage()
    {

        $coins = [];
        $response = Http::withOptions(['verify' => false])
                       ->withHeaders([
                           'x-api-key' => env('COIN_API')
                       ])
                       ->get('https://api.nowpayments.io/v1/full-currencies');

        $coins = $response->json()['currencies'];
        $userid= Auth::id();
        $user=User::where('id',$userid)->first();
        $manualAccount = manualAccount::find(1)->toArray();
        return view('user.deposit',get_defined_vars());
    }
    public function manual_deposit(Request $request,$id){
        $request->validate([
            'amount'=>'required',
            'proof'=>'required|mimes:png,jpg,pdf',
            'paid'=>'required'
        ]);
        $deposit = new ManualDeposit();
        $deposit->uID=$id;
        $deposit->amount=$request->amount;
        if($request->paid=='on'){
            $deposit->paid=1;
        }
        else{
            $deposit->paid=0;
        }
        if($request->hasFile('proof')){
            $doc = $request->file('proof');
            $new_doc = str_replace(' ', '_', $doc->getClientOriginalName());
            $doc->move(public_path("manual_deposit_proof_doc"), $new_doc);
            $deposit->proof  = $new_doc;
        }
        $deposit->status=2;
        $deposit->save();
        return back()->with('msg','Deposit has initiated');
    }

    // Crypto Payment Code

    public function crypto_payment(Request $request){
        $request->validate([
            'amount' => 'required|numeric|between:1,9999999999.99',
            'select_coin' => 'required',
        ]);
        if($request->amount>0){
            $order_id = strtoupper(Str::random(8));
            $data = [
                'price_amount' => $request->amount,
                'price_currency' => 'usd',
                'pay_currency' => strtolower($request->select_coin),
                "ipn_callback_url" => "https://nowpayments.io",
                "order_id" => $order_id,
                "order_description" => "Deposit amount to Zeaconglobal",
            ];
            $payment = json_decode(Http::withOptions(['verify' => false])->withHeaders([
                'x-api-key' => env('COIN_API'),
                'Content-Type' => 'application/json'
            ])->post(env('COIN_BASE') . 'payment', $data)->body());
            if(isset($payment->status) && !$payment->status){
                $request->session()->flash('error', $payment->message);
                return redirect()->back();
            }
            else{
                $crypto_deposit = new CryptoDeposit();
                $crypto_deposit->payment_id = $payment->payment_id;
                $crypto_deposit->order_id = $payment->order_id;
                $crypto_deposit->type = "Crypto";
                $crypto_deposit->payment_amount = $payment->price_amount;
                $crypto_deposit->tax_amount = $payment->price_amount - $payment->amount_received;
                $crypto_deposit->amount = $payment->amount_received;
                $crypto_deposit->coin = $payment->pay_currency;
                $crypto_deposit->pay_amount = $payment->pay_amount;
                $crypto_deposit->status = $payment->payment_status;
                $crypto_deposit->uID = Auth::id();
                $crypto_deposit->save();
                return redirect('crypto-payment-page/' . $crypto_deposit->payment_id);
            }
        }
        else{
            $request->session()->flash('error', "Invalid deposit amount. Amount must be greater than 0!");
            return redirect()->back();
        }
    }
    public function cryptoPaymentPage($payment_id){

        $crypto_deposit = CryptoDeposit::where('payment_id', $payment_id)->first();
        $payment = json_decode(Http::withOptions(['verify' => false])->withHeaders([
            'x-api-key' => env('COIN_API'),
        ])->get(env('COIN_BASE') . 'payment/' . $crypto_deposit->payment_id,)->body());
        Session::put('crypto_payment_id', $payment_id);
      $qrcode =  QrCode::size(250)->generate($payment->pay_address);

        return view('user.crypto_payment', get_defined_vars());
    }

    // Calling this in schedule
    // public function check_crypto_payment(){
    //     if(Session::get('crypto_payment_id')=='waiting'){
    //         $crypto_deposit = CryptoDeposit::where('payment_id', Session::get('crypto_payment_id'))->first();
    //     $payment = json_decode(Http::withOptions(['verify' => false])->withHeaders([
    //         'x-api-key' => env('COIN_API'),
    //     ])->get(env('COIN_BASE') . 'payment/' . $crypto_deposit->payment_id,)->body());

    //     if ($payment['status'] == 'finished') {
    //         $crypto_deposit->status=$payment['status'];
    //         $crypto_deposit->save();

    //     }
    //     }
    // }

    public function bank_deposit(Request $request){
        $amount=intval($request->amount * 100);
       try{
           Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

           $customer = Customer::create(array(
               'email' => $request->stripeEmail,
               'source'  => $request->stripeToken
           ));

           $charge = Charge::create(array(
               'customer' => $customer->id,
               'amount'   => $amount,
               'currency' => 'usd'
           ));
           $wallet= new Wallet();
           $wallet->uID=Auth::id();
           $wallet->nar="Bank Deposit";
           $wallet->cr=$request->amount;
           $wallet->status=1;
           $wallet->dtype=6;
           $wallet->type=1;
           $wallet->save();
           return back()->with('msg','Payment Success !');
       }
       catch (\Exception $ex) {
           return back()->with('error',$ex->getMessage());
       }
    }

    public function submitByPayeer(Request $request)
    {
        $request->validate(
            [
                'amount' => 'required|min:1'
            ]
        );
        @dd("We are here");
    }
}
