<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('member.index');
    }

    public function member()
    {
        return view('member.verify');
    }

    public function profile()
    {
        return view('member.member');
    }
}
