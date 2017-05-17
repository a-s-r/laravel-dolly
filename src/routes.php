<?php

/*
    Asr/Df routes here
*/

Route::get('dolly-form', function(){
    return "This is a dolly form page";
});


Route::get('dolly-add/{a}/{b}', 'Asr\Dolly\DollyFormController@add');
Route::get('dolly-subtract/{a}/{b}', 'Asr\Dolly\DollyFormController@subtract');
