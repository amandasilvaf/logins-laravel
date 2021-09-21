<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    public function login(Request $request){
        return true;
    }

    public function index(){
        return view('auth.admin-login');
    }

}
