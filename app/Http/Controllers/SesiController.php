<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required',

        ],[
            'name.required'=>"Username tidak boleh kosong",
            'password.required'=>"Password tidak boleh kosong"
        ]);

        $infologin = [
            'name'=>$request->name,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin/admin');
            }elseif (Auth::user()->role == 'user'){
                return redirect('admin/user');
            }elseif (Auth::user()->role == 'premium'){
                return redirect('admin/premium');
            }
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
