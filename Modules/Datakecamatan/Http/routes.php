<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakecamatan', 'namespace' => 'Modules\Datakecamatan\Http\Controllers'], function()
{
    Route::get('/', 'DatakecamatanController@index');
});
