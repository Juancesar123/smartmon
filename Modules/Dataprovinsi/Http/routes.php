<?php

Route::group(['middleware' => 'web', 'prefix' => 'dataprovinsi', 'namespace' => 'Modules\Dataprovinsi\Http\Controllers'], function()
{
    Route::get('/', 'DataprovinsiController@index');
});
