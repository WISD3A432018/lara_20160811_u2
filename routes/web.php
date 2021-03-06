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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/welcome', function () {
    return ('welcome');
});

Route::get('say/{name?}',['as'=>'hello.name',function($name='Everybody'){
   return'Hello,'.$name;
}]);

Route::get('dashboard',function(){
    return 'dashboard';
});
// http://localhost:8888/dashboard

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return 'admindashboard';
    });
});

//http://localhost:8888/admin/dashboard

Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);


