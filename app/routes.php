<?php

use Guzzle\Service\Client;

Route::get('/{query}', function($query)
{
	$client = new Client('https://api.twitter.com/1.1');

    $auth = new Guzzle\Plugin\Oauth\OauthPlugin([

        'consumer_key'       => 'WScAxuRTOQqu2nXi5F2balPQa',
        'consumer_secret'    => '0mIjUOjxw9cyjBNY0tKpFAVkdGg67w6YwzJx2k0kvbhJjVnAK0',
        'token'              => '23329358-9JPvFcXSeJ7IEe3fk6qL740KU8wOxJ93sijxseWOB',
        'token_secret'       => 'l2gL9VHjhQFs80CpXa6xD0ctPmxQ1KwzkvfMR0kluDK5m'
    ]);

    $client->addSubscriber($auth);

    $response = $client->get("search/tweets.json?q=" . urlencode($query))->send();

    $tweets = array_fetch($response->json()['statuses'], 'text');

    dd($tweets);

});
