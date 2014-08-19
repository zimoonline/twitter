<?php


Route::get('/{query}', function($query)
{

    return Twitter::search($query);
//    $array = json_decode($tweets);
//
//    return View::make('home', compact('array'));
//    return App::make('twitter')->search($query);



});
