<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use AuthenticateUsers;

class KasirLoginController extends Controller
{
    //
    protected $redirecTo = '/kasir/home';

    public function _construct()
    {
    	$this->middleware('guest:kasir')->except('logout')->except('index');
    }

    public function index()
    {
    	return view('kasir.home');
    }

    public function login()
    {
    	return view('kasir.home');
    }

    public function showLoginForm()
    {
    	return view('kasir.auth.login');
    }

    public function showRegisterForm()
    {
    	return view('kasir.auth.register');
    }

    public function username()
    {
    	return 'username';
    }

    protected function guard()
    {
    	return Auth::guard('kasir');
    }

    public function register(Request $request)
    {
    	$request->validate([
    		'username'	=> 'required|string|unique:kasirs',
    		'email'		=> 'required|string|email|unique:kasirs',
    		'password'	=> 'required|string|min:4|confirmed'
    	]);
    	\App\Kasir::create($request->all());
    	return redirect()->route('kasir.registerform')->with('success', 'Successfully register!');
    }
}
