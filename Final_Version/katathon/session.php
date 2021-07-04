<?php
//Start session
session_start();

//Check session user
if (isset($_SESSION['UserFullName'])!=null){
	// echo "<b><p style='text-align:right;font-size:18px;'>Hello, ".$_SESSION['UserFullName']." ! &nbsp;|&nbsp; <a href='home.php' >Home </a>";
	$login_status="yes";
	$uid=$_SESSION['UserID'];
	$utype=$_SESSION['UserType'];
	if($utype=='Student'){ ?>
		<header>
			<div class="header-bottom wow fadeIn">
				<div class="container">
					<a class="navbar-brand" href=""><img src="images/logo.png" alt="image"></a>
					<nav class="main-menu">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a  href="home.php">Home</a></li>
							<li><a data-scroll href="about_us.html">About us</a></li>
							<li><a data-scroll href="events.php">Events</a></li>
							<li><a data-scroll href="blog.php">Blogs</a></li>
							<li><a data-scroll href="forum.php">Forum</a></li>
							<li><a data-scroll href="my_profile.php">Profile</a></li>
							<li><a data-scroll href="change_password.php">Change Password</a></li>
							<li><a data-scroll href="logout.php">Logout</a></li>
						</ul>
					</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="header-heading">
					<h1 style="text-align:left;float:left;" id="shebonds">She Bonds</h1>
					<h2 style="text-align:right;float:right;" id="tagline">Health Counselling from the experts</h2>
				</div>
				<div id="header-tagline">
					
				</div>
			</div>
		</header>
   <?php
	}
	else if ($utype=='Admin'){ ?>
		<header>
			<div class="header-bottom wow fadeIn">
				<div class="container">
					<a class="navbar-brand" href=""><img src="images/logo.png" alt="image"></a>
					<nav class="main-menu">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Home</a></li>
							<li><a data-scroll href="about_us.html">About us</a></li>
							<li><a data-scroll href="events.php">Events</a></li>
							<li><a data-scroll href="blog.php">Blogs</a></li><li><a data-scroll href="forum.php">Forum</a></li>
							<li><a data-scroll href="my_profile.php">Profile</a></li>
							<li><a data-scroll href="change_password.php">Change Password</a></li>
							<li><a data-scroll href="logout.php">Logout</a></li>
						</ul>
					</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="header-heading">
					<h1 style="text-align:left;float:left;" id="shebonds">She Bonds</h1>
					<h2 style="text-align:right;float:right;" id="tagline">Health Counselling from the experts</h2>
				</div>
				<div id="header-tagline">
					
				</div>
			</div>
		</header>
	<?php
	}
	else{ ?>
		<header>
			<div class="header-bottom wow fadeIn">
				<div class="container">
					<a class="navbar-brand" href=""><img src="images/logo.png" alt="image"></a>
					<nav class="main-menu">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Home</a></li>
							<li><a data-scroll href="aboutus.html">About us</a></li>
							<li><a data-scroll href="events.php">Events</a></li>
							<li><a data-scroll href="#blogs">Blogs</a></li>
							<li><a data-scroll href="forum.php">Forum</a></li>
							<li><a data-scroll href="logout.php">Logout</a></li>
						</ul>
					</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="header-heading">
					<h1 style="text-align:left;float:left;" id="shebonds">She Bonds</h1>
					<h2 style="text-align:right;float:right;" id="tagline">Health Counselling from the experts</h2>
				</div>
				<div id="header-tagline">
					
				</div>
			</div>
		</header>
	<?php
	}
}
else{ ?>
		<header>
			<div class="header-bottom wow fadeIn">
				<div class="container">
					<a class="navbar-brand" href=""><img src="images/logo.png" alt="image"></a>
					<nav class="main-menu">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Home</a></li>
							<li><a data-scroll href="aboutus.html">About us</a></li>
							<li><a data-scroll href="my_profile.php">Profile</a></li>
							<li><a data-scroll href="login_register.php">Login / Register</a></li>
						</ul>
					</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="header-heading">
					<h1 style="text-align:left;float:left;" id="shebonds">She Bonds</h1>
					<h2 style="text-align:right;float:right;" id="tagline">Health Counselling from the experts</h2>
				</div>
				<div id="header-tagline">
					
				</div>
			</div>
		</header>
	<?php
	$login_status="no";
}
?>