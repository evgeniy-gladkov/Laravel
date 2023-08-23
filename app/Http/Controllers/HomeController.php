<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // return view('home', ['name'=>'john', 'age'=>23])."<br>";
        dump($_ENV['APP_DEBUG']);
        // dump(env('APP_DEBUG'));
        // dump(env('MY_SETING', 'test'));
        // dump(config('app.timezone'));
        // dump(config('database.connections.mysql.database'));
        
        dump($_ENV);
    }

    public function test(){
        return __METHOD__;
    }
}
