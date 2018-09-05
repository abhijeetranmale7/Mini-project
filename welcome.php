<?php
	require('connect.php'); 
	if(!isset($_SESSION['studentid'])) {
		//header("Location: student.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|Home</title>
	<link rel="stylesheet" type="text/css" href="css\abhi.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h4>Contact Us: (O) 0253 - 2570106 | fec@ges-coengg.org</h4>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<?php if(!isset($_SESSION['studentid'])) { ?>
					<li><a href="student.php">Student</a></li>
					<?php } ?>
					<li><a href="events.php">Events</a></li>
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




<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>
