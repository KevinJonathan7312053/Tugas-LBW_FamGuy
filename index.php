<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="icon" href = "assets/Family_Guy.png"/>
    <title>Family Guy FanPage</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <style>
      .fontHome{
        font-family: 'Open Sans', sans-serif;
      	font-size: 25px;
      	line-height: 28px;
      	font-weight: 300;

      }

      .headerEdit{
        background-image: url("assets/back3.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;

      }
      .backSection1{
        background-image: url("assets/back01.jpg");
        background-size: 100% 100%;

      }
      .backSection2{
        background-image: url("assets/back02.jpg");
        background-size: 100% 100%;

      }
      .backSection3{
        background-image: url("assets/back03.jpg");
        background-size: 100% 100%;

      }
      </style>
</head>

<body id="home" class="index">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=728325207317368";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#facebook">Facebook</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#twitter">Twitter</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="headerEdit">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome to Family Guy FanPage!</div>
                <div class="intro-heading"><img src="assets/logo.png"></div>

            </div>
        </div>
    </header>

    <!-- Gallery Section -->
    <section id="gallery" class="bg-light-gray backSection1">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Gallery</h2>
              </div>
        </div>

            <div class="row">
              <div class="row carousel-holder">

                  <div class="col-md-8" style="float:left;margin:0% 0% 0% 17%;">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="4"></li>

                          </ol>
                          <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="assets/picture6.jpg" alt="">
                            </div>
                              <div class="item">
                                  <img class="slide-image" src="assets/picture1.png" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="assets/picture2.png" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="assets/picture3.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="assets/picture4.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="assets/picture5.jpg" alt="">
                              </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                      </div>
                  </div>

              </div>
            </div>
            <div class="row">
              <table>
                <tr>
                  <td>
                  <p class="lead"><img src="assets/peter.png"></p>
                  </td>
                  <td>
                      <h3>Best Quote's</h3></br>
                      <blockquote class="lead"><i>"I got and idea, an idea so smart my head would explode if I even began to know what I was talking about" - Peter</i></blockquote>
                  </td>
                </tr>
              </table>
            </div>

        </div>
      </div>
    </section>


    <!-- Facebook Section -->
    <section id="facebook" class="backSection2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Facebook</h2>
                </div>
                <h3 class="section-subheading text-center"><i class="fa fa-facebook"></i>
      Facebook Likes :
      <?php //Get Facebook Likes Count of a page
        function fbLikeCount($id,$appid,$appsecret){
//Construct a Facebook URL
$json_url ='https://graph.facebook.com/'.$id.'?access_token='.$appid.'|'.$appsecret.'&fields=fan_count';
$json = file_get_contents($json_url);
$json_output = json_decode($json);
//var_dump($json_output);
//Extract the likes count from the JSON object
if($json_output->fan_count){
return $likes = $json_output->fan_count;
}else{
return 0;
}
}
		$likeCount = fbLikeCount('24609282673','728325207317368','ea42acbdd49944fac290f593b82fd45d');
		if($likeCount>=1000000){
			echo floor($likeCount/1000000) . " M";
		}
		else if($likeCount<1000000&&$likeCount>=1000){
			echo floor($likeCount/1000) . " K";
		}
		else{
			echo $likeCount;
		}
        
      ?>
    </h3>
            </div>


            <div style="float:left;margin-left:27%;" class="col-md-8 col-lg-8 col-sm-8 col fb-page" data-href="https://www.facebook.com/FamilyGuy/" data-tabs="timeline" data-height="500" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-width="1000px">
                <blockquote cite="https://www.facebook.com/FamilyGuy/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/FamilyGuy/">Family Guy
                </a></blockquote>
            </div>

          </div>

    </section>

    <!-- Twitter Section -->
    <section id="twitter" class="bg-light-gray backSection3">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Twitter</h2>
                  <h3 class="section-subheading text-center"><i class="fa fa-twitter"></i>Twitter's Followers :
<?php
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
 //var_dump($postTwitter);
   $followerCount = $postTwitter[0]['user']['followers_count'];
		if($followerCount>=1000000){
			echo floor($followerCount/1000000) . " M";
		}
		else if($followerCount<1000000&&$likeCount>=1000){
			echo floor($followerCount/1000) . " K";
		}
		else{
			echo $followerCount;
		}
?>

        </h3>
              </div>
          </div>

            <div class="row">
              <div style="float:left;margin-left:20%;" class="col-md-8 col-lg-8 col-sm-8 col">
                <a class="twitter-timeline" data-height="500" data-width="100%" data-theme="light" href="https://twitter.com/FamilyGuyonFOX">Tweets by FamilyGuyonFOX</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

              </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; FamilyGuyFanPage 2016</span>
                </div>

            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
