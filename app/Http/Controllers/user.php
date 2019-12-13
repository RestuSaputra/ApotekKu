<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Session;

class user extends Controller
{
    //
    public function index()
    {
        return view ('home');
    	//if(!Session::get('home')){
    	//	return redirect('login')->with('alert', 'Anda harus login terlebih dahulu');
    	//}else{
    	//	return view('home');
    	//}
    }

    public function login(){
    	return view('login');
    }

    public function loginPost(Request $request){
    	$username = $request->username;
    	$password = $request->password;

    	$data = ModelUser::where('username',$username)->first();
    	if ($data){
    		if(Hash::check($password, $data->password)){
    			Session::put ('name', $data->name);
    			Session::put ('email', $data->email);
    			Session::put ('login', TRUE);
                Session::put ('level', $data->level);
                if($data->level == "admin")
                {
                    return view('menuadmin');
                }else if($data->level == "kasir"){
                    return view('menukasir');
                }else if($data->level == "apoteker"){
                    return view('menuapoteker');
                }else{
                    return view('menuowner');
                }
    		}
    		else{
                Session::flush();
    			return redirect ('login')->with('alert','Maaf, Password atau Username Salah!!!');
    		}
    	}
    	else{
            Session::flush();
    		return redirect('login')->with('alert', 'Maaf, Password atau username Salah!!!');
    	}
    }

    public function logout(){
    	Session::flush();
    	return redirect('login')->with('alert','Anda Sudah logout');
    }

    public function register(Request $request){
    	return view('register');
    }

    public function registerPost(Request $request){
    	$this->validate($request,[
    		'name'			=> 'required|min:4',
    		'username'		=> 'required|min:4',
    		'email'			=> 'required|min:4|email|unique:users',
    		'password'		=> 'required',
            'level'         => 'required',
    		'confirmation'	=> 'required|same:password',
    	]);

    	$data = new ModelUser();
    	$data->name = $request->name;
    	$data->username = $request->username;
    	$data->email = $request->email;
    	$data->password = bcrypt($request->password);
        $data->level = $request->level;
    	$data->save();
    	return redirect('login')->with('alert-success','Berhasil mendaftarkan pengguna baru');

    }
}
