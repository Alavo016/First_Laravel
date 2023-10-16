<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Fonction_Controller extends Controller
{

    // Controlleur pour le vue home    

    public function Home(){
        return view('Home.home');
    }

    // Controlleur pour le vue about    
    
    public function About(){
        return view('Home.about');
    }
        
    // Controlleur pour le vue home    
    
    public function Contact(){
        return view('Home.Contact');
    }
    public function Dashbord(){
        return view('Home.Dashbord');
    } 

    // Controller pour la deconexion
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function ok(){
        return view('Home.ok');
    }

}
