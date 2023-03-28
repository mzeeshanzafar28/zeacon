<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Coin;
use App\Models\Config;
use App\Models\ManualDeposit;
use App\Models\UserBank;
use Illuminate\Support\Facades\Mail;
use App\Models\manualAccount;
// use Flash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userid = Auth::id();
        $result = DB::table('wallets')
        ->selectRaw('SUM(cr)-SUM(dr) as balance')
        ->where('uid', $userid)
        ->where('status',1)
        ->first();
        $pending_withdraw=DB::table('wallets')
        ->selectRaw('SUM(dr) as pendingwithdraw')
        ->where('status',2)
        ->first()
        ;
        $withdraw = DB::table('wallets')
        ->selectRaw('SUM(dr) as withdraw')
        ->where('uid',Auth::id())
        ->where('type',3)
        ->where('status',2)
        ->first();
        $walletbalance=($result->balance) - ($pending_withdraw->pendingwithdraw);
        $uID = session('MM_uID');
        $bal = DB::table('wallets')
            ->where('status', 1)
            ->where('uID', $uID)
            ->selectRaw('SUM(cr) - SUM(dr) as balance')
            ->first()
            ->balance;

        if ($bal > 100) {
            $vpin = DB::table('clients')
                ->where('uID', $uID)
                ->value('vpin');

            if ($vpin == 0) {
                return redirect('mykyc');
            }
        }

        $dep = DB::table('wallets')
            ->where('status', 1)
            ->where('type', 1)
            ->where('uID', $userid)
            ->sum('cr');

        $with = DB::table('wallets')
            ->where('status', 2)

            ->where('type', 3)
            ->where('uID', $userid)
            ->sum('dr');

        $pro = DB::table('wallets')
            ->where('status', 1)
            ->where('type', 6)
            ->where('uID', $uID)
            ->sum('cr');

        $trade = DB::table('wallets')
            ->where('status', 2)
            ->where('type', 1)
            ->where('uID', $userid)
            ->sum('cr');

            $sn = 0;
            $uID = $this->test_input(session('MM_uID'));
            $l5 = DB::select("SELECT * FROM `wallets` WHERE uID=? ORDER BY id DESC LIMIT 5", [$uID]);
            $totalRows_l5 = count($l5);

            $userid= Auth::id();
            $wallet = Wallet::where('uid',$userid)->orderby('id','desc')->limit(5)->get();




        return view('user.dashboard', get_defined_vars());
    }

    public function adminDashboard()
    {
        $nouser=0;
        $sn=0;
        $user= User::where('user_type',0)->get();
        $wallet = Wallet::all();
        $total_deposit = Wallet::where('type', 3)
            ->where('status', 1)
            ->sum('dr');
            $total_balance = intval(Wallet::where('type', 1)
            ->where('status', 1)
            ->sum('cr'));

        return view('admin.dashboard',get_defined_vars());
    }

    public function clientMgt()
    {
        $sn=0;
        $user = User::where('user_type',0)->orderby('id','desc')->get();

        return view('admin.client',get_defined_vars());
    }

    public function adminDeposit()
    {
        $sn=0;
        $snm=0;

        $wallet = DB::table('wallets')
        ->join('users', 'wallets.uid', '=', 'users.id')
        ->select('wallets.*', 'users.name')
        ->where('type',1)
        ->orderBy('id','desc')
        ->get();

        $deposit = DB::table('manual_deposits')
        ->join('users', 'manual_deposits.uid', '=', 'users.id')
        ->select('manual_deposits.*', 'users.name')
        ->orderBy('id','desc')
        ->get();
        return view('admin.deposits',get_defined_vars());
    }

    public function depositMethod()
    {
        $sn=0;
     $dmethod=   DB::table('d_method')
        ->get()
        ->all();
        return view('admin.deposit-method',get_defined_vars());
    }

    public function fee()
    {
        $sn=0;
        $fee= DB::table('fee')
        ->get()
        ->all() ;
        return view('admin.fee',get_defined_vars());
    }

    public function depositRate()
    {
        $coin = Coin::all();

        return view('admin.deposit-rate',get_defined_vars());
    }

    public function rate()
    {
        $rate = Config::first()->n_rate;
        return view('admin.rate',get_defined_vars());
    }

    public function adminTransfer()
    {
        $sn=0;
        $wallet = DB::table('wallets')
    ->join('users', 'wallets.uid', '=', 'users.id')
    ->select('wallets.*', 'users.name')
    ->where('type',2)
    ->orderBy('id','desc')
    ->get();
        return view('admin.transfer',get_defined_vars());
    }

    public function withdrawl()
    {
        $sn=0;

        // $wallet = Wallet::where('type', 3)->orderBy('id', 'desc')->get();
        $wallet = Wallet::select('wallets.*', 'users.name','user_banks.bank','user_banks.accountno')
            ->join('users', 'users.id', '=', 'wallets.uID')
            ->join('user_banks','user_banks.id','=','wallets.address')
            ->where('wallets.type', 3)
            ->orderBy('wallets.id', 'desc')
            ->get()
            ->all()
            ;

        return view('admin.withdrawl',get_defined_vars());
    }

    public function kyc()
    {
        $user = User::all();
        return view('admin.kyc',get_defined_vars());
    }

    public function updateDepositRate(Request $request,$id){
       $request->validate([
        'api'=>'required',
       ]);

       $coin = Coin::find($id)->first();

       $coin->api= $request->api;
       $coin->save();
       return back()->with('msg','Deposit rate updated !');
    }
    public function update_ngn_rate(Request $request){
        $request->validate([
            'rate'=>'required'
        ]);
        $rate = Config::first();
        $rate->n_rate=$request->rate;
        $rate->save();
        return back()->with('msg','NGN rate updated !');
    }
    public function kyc_action(Request $request , $id){
        $user = User::where('id',$id)->first();
        if($request->action=='approve'){
            $user->status=1;
            $user->save();
        }
        elseif($request->action=='reject'){
            $user->status=0;
            $user->save();

        }
        return back()->with('msg','Action Performed !');
    }
    public function dmethod_update(Request $request , $id){
        $dmethod = DB::table('d_method')
        ->where('id', $id)
        ->first();

    if ($dmethod && $request->action == 'en') {
        DB::table('d_method')
            ->where('id', $id)
            ->update(['status' => 1]);
    } elseif ($request->action == 'dis') {
        DB::table('d_method')
            ->where('id', $id)
            ->update(['status' => 0]);
    }

    return back()->with('msg', 'Updated');

    }

    public function update_withdrawal_status(Request $request,$id){
       $wallet = Wallet::where('id',$id)->first();

       if($request->action=='reject'){
        $wallet->status=0;
        $wallet->cr=$wallet->dr;
        $wallet->save();

       }
       elseif($request->action=='approve'){
        $wallet->status=1;
        $wallet->save();
       }
       return back()->with('msg','Updated !');
    }
    public function update_deposit_status(Request $request,$id){
        $wallet = Wallet::where('id',$id)->first();
        if($request->action=='approve'){
            $wallet->status=1;
            $wallet->save();
        }
        elseif($request->action=='reject'){
            $wallet->status=0;
            $wallet->save();

        }
        elseif($request->action=='pending'){
            $wallet->status=2;
            $wallet->save();
        }
        return back()->with('msg','Updated !');
    }
    public function update_user_status(Request $request,$id){
        $user = User::where('id',$id)->first();
        if($request->action=='enable'){
            $user->user_status=1;
            $user->save();
        }
        elseif($request->action=='disable'){
            $user->user_status=0;
            $user->save();
        }
        return back()->with('msg','Updated');
    }
    public function update_fee(Request $request,$id){
        $fee = DB::table('fee')
        ->where('sn',$id)
        ->update(['api'=>$request->api])
        ;
        return back()->with('msg',' Fee Updated');
    }
    public function update_transfer_status(Request $request,$id){
        $wallet = Wallet::where('id',$id)->first();
         if($request->action=='accept'){
            $wallet->status=1;
            $wallet->save();
         }
         elseif($request->action=='reject'){
            $wallet->status=0;
            $wallet->save();


         }
         elseif($request->action=='pending'){
            $wallet->status=2;
            $wallet->save();

         }
         return back()->with('msg','Updated');
    }
    public function edit_user_page($id){
        $user=User::where('id',$id)->first();
        return view('admin.edit-user',get_defined_vars());
    }

    public function edit_user(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            // 'dob'=>'required',
            // 'phone'=>'required',
            // 'zip'=>'required|numeric',
            // 'address'=>'required',
            // 'state'=>'required',
            // 'country'=>'required',
            'status'=>'required',
        ]);
        $user = User::where('id',$id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->dob=$request->dob;
        $user->phone=$request->phone;
        $user->zipcode=$request->zip;
        $user->address=$request->address;
        $user->state=$request->state;
        $user->country=$request->country;
        if($request->status==1){
            $user->status=1;
        }
        elseif($request->status==0){
            $user->status=0;
        }
        $user->save();
        return redirect()->route('client-mgt')->with('msg','User Details Updated');

    }
    public function view_page($id){
        $sn=0;
        $bal=DB::table('wallets')
        ->selectRaw('SUM(cr)-SUM(dr) as balance')
        ->where('uid', $id)
        ->where('status',1)
        ->first();
        $userbalance=intval($bal->balance);
        $dep=DB::table('wallets')
        ->selectRaw('SUM(cr) as deposit')
        ->where('uid', $id)
        ->where('status',1)
        ->where('type',1)
        ->first();
        $deposit=$dep->deposit;
        $wit=DB::table('wallets')
        ->selectRaw('SUM(dr) as withdraw')
        ->where('uid', $id)
        ->where('status',1)
        ->where('type',3)
        ->where('draw',1)
        ->first();
        $withdrawal=$wit->withdraw;
        $tran=DB::table('wallets')
        ->selectRaw('SUM(cr) as transfer')
        ->where('uid', $id)
        ->where('status',1)
        ->where('type',2)
        ->first();
        $transfer=$tran->transfer;
        $transaction = Wallet::where('uID',$id)->get();
        $user= User::where('id',$id)->first();
        return view('admin.view',get_defined_vars());
    }

    public function add_customer_transaction(Request $request,$id){
        $request->validate([
            'amount'=>'required',
            'desc'=>'required',
            'type'=>'required',
        ]);
        $wallet =  new Wallet();
        $wallet->uID=$id;
        $wallet->cr=$request->amount;
        $wallet->nar=$request->desc;
        $wallet->type=$request->type;
        $wallet->status=1;
        $wallet->save();
        return back()->with('msg','Transaction added !');
    }
    public function sendmail(Request $request,$id){
        $request->validate([
            'sub'=>'required',
            'msg'=>'required',
        ]);
        $user=User::where('id',$id)->first();
        $useremail=$user->email;
        $username=$user->name;
        $data=[
            'name'=>$username,
            'subject'=>$request->sub,
            'msg'=>$request->msg
        ];
            Mail::to($useremail)->send(new SendEmail($data));
            return back()->with('msg','Email Sent !');
    }

    public function update_manual_deposit_status(Request $request,$id){
        $deposit = ManualDeposit::where('id',$id)->first();
        $wallet = new Wallet();

        if($request->action=='approve'){
            $deposit->status=1;
            $wallet->uID=$deposit->uID;
            $wallet->cr=$deposit->amount;
            $wallet->nar='Manual Deposit';
            $wallet->type=1;
            $wallet->status=1;
            $wallet->dtype=7;

            $wallet->save();
        }
        elseif($request->action=='reject'){
            $deposit->status=0;
        }
        elseif($request->action=='pending'){
            $deposit->status=2;
        }
        $deposit->save();
        return back()->with('msg','Manual Deposit Status Updated');

    }

    public function callback(Request $request){

        // $paymentDetails = Paystack::getpaymentData();
        // return response()->json(['message'=>'Payment Completed Successfully']);
        return ' hiu';
    }

    public function updateManualAccount(Request $request)
    {
        $manualAccount = manualAccount::find(1)->toArray();
        $request->validate(
            [
                'bank' => 'required',
                'owner' => 'required',
                'account_no' => 'required'
            ]
            );
        $manualAccount = manualAccount::find(1);
        $manualAccount->bank = $request->bank;
        $manualAccount->owner = $request->owner;
        $manualAccount->account_no = $request->account_no;
        $manualAccount->save();

        // return redirect()->back()->with(get_defined_vars());
        // flash("Successfully updated manual account details");
        return redirect()->back()->with('changeSuccess','Manual Account has been Successfully updated');


    }

    public function sendToUpdateAccount()
    {
        $manualAccount = manualAccount::find(1)->toArray();
        return view("admin/updateManualAccount")->with(get_defined_vars());
    }


}
