<?php 
	require('connect.php'); 
	if(isset($_SESSION['studentid'])) {
		header("Location: index.php");
	} else if (isset($_POST['uname']) && isset($_POST['passwd'])) {
		$uname = $_POST['uname'];
        $passwd = md5($_POST['passwd']);
         
        $query = "SELECT * FROM `students` WHERE username='".$uname."' AND password='".$passwd."'";
        $result = mysqli_query($connection, $query);
        if($result->num_rows > 0){
            $student = mysqli_fetch_object($result);

            $_SESSION['studentid'] = $student->studentid;
            $_SESSION['firstname'] = $student->firstname;;
            $_SESSION['lastname'] = $student->lastname;

            header("Location: index.php");
        } else {
            $_SESSION['fmsg'] ="Log in Failed";
        }
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|Student</title>
	<link rel="stylesheet" type="text/css" href="css\abhi.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
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
					
					<li class="current"><a href="student.php">Student</a></li>
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



<div class="form">
	<form id="login" method="POST" action="student.php">
		<?php
		echo isset($_SESSION['smsg']) ? '<p class="success">'.$_SESSION['smsg'].'</p>' : '';
		echo isset($_SESSION['fmsg']) ? '<p class="error">'.$_SESSION['fmsg'].'</p>' : '';

		unset($_SESSION['smsg']);
		unset($_SESSION['fmsg']);

	?>
		<input required type="text" name="uname" class="button" placeholder="username"></br></br>
		<input required type="password" name="passwd" class="button" placeholder="password"></br></br>
		<input type="submit" value="Log In" id="butt"></br></br>
		<a href="#">Forgot Password?</a>
		<p class="message">Not Registered?&nbsp;<a href="regform.php">Register..</a></p>
	</form>
</div>


<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet and Kunal.</p></center>
	</footer>
</body>
</html>