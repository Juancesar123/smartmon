<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakelurahan', 'namespace' => 'Modules\Datakelurahan\Http\Controllers'], function()
{
    Route::get('/', 'DatakelurahanController@index');
});
