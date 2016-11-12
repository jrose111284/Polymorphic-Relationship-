<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Staff;
use App\product;
use App\Photo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {

    $staff = Staff::findOrFail(2);

    $staff->photos()->create(['path'=>'example_2.jpg']);

});
Route::get('/read', function () {

    $staff = Staff::findOrFail(2);

   foreach ($staff->photos as $photo) {
       return $photo->path;
   }


});

Route::get('/update', function () {
//upades the imageable id
    $staff = Staff::findOrFail(2);

    foreach ($staff->photos as $photo) {
        $photo->update(['path'=>'jamie.png']);
        $photo->save();
    }


});