<?php

Route::get('/', function(){
    return Redirect::to('hiring%20developer');
});
Route::get('/{query}', 'TweetsController@index');