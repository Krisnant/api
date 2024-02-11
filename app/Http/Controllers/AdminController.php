<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        // echo "welcome admin";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout' >LogOut</a>";
        return view ('admin');
    }
    function user(){
        echo "welcome user";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout' >LogOut</a>";
    }
    function premium(){
        echo "welcome premium";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout' >LogOut</a>";
    }
}
