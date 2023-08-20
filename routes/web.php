<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function(){
    return view('contact');
});
/*
Route::post('/email', function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return '<h1>Email Page</h1>';
});
*/
Route::match(['post', 'get', 'PUT'], '/email', function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return '<h1>Email Page Match</h1>';
})->name('email');

Route::view('test', 'test', ['var_test'=>'Test Page']);

// Route::redirect('test', 'contact', 302);
// Route::permanentRedirect('test', 'contact');

// Route::get('post/{id}', function($id){
//     return 'Post $id';
// });

// Route::get('post/{id}/{slug}', function ($id, $slug) {
//     return "Post $id / $slug";
// })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);

// Route::get('post/{id}/{slug?}', function($id, $slug = null){
//     return "Post $id | $slug";
// });

// Route::get('posts', function () {
//     return 'Posts List';
// });
// Route::get('post/create', function () {
//     return 'Posts Create';
// });
// Route::get('post/{id}/edit', function ($id) {
//     return "Posts Edit $id";
// });

Route::prefix('admin')->group(function(){
    Route::get('posts', function () {
        return 'Posts List';
    });
    Route::get('post/create', function () {
        return 'Posts Create';
    });
    Route::get('post/{id}/edit', function ($id) {
        return "Posts Edit $id";
    });
});





