
<script>
	function showResult(str) {
	if (str.length==0) {
		document.getElementById("livesearch").innerHTML="";
		document.getElementById("livesearch").style.border="0px";
		return;
	}
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		document.getElementById("livesearch").innerHTML=this.responseText;
		document.getElementById("livesearch").style.border="1px solid #A5ACB2";
		}
	}
	xmlhttp.open("GET","/test/search/livesearch.php?q="+str,true);
	xmlhttp.send();
	}
</script>
	
	<!-- Header -->
	<header>
		<input type="checkbox" name="check" id="check">
		<!-- LOGO -->
		<a class="logo" href="/test/"><img src="/test/logo.png"/></a>
		<!-- NavBar -->
		<nav class="nav">
			<div class="divider"></div>
			<a href="/test/">Home</a>
			<a href="/test/pets/">Pets</a>
			<div class="dropdown">
  			<button class="dropbtn">About</button>
  				<div class="dropdown-content">
   					<a href="/test/about.php">About</a>
    					<a href="/test/terms_condition.php">Terms & Conditions</a>
    					<a href="/test/privacy_policy.php">Privacy Policy</a>
  				</div>
			</div>
			<a href="/test/contact/">Contact</a>
		</nav>

		<div>
		<form class="search" style="position: relative;">
				<i class="fa fa-fw fa-search"></i>
				<input type="text" size="10" onkeyup="showResult(this.value)">
				<div id="livesearch"></div>
		</form>
		</div>
		<div>
		<a class="wishlist-icon" href="/test/wishlist/" id"wishlist-icon">
        		<i class="fa fa-heart" aria-hidden="true"></i>

   		 </a>
		</div>
		<!-- User form button group -->
		<div class="user-form-group">
			<button class="button" id="form-open">Login</button>
			<div class="userAcc">
				<i class="fa fa-user AccIcon"></i>
				<div class="user-dropdown-content">
					<i class="fa fa-sign-out logoutIcon">Logout</i>
				</div>
			</div>
			<!--<a class="signup" href="#">Sign Up</a>-->
			<label for="check">
				<i class="fa fa-bars menu" aria-hidden="true"></i>
				<i class="fa fa-times close-menu" aria-hidden="true"></i>
			</label>
		</div>
	</header>

	<script defer src="/test/script.js"></script>
	<script defer src="/test/cookies/cookiesScript.js"></script>
