<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $myVar = 'Hello World';

        $contactInfo = ['nome', 'email'];

        return view('home', compact('myVar', 'contactInfo'));
    }
}
