<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){

        // $insert = DB::insert("INSERT INTO posts (title, content, created_at, updated_at) VALUES (?, ?, ?, ?)", ['title 3','content 3', now(), now()]);
        // return $insert;

        // $update = DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE id = 1", [now(), now()]);
        // dump($update);

        // $delete = DB::delete("DELETE FROM posts WHERE id = ?", [4]);
        // dump($delete);

        // $select = DB::select('select * from posts');
        // $select = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 2]);
        // dump($select);

        DB::beginTransaction();
        try{
            $update = DB::update("UPDATE posts SET created_at = ? WHERE id = 5", [now()]);
            $update = DB::update("UPDATE posts SET updated_at = ? WHERE id = 5", [now()]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
        }
        $select = DB::select('select * from posts');
        dump($select);

        
        // return view('home', ['name'=>'john', 'age'=>23])."<br>";
        // dump($_ENV['APP_DEBUG']);
        // dump(env('APP_DEBUG'));
        // dump(env('MY_SETING', 'test'));
        // dump(config('app.timezone'));
        // dump(config('database.connections.mysql.database'));
        
        // dump($_ENV);
    }

    public function test(){
        return __METHOD__;
    }
}
