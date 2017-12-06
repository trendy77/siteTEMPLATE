var AYLIENTextAPI = require('aylien_textapi')
var WPAPI = require( 'wpapi' )

// Access the wpapi.js functionality through the WPAPI global, which
// is created by the wpapi.js script (upon which this depends)
(function( WPAPI ) {
  'use strict';

  // These files will be "localized" by WordPress when the script is
  // enqueued. Localization in this case has nothing to do with human
  // language, but instead is used to inject a NONCE (unique number)
  // into the script, which we use to authenticate with WordPress using
  // your normal login cookie. If you are logged in to WordPress, you
  // will be logged in within this script!
  var wp = new WPAPI({
    endpoint: WP_API_Settings.root,
    nonce: WP_API_Settings.nonce
  });

  // You can now authenticate, and read/write private data!
  wp.users().me().then(function( me ) {
    console.log( 'I am ' + me.name + '!' );
  });
})( window.WPAPI );


let textapi = new AYLIENTextAPI({
  application_id: process.env.AYLIEN_ID,
  application_key: process.env.AYLIEN_KEY
});


function getTags(text){
	textapi.hashtag({'text': text}, function(error, response) {
	  if (error === null) {	console.log(response); var tags = response.hashtags;  }
	});
}