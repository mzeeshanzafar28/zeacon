<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KycController extends Controller
{
    public function kycPage(){
        $user = Auth::user();
       
        return view('user.kyc',get_defined_vars());
    }
    public function kycData(Request $request){
        // $user = Auth::user();
        // $user_row= User::find($user);
        $user = Auth::user();
        $user_row = User::find($user->id);

        $request->validate([
            'dob'=>'required',
            'phone'=>'required',
            'zipcode'=>'required',
            'address'=>'required',
            'state'=>'required',
            'country'=>'required',
            'doc_type'=>'required',
            'document'=>'required|mimes:pdf',
            'checkbox'=>'required',
        ]);
        $user_row->dob=$request->dob;
        $user_row->phone=$request->phone;
        $user_row->zipcode=$request->zipcode;
        $user_row->address=$request->address;
        $user_row->state=$request->state;
        $user_row->country=$request->country;

        $user_row->doc_type=$request->doc_type;

        // $user->document=$request->document;
        if($request->hasFile('document')){
            $doc = $request->file('document');
            $new_doc = str_replace(' ', '_', $doc->getClientOriginalName());
            $doc->move(public_path("documents"), $new_doc);
            $user_row->document  = $new_doc;
        }
        $user_row->status=2;
        $user_row->save();
        return back()->with('kycsuccess','Your KYC is Uploaded ');
    }
}
