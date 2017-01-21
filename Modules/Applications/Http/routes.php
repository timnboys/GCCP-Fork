<?php

Route::group(['middleware' => 'web', 'prefix' => 'applications', 'namespace' => 'Modules\Applications\Http\Controllers'], function()
{
    Route::get('/', 'ApplicationsController@index');
});
