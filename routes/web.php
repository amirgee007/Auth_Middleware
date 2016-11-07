<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/jq', 'jqueryController@index');
Route::get('/track', 'trackController@index');
Route::get('/release',['as' => 'release', 'uses' => 'releaseController@index']);
Route::get('/artist', 'artistController@index');
Route::post('/addrelease',['as' => 'addrelease', 'uses' => 'releaseController@Store']);
Route::post('/addrartist', 'artistController@Store');
Route::get('/deleteeditrealease',['as' => 'deleteeditrealease', 'uses' => 'releaseController@showrealsedelete']);
Route::get('/deleterealease/{id}', ['as' => 'deleterealease', 'uses' => 'releaseController@deleterealease']);


Route::get('/editrealease/{id}',['as' => 'editrealease', 'uses' => 'releaseController@editrealease']);
Route::post('editrealease/{id}',  'releaseController@update');
Route::group(['middleware'=>['admin']],function(){

    Route::get('admin',function(){

        if (Auth::check())
        {
            //echo 'loges in ';
            echo csrf_field();

        }
        else   {
            echo 'not loged in ';


        }

    });


});


Route::get('ad',function(){

    if (Auth::check())
    {
        echo 'loges in ';

    }
    else   {
        echo 'not loged in ';


    }

});

