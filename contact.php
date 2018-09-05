<?php
	require('connect.php'); 
	if(!isset($_SESSION['studentid'])) {
		//header("Location: student.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|Contact</title>
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
					<li><a href="events.php">Events</a></li>
					<li class="current"><a href="contact.php">Contact Us</a></li>
					<?php if(isset($_SESSION['studentid'])) { ?>					
					<li><a><?php echo 'Welcome ' .$_SESSION['firstname']; ?></a></li>
					<li>|</li>
					<li><a href="logout.php">Log Out</a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</header>





<section id="cont">
		<div class="container">
			<div class="apf">
				
				<h3>1. Address:</h3>
				<h4>R.H. SAPAT College of Engineering, Management Studies and Research,</br>Prin. T. A. Kulkarni Vidyanagar, College Road, Nashik Pin. 422 005.</h4>
				<h3>2. Phone No.:(O)
				<h4>0253-2570106</h4>
				<h3>3. Fax No.:</h3>
				<h4>0253-2570104</h4>
			</div>
			<div class="apf">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.216272062839!2d73.7574002630057!3d20.004149539964374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb8356a7c311%3A0xa2e92b505b8ff757!2sR.H.+Sapat+College+Of+Engineering+Management+Studies+%26+Research!5e1!3m2!1sen!2sin!4v1523166957181" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>


	
	
	<section id="staff">
		<div class="container">
			<div class="sbox">
				<p>Dr. P. C. Kulkarni</br>Principal</br></br>Phone No: 0253-2570104</br></br>Email: principal@ges-coengg.org</p>
			</div>
			<div class="sbox">
				<p>Prof. Y. R. Bhavsar</br>F.E. Co-ordinator</br></br>Email: fec@ges-coengg.org</p>
			</div>
			<div class="sbox">
				<p>Mrs. Y.P. Galapure</br>Librarian</br></br>Email: librarian@ges-coengg.org</p>
			</div>
		</div>
	</section>


	<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>
