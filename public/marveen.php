<?php
	require_once('TwitterAPIExchange.php');

	$settings = array(
    'oauth_access_token' => "860092922657619969-O75q6QXhZZUcIygfEMHFa2E5zd2IGSP",
    'oauth_access_token_secret' => "e7BqhLAmxzl2fek9KYeNzpKpPkAOOt7uXURlcwP4cGiGe",
    'consumer_key' => "HhHKXbCf940bmiJyIABPfQnmc",
    'consumer_secret' => "ptbPNPWJgMg9SmvTxsTsbeRyC8DqKIHL1g3NGqs5WTGsXRM5OU"
	);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=Embarazada';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$response = $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
	var_dump(json_decode($response));
?>