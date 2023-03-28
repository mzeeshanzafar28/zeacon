<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
// use Auth;
class AuthController extends Controller
{
    public function registerPage()
    {
        return view('sign-up');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required',
            'password'=>'required|min:8|confirmed',
            'account_type'=>'required',
            'terms'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',

        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_type = 0;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->account_type = $request->account_type;
        $user->password = Hash::make($request->password);
        $user->save();
        $code= rand(111111,999999);
        Session::put('code',$code);
        $data=[
            'subject'=>'Email Verification',
            'code'=>$code,

        ];
        
        Mail::to($request->email)->send(new VerifyEmail($data));
        
        // $request->session()->put('key', $value);
        session()->flash('message', 'Account Registered Successfully');
        return redirect('verify-email');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $checkUser = User::where('email', $request->email)->first();
        if ($checkUser) {
            if (Auth::attempt($user)) {
                $user = User::find(Auth::id());
                session()->flash('message', 'login successfull');
                if ($checkUser->user_type == 0) {
                    return redirect('dashboard');                    
                }else {
                    return redirect('admin/dashboard');
                }
            } else {
                session()->flash('message', 'Invalid Password');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'Invalid Email');
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function verify_email(Request $request){
        $request->validate([
            'code' => 'required'
        ]);
        if(Session::get('code')==$request->code){
            return view('login')->with('msg','Code Verified');
        }
        else{
            return back()->with('msg','Invalid Verification Code');
        }
    }
}
