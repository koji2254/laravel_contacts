<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){

    }

    public function index() {
        
        return view('home');
    }

    
    public function login_page() {
        
        return view('auth.login');
    }

    
    public function register_page() {
        
        return view('auth.register');
    }

    

}
