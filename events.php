<?php
	require('connect.php'); 
	if(!isset($_SESSION['studentid'])) {
		//header("Location: student.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|Events</title>
	<link rel="stylesheet" type="text/css" href="css\abhi.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h4>Contact Us: (O) 0253 - 2570106 | fec@ges-coengg.org</h4>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<?php if(!isset($_SESSION['studentid'])) { ?>
					<li><a href="student.php">Student</a></li>
					<?php } ?>
					<li class="current"><a href="events.php">Events</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<?php if(isset($_SESSION['studentid'])) { ?>					
					<li><a><?php echo 'Welcome ' .$_SESSION['firstname']; ?></a></li>
					<li>|</li>
					<li><a href="logout.php">Log Out</a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</header>


<center><h1>Computer Engineering Department Event (IGNITRA 2k18)</h1></center>

	<section id="eve">
		<div class="container">	
			<div class="comp">
				<center><video width="400" height="300" controls>
  				<source src="gokhalecomp.mp4" type="video/mp4">
  				</video></center>
			</div>
			<div class="comp">
				<center><img src="img\events.jpg" width="500"></center>
			</div>
		</div>
	</section>


	<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>
