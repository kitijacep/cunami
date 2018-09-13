<?php

Route::get('/', function () {
    return view('landing');
});

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Route::post('/pets', 'SpaController@storePets');
Route::post('/payment', 'SpaController@storePayment');


