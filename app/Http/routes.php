<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


    return view('welcome');
//    return redirect('/researcher/trial/2');
});

Route::get('/researcher', 'ResearcherController@index');
Route::get('/researcher/trial/{trial_id}', 'ResearcherController@trial');
Route::get('/researcher/trial/{trial_id}/participants/', 'ResearcherController@trialparticipants');

Route::get('/participant/{participant_id}','ParticipantController@index');

Route::get('/trials',function(){

    return App\Trial::all();
});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
