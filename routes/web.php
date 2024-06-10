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



// Route::get("/", "PageController@Login")->name('login');
// Route::get("/changePassword", "PageController@changePassword");
// Route::post("/updatePassword", "pagecontroller@updatePassword");
// Route::get("/logout", "AuthController@logout");
// Route::post("/login", "AuthController@checkLogin");
// Route::get('/Home', 'PageController@Home');
// Route::get('/About', 'PageController@About');
// Route::get('/MasterData', 'PageController@MasterData');
// route::get('/FAQ', 'PageController@FAQ');
// Route::get('/MasterData/create', 'pageController@create');
// Route::post('/save', 'pagecontroller@save');
// Route::get('/edit/{id}', 'pagecontroller@edit');
// Route::get('/delete/{id}', 'pagecontroller@delete');
// Route::put('/update/{id}', 'pagecontroller@update');

Route::group(['middleware' => 'auth'], function () {
    Route::get("/changePassword", "PageController@changePassword");
    Route::post("/updatePassword", "pagecontroller@updatePassword");
    Route::get("/logout", "AuthController@logout");
    Route::get('/Home', 'PageController@Home');
    Route::get('/About', 'PageController@About');
    Route::get('/MasterData', 'PageController@MasterData');
    route::get('/FAQ', 'PageController@FAQ');
    Route::get('/MasterData/create', 'pageController@create');
    Route::post('/save', 'pagecontroller@save');
    Route::get('/edit/{id}', 'pagecontroller@edit');
    Route::get('/delete/{id}', 'pagecontroller@delete');
    Route::put('/update/{id}', 'pagecontroller@update');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'AuthController@checkLogin');
    Route::get('/', 'PageController@Login')->name('login');
});
