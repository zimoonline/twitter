<?php

// You can find the keys here : https://dev.twitter.com/

return array(
	'API_URL'             => 'api.twitter.com',
	'API_VERSION'         => '1.1',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => Config::get('twitter.consumer_key'),
	'CONSUMER_SECRET'     => Config::get('twitter.consumer_secret'),
	'ACCESS_TOKEN'        => Config::get('twitter.token'),
	'ACCESS_TOKEN_SECRET' => Config::get('twitter.token_secret'),
);