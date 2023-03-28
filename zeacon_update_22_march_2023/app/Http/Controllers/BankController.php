<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserBank;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    public function add_bank_page(){
        return view('user.add_bank');
    }
    public function add_bank(Request $request){
        $request->validate([
            'accountno'=>'required|numeric',
            'bank'=>'required',
            'accountname'=>'required',
            'bankphone'=>'required',
        ]);
        $userid=Auth::id();
        $bank = new UserBank();
        $bank->userid=$userid;
        $bank->accountno=$request->accountno;
        $bank->bank=$request->bank;
        $bank->accountname=$request->accountname;
        $bank->bankphone=$request->bankphone;
        $bank->save();
        return back()->with('success','Bank details is added !');
    }
    

}
