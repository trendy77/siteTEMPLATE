// location.js
/*Global variables*/
	var loggedIn = false;
	var friendLoaded = 0;
	var friends = null;
	var totalToBeLoaded = 0;

	function loginFacebook() {
		FB.init({appId : "1209167032497461", status : true,cookie : true,xbfml : true});
		document.getElementById("status").innerHTML = "Waiting for Facebook permission";

		FB.login(function(response) {
			if (response.session) {
				document.getElementById("status").innerHTML = "Logged In"; loggedIn = true;
			} else {
				document.getElementById("status").innerHTML = "You have not given required permissions"; loggedIn = false;
			}
		},{perms:'user_location,friends_location'});

		if(loggedIn) {
			document.getElementById("loginBtn").disabled = "disabled";
		}
	}

function getFriends() {
		if(!loggedIn) {
			loginFacebook();
		}
		document.getElementById("status").innerHTML = "Now loading your friends' location...";
		if(loggedIn) {
			document.getElementById("friendBtn").disabled = "disabled";
			FB.api("/me/friends",function(response){
					friends = response["data"];
					totalToBeLoaded = friends.length;
					addNewRow("Name","Location");
					loadLocation(0);
					});
		}
	}

	function loadLocation(friendNumber) {
		FB.api("/"+friends[friendNumber].id,function(response){
			var out="";
			if(response.location!=null) {
				out += response.location["name"];
			} else {
					out = "--";
			}
			addNewRow(response.name,out);
			friendLoaded = friendNumber+1;
			loadLocation(friendLoaded);
		});
		document.getElementById("status").innerHTML = "Loaded locations of "+friendNumber+" out of "+totalToBeLoaded + " friends";
	}

	function addNewRow(data1,data2) {
			var table = document.getElementById("location");
			var row = table.insertRow(table.rows.length);
			var cell = row.insertCell(0);
			cell.innerHTML = data1;
			cell = row.insertCell(1);
			cell.innerHTML = data2;
	}
	function init() {
		document.getElementById("loginBtn").onclick = loginFacebook;
		document.getElementById("friendBtn").onclick = getFriends;
	}
	window.addEventListener("load",init,true);
