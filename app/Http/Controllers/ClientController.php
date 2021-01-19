<?php

namespace App\Http\Controllers;

use App\Mail\VeryStepOne;
use Encore\Admin\Middleware\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{

    public function index()
    {
        return view('member.index');
    }

    public function member(Request $request)
    {
        session()->put('membership', [
            'email' => $request->email,
            'membership' => $request->membership
        ]);
        
        $user_info = session('membership');

        Mail::to($user_info['email'])->send(
            new VeryStepOne($user_info)
        );
        
        return view('email.emaildisplay');

    }

    public function verify(){
       session()->put('verify' , [
           'verified' => 1
       ]);
       return redirect(route('student-registration'));
    }

    public function student(){
        if(session()->has('verify') ){

            if(session('membership')['membership'] == "STUDENT"){
                return view('member.verify');
            }

            elseif(session('membership')['membership'] == "GRADUATE"){
                return view('member.graduate');
            }

            elseif(session('membership')['membership'] == "PROFESSIONAL"){
                return view('member.proffesional');
            }
        
        }

       else{
         return redirect(route('email-verification'));
      }     
    }
   

    public function profile()
    {
        return view('member.member');
    }

    public function graduate()
    {
        return view('member.graduate');
    }

    public function admin()
    {
        return view('member.admin');
    }

    public function professional()
    {
        return view('member.proffesional');
    }

    public function membership()
    {
        return view('member.membership');
    }

}
