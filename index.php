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


<section id="showcase">
		<div class="container">
			<center><img src="img\100yearlogo.jpg" width="250"></center>
			
			<center><h2>Gokhale Education Society’s</h2></center>
			<center><h1>R. H. Sapat College Of Engineering, Management Studies And Research,</h1></center>
			<center><h2>Prin. T. A. Kulkarni Vidyanagar, College Road, Nashik - 5</h2></center>
			<center><h3>"Value Embedded Quality Technical Education"</h3></center>
		</div>
	</section>

	<center><img src="img\College-Photo.png" width="1345"></center>

	<section id="boxes">
		<div class="container">
			<div class="box">
				<img src="img\vision.png">
				<p>To Produce World class Engineers for converting global challenges into Opportunities through “Value Embedded Quality Technical Education”.
					To develop this College as an Academy of Higher Learning in the field of Engineering & Technology.</p>
			</div>
			<div class="box">
				<img src="img\mission.png">
				<p>To Impart Technical Education through effective Teaching-learning process,
					To Nurture Creativity & Critical thinking in applying Engineering skills to face the fast growing globalization,
					To Develop Holistic Personality of the learners,
					To make this Institute as a Lead Centre of Research.</p>
			</div>
			<div class="box">
			<img src="img\objective.png" width=300>
				<p>To Provide Quality Education through Formal & Non-Formal streams – Liberal, Technical & Vocational courses relevant to Changing Time;
					To Inculcate Self-Development among the Learners;
					To Increase Awareness in the Society about Central & Societal Issues;
					To Promote Research through Innovation, Integration & Internationalisation.
					Through Quality Education Develop All-round Personality of the Student and enhance their acceptance in the Employer World.</p>
			</div>
		</div>
	</section>

	

<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>
