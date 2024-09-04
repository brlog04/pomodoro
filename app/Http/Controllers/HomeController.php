<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
           // $user = Auth::user(); // Dobija ulogovanog korisnika
            return view('home');
        } else {
            return redirect('login'); // Preusmerava na stranicu za logovanje
        }
    }
}
