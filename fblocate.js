<script src="http://connect.facebook.net/en_US/all.js"></script>

<script type="text/javascript">
	/*Global variables*/
	var loggedIn = false;
	var friendLoaded = 0;
	var friends = null;
	var totalToBeLoaded = 0;
	
	function init() {
		document.getElementById("loginBtn").onclick = loginFacebook;
		document.getElementById("friendBtn").onclick = getFriends;
	}
	//calls init function once all the resources are loaded
	window.addEventListener("load",init,true);
		document.getElementById("status").innerHTML = "Waiting for Facebook permission";
	//opens the Facebook login window for user
		FB.login(function(response) {
			if (response.session) {	
				document.getElementById("status").innerHTML = "Logged In";
				loggedIn = true;
			} else {
				document.getElementById("status").innerHTML = "You have not given required permissions";
				loggedIn = false;
			}
		},{perms:'user_location,friends_location'});
	//disables the login button after the user has loggedIn
		if(loggedIn) {
			document.getElementById("loginBtn").disabled = "disabled";
		}
	}
	//gets the list of friends of the logged in person
	function getFriends() {
		//if the person has not pressed login button
		if(!loggedIn) {
			loginFacebook();
		}
	document.getElementById("status").innerHTML = "Now loading your friends' location...";
		//if the person is loggedIn
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
	//load the images one at a time
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
			//inserts a new row into the table
			var table = document.getElementById("location");
			var row = table.insertRow(table.rows.length);
			var cell = row.insertCell(0);
			cell.innerHTML = data1;
			cell = row.insertCell(1);
			cell.innerHTML = data2;
	}
	
</script>