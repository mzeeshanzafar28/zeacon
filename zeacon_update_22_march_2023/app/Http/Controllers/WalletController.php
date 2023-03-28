<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
class WalletController extends Controller
{
    public function depositPage()
    {
        return view('user.deposit');
    }

    public function sendPage()
    {
        $userid = Auth::id();
        $user = User::where('id',$userid)->first();
        return view('user.send',get_defined_vars());
    }

    public function withdrawPage()
    {
        $withdraw=Db::table('user_banks')
        ->where('userid',Auth::id())
        ->get()
        ->all()
        ;
        $result = DB::table('wallets')
        ->selectRaw('SUM(cr)-SUM(dr) as balance')
        ->where('uid',Auth::id())
        ->where('status',1)
        ->first();
        $pending_withdraw=DB::table('wallets')
        ->selectRaw('SUM(dr) as pendingwithdraw')
        ->where('status',2)
        ->first()
        ;
        $walletbalance=($result->balance) - ($pending_withdraw->pendingwithdraw);
        $dep = DB::table('wallets')
        ->selectRaw('SUM(cr) as deposit')
        ->where('uid',Auth::id())
        ->where('type',1)
        ->where('status',1)
        ->first();
        $with = DB::table('wallets')
        ->selectRaw('SUM(dr) as withdraw')
        ->where('uid',Auth::id())
        ->where('type',3)
        ->where('status',1)
        ->first();
        $fee= DB::table('fee')
        ->where('sn',1)
        ->first()
        ;
        return view('user.withdraw',get_defined_vars());
    }
    public function withdraw(Request $request){
        $fee = DB::table('fee')
        ->select('api')
        ->where('sn',1)
        ->first()
        ;
        $rand= rand(10,10000000);
        $withdrawfee= ($fee->api / 100 )*$request->amount;
        $amount = $withdrawfee + $request->amount;
        $request->validate([
            'amount'=>'required',
            'wallet'=>'required'
        ]);
       $wallet = new Wallet();
       $wallet->uID=Auth::id();
       $wallet->dr=$amount;
       $wallet->address=$request->wallet;
       $wallet->type=3;
       $wallet->nar='Withdrawal';
       $wallet->rand=$rand;
       $wallet->draw=2;
       $wallet->status=2;
       $wallet->save();
        return back()->with('msg','Withdraw request has submitted ! Please wait for approval');

    }

    public function transferPage()
    {
        return view('user.transfer');
    }

    public function tradePage()
    {
        $userid = Auth::id();
        $bank = UserBank::where('userid',$userid)->get();
        $user = User::where('id',$userid)->first();
        return view('user.trade',get_defined_vars());
    }

    public function profilePage()
    {
        return view('user.profile');
    }

    public function transactionPage()
    {
        $userid= Auth::id();
        $wallet = Wallet::where('uid',$userid)->get()->all();
        return view('user.transaction',get_defined_vars());
    }

    public function binary_id_submit(Request $request){
        $request->validate([
            'binary_id'=>'required',
        ]);
        $userid = Auth::id();
        $user = User::where('id', $userid)->first();
        $user->binary_id = $request->binary_id;
        $user->save();

       return back()->with('success','Binary Id is Added !');
    }
    public function enaira_wallet_submit(Request $request){
        
        $request->validate([
            'enaira'=>'required',
        ]);
        $userid = Auth::id();
        $user = User::where('id', $userid)->first();
        $user->enaira = $request->enaira;
        $user->save();
       return back()->with('success','Binary Id is Added !');
    }
    public function internalTransfer(Request $request){
        $request->validate([
            'amount'=>'required|numeric',
            'client_id'=>'required|exists:users,email'
        ]);
        $amount= $request->amount;
        $client_id= $request->client_id;
        $userid=Auth::id();
        $user=User::where('id',$userid)->first();
        $username=$user->name;
        $date=now();
$reciever= User::where('email',$client_id)->first();


return view('user.internal-transfer-preview',get_defined_vars());
    }
    public function confirmed_internal_transfer(Request $request){
        $request->validate([
            'amount'=>'required|numeric',
            'client_id'=>'required|exists:users,email'
        ]);

                $userid=Auth::id();
        // $userWallet = Wallet::where('uID',$userid)->get()->all();
        $user=User::where('id',$userid)->first();

        $result = DB::table('wallets')
             ->selectRaw('SUM(cr)-SUM(dr) as balance')
             ->where('uid', $userid)
             ->first();
    $balance = $result->balance;
  if($balance<$request->amount){
    return back()->with('msg','Insufficient balance');
  }
$reciever_user_row= User::where('email',$request->client_id)->first();

$reciever_user_id = $reciever_user_row->id;

  $wallet = new Wallet();
  $wallet->uID = $userid;
  $wallet->nar='Internal Transfer';
  $wallet->dr=$request->amount;
  $wallet->address=$request->client_id;
  $wallet->type=9;
  $wallet->status=1;
  $wallet->to_u=$reciever_user_id;
  $wallet->save();

  $wallet2 = new Wallet();
  $wallet2->uID = $reciever_user_id;
  $wallet2->nar='Internal Transfer';
  $wallet2->cr=$request->amount;
  $wallet2->address=$user->email;
  $wallet2->type=10;
  $wallet2->status=1;
  $wallet2->from_u=$userid;
  $wallet2->save();
  return redirect('transfer')->with('msg','Transfer Successful');
    }
    
}
