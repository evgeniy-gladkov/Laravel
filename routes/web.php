<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test\TestController;





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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/contact', function(){
//     return view('contact');
// });
/*
Route::post('/email', function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return '<h1>Email Page</h1>';
});
*/
// Route::match(['post', 'get', 'PUT'], '/email', function(){
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     return '<h1>Email Page Match</h1>';
// })->name('email');

// Route::view('test', 'test', ['var_test'=>'Test Page'])->name('test');

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

// Route::prefix('admin')->group(function(){
//     Route::get('posts', function () {
//         return 'Posts List';
//     });
//     Route::get('post/create', function () {
//         return 'Posts Create';
//     });
//     Route::get('post/{id}/edit', function ($id) {
//         return "Posts Edit $id";
//     });
// });

Route::fallback(function(){
    // return redirect()->route('index');
    abort(404, 'Oops page not found');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/page/{slug}', [PageController::class, 'show']);
Route::get('/test2', [TestController::class, 'index']);

Route::resource('/posts', PostController::class, ['parameters'=>[
    'posts' => 'slug',
]]);

// Контроллеры ресурсов 30:20
