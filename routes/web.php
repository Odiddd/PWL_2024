<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'hello';
// });

Route::get('/world', function () {
    return 'world';
});

// Route::get('/hello', function(){ 
//     return 'Hello World';
// });

Route::get('/', function(){ 
    return 'Selamat Datang ';
});

Route::get('/about', function(){ 
    return '2241720111 Dido Imam Padmanegara ';
});

// Percobaan 2
Route::get('/user/{name}', function($name){ 
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comments}', function($postId, $commentId){ 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//Percobaan 3
Route::get('/user/{name?}', function($name=null){ 
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function($name='Jhon'){ 
    return 'Nama saya '.$name;
});

//Percobaan 4
Route::get('/user/profile', function(){ 
    //
})->name('profile');

//Controller
Route::get('/hello', [WelcomeController::class,'hello']);

//Page
Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

//Photo
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);

    // Route::get('/greeting', function () {
    //     return view('blog.hello', ['name' => 'Dido']);
    //     });

//view welcome controller
Route::get('/greeting', [WelcomeController::class,'greeting']);