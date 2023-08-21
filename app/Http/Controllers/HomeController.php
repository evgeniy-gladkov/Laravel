<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home', ['name'=>'john', 'age'=>23]);
    }

    public function test(){
        return __METHOD__;
    }
}
