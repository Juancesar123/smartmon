<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakeluhanwarga', 'namespace' => 'Modules\Datakeluhanwarga\Http\Controllers'], function()
{
    Route::get('/', 'DatakeluhanwargaController@index');
});
