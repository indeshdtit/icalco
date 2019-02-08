<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::group(['namespace' => 'Indesh\Icalco'], function()
{
    Route::get('add/{a}/{b}', 'CalculatorController@add');
    Route::get('subtract/{a}/{b}', 'CalculatorController@subtract');
});