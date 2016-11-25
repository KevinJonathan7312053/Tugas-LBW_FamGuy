<?php
//Set your App ID and App Secret.
echo "Facebook <br><br>";
$appID = '728325207317368';
$appSecret = 'ea42acbdd49944fac290f593b82fd45d';
 
//Create an access token using the APP ID and APP Secret.
$accessToken = $appID . '|' . $appSecret;
 
//The ID of the Facebook page in question.
$id = '24609282673';
 
//Tie it all together to construct the URL
$url = "https://graph.facebook.com/$id/posts?access_token=$accessToken";
 
//Make the API call
$result = file_get_contents($url);
 
//Decode the JSON result.
$postFB = json_decode($result, true);
 
//Dump it out onto the page so that we can take a look at the structure of the data.
//var_dump($postFB);


echo "Twitter <br><br>";

require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "197729082-EVAD4axLvSqZZQ7bMk1ZWDGavfpZeup5zDwV6HMw",
    'oauth_access_token_secret' => "FitMTSdbHkn0UnMgKhpwdtK6bFK2zzH53hwso3NeVwmgN",
    'consumer_key' => "MoyRKnBHJtWd4nlZDXmQfr4oq",
    'consumer_secret' => "iWhzFxhqXsBX56v2x7932jCLqXz64CYxO0mAcRtLkKd2oq4WAT"
);
 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "FamilyGuyonFOX";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$postTwitter = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($postTwitter["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$postTwitter[errors][0]["message"]."</em></p>";exit();}
foreach($postFB['data'] as $itemsFB)
    {
		
        echo "message: ".$itemsFB['message']."<br />";
        echo "created_time: ". $itemsFB['created_time']."<br />";
        
		//The ID of the post.
		$postId = $itemsFB['id'];
		 
		//Tie it all together to construct the URL
		$url2 = "https://graph.facebook.com/$postId/";
		 
		//Make the API call
		$result2 = file_get_contents($url2);
		 
		//Decode the JSON.
		$decoded2 = json_decode($result2, true);
		 
		//Dump it out.
		//var_dump($decoded2);
		echo "link: ". $decoded2['link']."<br />";
		echo "img: <img src= ". $decoded2['picture']. "><br />";
		echo "id: ". $itemsFB['id']."<br /><hr />";
    }
	
foreach($postTwitter as $itemsTwitter)
    {	
		//var_dump($itemsTwitter);
        echo "Time and Date of Tweet: ".$itemsTwitter['created_at']."<br />";
        echo "Tweet: ". $itemsTwitter['text']."<br />";
        echo "Tweeted by: ". $itemsTwitter['user']['name']."<br />";
        echo "Screen name: ". $itemsTwitter['user']['screen_name']."<br />";
        echo "Followers: ". $itemsTwitter['user']['followers_count']."<br />";
        echo "Friends: ". $itemsTwitter['user']['friends_count']."<br />";
        echo "Listed: ". $itemsTwitter['user']['listed_count']."<br /><hr />";
    }

echo '<a class="twitter-timeline" href="https://twitter.com/FamilyGuyonFOX">Tweets by FamilyGuyonFOX</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>'
?>

