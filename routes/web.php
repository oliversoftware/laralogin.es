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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

  /*  $user=Auth::user();

    if($user->esAdmin()){

        echo 'Eres Admin';

    }else{
        echo 'Eres estudiante';
    }
  */

    return view('welcome');
/*
    if (Auth::check()){
        return 'Estas logueado';
    }else{
         return 'No estás logueado';
    }

*/
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdministradorController@index');
