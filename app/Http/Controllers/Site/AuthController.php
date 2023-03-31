<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function SignIn(){

        return view('auth.signin');
     }


     public function SignUp(){

        return view('auth.signup');
     }
}
