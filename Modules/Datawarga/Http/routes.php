<?php

Route::group(['middleware' => 'web', 'prefix' => 'datawarga', 'namespace' => 'Modules\Datawarga\Http\Controllers'], function()
{
    Route::get('/', 'DatawargaController@index');
});
