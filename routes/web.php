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
    return view('welcome');
});


Route::get('/relationship',function (){

    echo "Inside relationship";
    $user=\App\Models\User::find(2);

    $user->locations()->sync([1]);
    $user->locations()->sync([3]);


   dd($user->locations);



});
