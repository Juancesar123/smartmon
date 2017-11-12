<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakas', 'namespace' => 'Modules\Datakas\Http\Controllers'], function()
{
    Route::get('/', 'DatakasController@index');
});
