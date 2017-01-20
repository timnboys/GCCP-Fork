<?php

Route::group(['middleware' => 'web', 'prefix' => 'examplemodule', 'namespace' => 'Modules\ExampleModule\Http\Controllers'], function()
{
    Route::get('/', 'ExampleModuleController@index');
});
