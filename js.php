 <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://orgmy.biz/js/materialize.js"></script>
  <script src="https://orgmy.biz/js/init.js"></script>

  <script type="text/javascript">
  var vglnk = { key: 'db8e8b461e1b6dcc640b00494a7a95e9' };
  (function(d, t) {
    var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
    s.src = '//cdn.viglink.com/api/vglnk.js';
    var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
  }(document, 'script'));
</script>

          <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>   
    <!-- Twitter Button -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

  
  <script>
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  // Here we run a very simple test of the Graph API after login is successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
    </script>

	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php if ($FBAPPID){ echo $FBAPPID } else { echo '1863943023885616'; ?>',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>
  
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4943462589133750",
    enable_page_level_ads: true
  });
  </script>
  
  <script>
  function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    var accessToken = response.authResponse.accessToken;
  } 
} );

function onButtonClick() {
FB.AppEvents.logEvent("sentFriendRequest");
} ;
</script> 

<script>
// Only works after `FB.init` is called
function myFacebookLogin() {
  FB.login(function(){}, {scope: 'publish_actions'});
}
</script>


<script> 
kik.metrics.enableGoogleAnalytics();
kik.pickUsers(function (users) {
    if (!users) {
        // action was cancelled by user
    } else {
        users.forEach(function (user) {
            typeof user.username;  // 'string'
            typeof user.fullName;  // 'string'
            typeof user.firstName; // 'string'
            typeof user.lastName;  // 'string'
            typeof user.pic;       // 'string'
            typeof user.thumbnail; // 'string'
        });
    }
});
function handleBackButton () {
    // called when back button is pressed
    return false; // optionally cancel default behavior
}

kik.browser.back(handleBackButton);       // handle back button
kik.browser.unbindBack(handleBackButton); // unbind from handling back button

</script> 
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=ddd0de63-477b-4d8a-a6aa-174f676a7651"></script>
