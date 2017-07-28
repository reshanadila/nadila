<?php

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

Route::get('/sekolah', function () {
    return view('sekolah');
});
Route::get('/testmodel', function () {
	$query = App\Post::all();
    return $query;
});

Route::get('/testmodel1', function () {
	$a = App\Post::find(1);
    return $a;
});

Route::get('/testmodel2', function () {
	$b = App\Post::where('title','like','%cepat nikah%')->get();
    return $b;
});

Route::get('/testmodel', function () {
	$query = App\Post::all();
    return $query;
});
Route::get('/siswa', function () {
	$a = App\Siswa::all();
    return $a;
});

