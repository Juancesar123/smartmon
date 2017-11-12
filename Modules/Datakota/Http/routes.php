<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakota', 'namespace' => 'Modules\Datakota\Http\Controllers'], function()
{
    Route::get('/', 'DatakotaController@index');
});
