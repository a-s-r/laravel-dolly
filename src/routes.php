<?php

/*
    Asr/Df routes here
*/

Route::get('form', function(){
    return "This is a form page";
});


Route::get('add/{a}/{b}', 'Asr\Dolly\DollyFormController@add');
Route::get('subtract/{a}/{b}', 'Asr\Dolly\DollyFormController@subtract');
