<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $myVar = 'Hello World';

        $contactInfo = $this->getContactInfo();
        return view('home', compact('myVar', 'contactInfo'));
    }


    private function getContactInfo(){
        $contactInfo = [
            'nome' => 'Sara Monteiro',
            'email' => 'Sara@gmail.com'
        ];

        return  $contactInfo;
    }
}
