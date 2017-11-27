<?php

function insertVig() {
echo "<script>  var vglnk = { key: 'db8e8b461e1b6dcc640b00494a7a95e9' }; (function(d, t) {   var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;   s.src = '//cdn.viglink.com/api/vglnk.js';  var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);  }(document, 'script'));
</script>";
}
  
function footScr(){
	echo "<script>  (function(d, s, id) {	var js, fjs = d.getElementsByTagName(s)[0];	if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = '//connect.facebook.net/en_US/sdk.js';		fjs.parentNode.insertBefore(js, fjs);			  }(document, 'script', 'facebook-jssdk'));
	function statusChangeCallback(response) {	console.log('statusChangeCallback'); console.log(response); if (response.status === 'connected') { testAPI(); } else { document.getElementById('status').innerHTML = 'Please log into this app.';
	}} window.fbAsyncInit = function() {	FB.init({  appId : '" . $fbappid . "',	cookie: true,	xfbml: true, version: 'v2.9' 	});
	FB.getLoginStatus(function(response) {	statusChangeCallback(response);	 FB.AppEvents.logPageView();   	});		};  function checkLoginState() {	  FB.getLoginStatus(function(response) {statusChangeCallback(response);	  });	}
	FB.getLoginStatus(function(response) {	  if (response.status === 'connected') {	var accessToken = response.authResponse.accessToken;	  } } ); function testAPI() {	console.log('Welcome!  Fetching your information.... ');		FB.api('/me', function(response) {	console.log('Successful login for: ' + response.name);				document.getElementById('status').innerHTML =
	'Thanks for logging in, ' + response.name + '!';	});	}</script> 	
			<!-- Twitter Button -->	<script>! function(d, s, id) {	var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';	if (!d.getElementById(id)) {	js = d.createElement(s);
			js.id = id;	js.src = p + '://platform.twitter.com/widgets.js';		fjs.parentNode.insertBefore(js, fjs);	}}(document, 'script', 'twitter-wjs');	</script>";		return; 
	}

	
function insertwinLive() {
$picpath = $path .'/live/';
$url =$_SERVER['SELF'];
echo '<meta name="application-name" content="' . $url . '"/><meta name="msapplication-square70x70logo" content="' . $picpath . 'small.jpg"/><meta name="msapplication-square150x150logo" content="' . $picpath . 'medium.jpg"/><meta name="msapplication-wide310x150logo" content="' . $picpath . 'wide.jpg"/>
	<meta name="msapplication-square310x310logo" content="' . $picpath . 'large.jpg"/><meta name="msapplication-TileColor" content="#ffffff"/><meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=' . $url . '/feed&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=' . $url . '/feed&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed='
     . $url . '/feed&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=' . $url . '/feed&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=' . $url . '/feed&amp;id=5; cycle=1"/>';
  }

function insertLike(){
	#	<!-- FB like Button-->
   echo '<div  class="fb-like"  data-share="true"  data-width="450"  data-show-faces="true"></div>';	return;
}

function insertSignIn(){
			echo '<div class="item1"><div id="gConnect" class="button"><button class="g-signin" data-scope="email" data-clientid="841077041629.apps.googleusercontent.com" data-callback="onSignInCallback" data-theme="dark" data-cookiepolicy="single_host_origin">
	</button><div id="response" class="hide"><textarea id="responseContainer" style="width:100%; height:150px"></textarea></div></div></div><div class="item2"></div>';
  #    <!--login with FB button-->
	  echo '<div class="fb-login-button" data-max-rows="2" data-size="large" data-button-type="login_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="false"></div>';
 }

function insertFollow(){
#     <!--twitter Button-->
  echo '<a href="https://twitter.com/' . $hash . '" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @'. $hash. '</a>';
#  <!--FB follow Button-->
   echo '<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2F' . $fbtit . '&width=450&height=80&layout=standard&size=small&show_faces=true&appId='. 
   $fbappid . '" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><div class="fb-follow" data-href="https://www.facebook.com/'. $fbtit . '" data-layout="standard" data-size="small" data-show-faces="true"></div>';
   return;
}

function adAd($content){
   $paragraphAfterT = 2; //Enter number of paragraphs to display ad after.
   $content = explode("</p>", $content);
    $new_content = '';  $new_contentT = '';
    for ($i = 0; $i < count($content); $i++) {
   if ($i == $paragraphAfterT) {
$new_contentT= '<div style="width: 336px; height: 280px; padding: 0px 0px 0px 0; float: right; margin-left: 18px; margin-right: 0;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-4943462589133750" data-ad-slot="1808495228"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>';
        }
        $new_contentT= $content[$i] . "</p>";		$new_content= $content[$i] . "</p>";
    }
    return $new_contentT;	
	}