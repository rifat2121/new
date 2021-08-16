<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fun;


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


Route::group(['middleware' => 'prevent-back-history'],function(){
 



Route::get('/', function () {
    return redirect('/front');
});


//login
Route::get('/reg', function () {
    return view('a');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/image', function () {
    return view('image');
});

Route::get('/logout', function () {
    return view('login');
});
Route::get('/firstr', function () {
    return view('firstr');
});




Route::get('/st', function () {
    return view('studentpage');
});



Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/pls', function () {
    return view('pls');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/z', function () {
    return view('z');
});

Route::get('/forget', function () {
    return view('forget');
});

Route::get('/wrong', function () {
    return view('wrong');
});
Route::get('/server', function () {
    return view('server');
});
Route::get('/tusher', function () {
    return view('newchat');
});
Route::get('/cs', function () {
    return view('cs');
});

Route::get('/kk', function () {
    return view('kk');
});


Route::post('/stor','App\Http\Controllers\Fun@store');

Route::post('/store','App\Http\Controllers\Fun@storee');
Route::post('/logs','App\Http\Controllers\Fun@login');

Route::post('/image','App\Http\Controllers\Fun@index');

Route::get('/output','App\Http\Controllers\Fun@display');

Route::post('/status','App\Http\Controllers\Fun@status');

Route::get('/new','App\Http\Controllers\Fun@new');

Route::post('/form','App\Http\Controllers\Fun@form');


Route::get('/verified','App\Http\Controllers\Fun@verified');

Route::post('/cv','App\Http\Controllers\Fun@cv');

Route::post('/m','App\Http\Controllers\Fun@m');

Route::get('/front','App\Http\Controllers\Fun@front');

Route::post('/zz','App\Http\Controllers\Fun@zz');

Route::post('/forget','App\Http\Controllers\Fun@forget');

Route::post('/ch','App\Http\Controllers\Fun@ch');

Route::post('/cha','App\Http\Controllers\Fun@cha');

Route::get('/truncate','App\Http\Controllers\Fun@truncate');

Route::get('/stchat','App\Http\Controllers\Fun@stchat');


Route::post('/rifa','App\Http\Controllers\Fun@rifa');

Route::post('/rifat','App\Http\Controllers\Fun@rifat');

Route::post('/rifatt','App\Http\Controllers\Fun@rifatt');
Route::get('/dr','App\Http\Controllers\Fun@dr');

Route::post('/dre','App\Http\Controllers\Fun@dre');



Route::post('/cs','App\Http\Controllers\Fun@cs');

Route::get('/muin','App\Http\Controllers\Fun@muin');

Route::get('/de','App\Http\Controllers\Fun@de');

Route::post('/reg','App\Http\Controllers\Fun@reg');

Route::get('/pc','App\Http\Controllers\Fun@pc');

Route::get('/nc','App\Http\Controllers\Fun@nc');




Route::get('/a','App\Http\Controllers\Fun@a');
Route::get('/b','App\Http\Controllers\Fun@b');
Route::get('/c','App\Http\Controllers\Fun@c');
Route::get('/d','App\Http\Controllers\Fun@d');
Route::get('/e','App\Http\Controllers\Fun@e');
Route::get('/f','App\Http\Controllers\Fun@f');
Route::get('/g','App\Http\Controllers\Fun@g');
Route::get('/end','App\Http\Controllers\Fun@end');                                                                 

 Route::get('/VC','App\Http\Controllers\Fun@VCC');


});