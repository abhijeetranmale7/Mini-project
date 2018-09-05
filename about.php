<?php
	require('connect.php'); 
	if(!isset($_SESSION['studentid'])) {
		//header("Location: student.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|About</title>
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
					<li class="current"><a href="about.php">About Us</a></li>
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

	<center><h1>Roots of Values & Wings of Growth</h1></center>


<section id="boxes1">
		<div class="container">
			<div class="box1">
				<img src="img\krishnagokhale.png">
				<h3>Namdar Gopal Krishna Gokhale</h3>
				<h5>Guru of Mahatma Gandhi</br>After Whom our society is named</h5>
			</div>
			<div class="box1">
				<img src="img\ges-logo.png">
				<h3>Estd. 1918</h3>
			</div>
			<div class="box1">
			<img src="img\prinkulkarni.png">
				<h3>Prin. T. A. Kulkarni</h3>
				<h5>A Great Social Worker</br>Founder of the Society</h5>
			</div>
		</div>
	</section>


	
	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title">About Us</h1>
				<p>Gokhale Education Society was established on 19th February 1918, third death anniversary of Namdar Gopal Krishana Gokhale, by his illustrious disciple late Principal Trimbak Appa Kulkarni.</br>The college campus of 10 acres is in the heart of the city, on College Road, accessible from all the parts of the Nashik. The college has a lush green surrounding which provides conductive environment for students to grow not only as good Engineers but also as World Class citizens too. </p></center>	
			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>What We Do</h3>
					<p>Here at GES’s College of Engineering, we are committed to impart necessary skills and knowledge to our students in best possible manner, in good spirit and in good environment by allowing them to dream big and help them to achieve the same. Industry demands technocrat-leaders to serve various sectors. We all stake holders, including you, have to work in this direction to fulfill the dream INDIA-2020.</p>
				</div>
			</aside>
		</div>
	</section>


	<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>
