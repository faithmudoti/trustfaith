<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        return view('member.index');
    }

    public function member(Request $request)
    {

        if($request->membership == "STUDENT")
        {
            return view('member.verify');
        }

        elseif($request->membership == "GRADUATE")
        {
            return view('member.graduate');
        }

        elseif($request->membership == "PROFESSIONAL")
        {
            return view('member.proffesional');
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

}
