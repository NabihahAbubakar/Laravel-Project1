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

// Route::get('/login', function () {
//     return view('login_form');
// });

Route::get('/register', function () {
    return view('register_form');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/gallery', function () {
    return view('gallery');
});



Route::get('/login/{name?}/{pass?}', function ($name,$pass=null) {
   $data= compact('name','pass');
    return view('login_form')->with($data);
});


?>