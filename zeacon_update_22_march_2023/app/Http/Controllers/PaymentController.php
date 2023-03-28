<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
// use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack;

use Illuminate\Support\Facades\Auth;
use App\Models\Wallet;


class PaymentController extends Controller
{
    // Paystack Payment Code 
    public function paystack_pay(Request $request){
        $amount = $request->amount * 100;
        $userid = Auth::id();
        $user = User::where('id',$userid)->first();
        $email = $user->email; // User's email address
        $paymentData = [
            'amount' => $amount,
            'email' => $email,
        ];
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        catch(\Exception $e) {
            return Redirect::back()->with(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }   
    }
    
    public function paystack_callback(){
        $userid = Auth::id();
        $userwallet = Wallet::where('uid',$userid)->first();
        $paymentDetails = Paystack::getPaymentData();
        return $paymentDetails;
    }
}
