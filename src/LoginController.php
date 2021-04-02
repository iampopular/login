<?php

namespace Devhiren\Login;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function index(){
        //echo "Login Works.";
        return view('login::login');
    }

    public function loginSubmit(Request $request){
        dd($request->all());
        echo "Login submit Works.";
    }
}
