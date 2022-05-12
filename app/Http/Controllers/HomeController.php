<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index function started
    public function index (){
        return view("home");
    }
}
