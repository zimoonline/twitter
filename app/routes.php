<?php


Route::get('/{query}', function($query)
{

    return Twitter::search($query);

    View::make('home', compact('tweets'));
//    return App::make('twitter')->search($query);
});


Route::get('/test/{query}', function($query)
{
    $tweets = TwitterThu::getSearch(array('q' => $query, 'count' => 100, 'format' => 'array'));
    return View::make('home', compact('tweets'));
});
