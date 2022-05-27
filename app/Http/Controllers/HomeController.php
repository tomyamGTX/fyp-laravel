<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//add Auth f(x)- get the user type data easily
use Illuminate\Support\Facades\Auth;

//add user modem
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            return view('user.home');
        }

    }

    public function index()
    {
        return view('user.home');  
    }

}
