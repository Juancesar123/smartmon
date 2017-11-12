<?php

Route::group(['middleware' => 'web', 'prefix' => 'userlevel', 'namespace' => 'Modules\Userlevel\Http\Controllers'], function()
{
    Route::get('/', 'UserlevelController@index');
});
