<?php
	require_once('TwitterAPIExchange.php');
	$settings = array(
    'oauth_access_token' => "860092922657619969-O75q6QXhZZUcIygfEMHFa2E5zd2IGSP",
    'oauth_access_token_secret' => "e7BqhLAmxzl2fek9KYeNzpKpPkAOOt7uXURlcwP4cGiGe",
    'consumer_key' => "HhHKXbCf940bmiJyIABPfQnmc",
    'consumer_secret' => "ptbPNPWJgMg9SmvTxsTsbeRyC8DqKIHL1g3NGqs5WTGsXRM5OU"
	);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=#Embarazada';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$response = $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
	$string = json_decode($response,$assoc = TRUE);
	/*echo "<pre>";
	print_r($string);
	echo "</pre>";*/
	foreach($string as $items)
    {
    	foreach($items as $pos)
    	{
	        echo "Time and Date of Tweet: ".$pos['created_at']."<br />";
	        echo "Tweet: ". $pos['text']."<br />";
	        echo "Tweeted by: ". $pos['user']['name']."<br />";
	        echo "Screen name: ". $pos['user']['screen_name']."<br />";
	        echo "Location: ". $pos['user']['location']."<br />";
    	}
    	break;
    }
?>