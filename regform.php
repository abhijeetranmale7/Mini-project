<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>AbhiWeb|Student</title>
	<link rel="stylesheet" type="text/css" href="css\abhi.css">
	<script src="javascript/script.js"></script>
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
	<form id="registration" method="POST" action="register.php">
		<?php
		echo isset($_SESSION['smsg']) ? '<p class="success">'.$_SESSION['smsg'].'</p>' : '';
		echo isset($_SESSION['fmsg']) ? '<p class="error">'.$_SESSION['fmsg'].'</p>' : '';

		unset($_SESSION['smsg']);
		unset($_SESSION['fmsg']);

	?>
		<input required type="text" id="fname" name="fname" class="button" placeholder="first name"><div></div></br></br>
		<input required type="text" id="lname" name="lname" class="button" placeholder="last name"><div></div></br></br>
		<input required type="text" id="uname" name="uname" class="button" placeholder="choose username"><div></div></br></br>
		<input required type="email" id="email" name="email" class="button" placeholder="email"><div></div></br></br>
		<input required type="password" id="passwd" name="passwd" class="button" placeholder="choose password"><div></div></br></br>
		<input required type="password" id="cnf_passwd" name="cnf_passwd" class="button" placeholder="re-enter password"><div></div></br></br>
		<select><option>+91</option></select>
		<input required type="number" name="num" id="phno" placeholder="mobile number"><div></div></br></br>
		<input checked type="radio" name="gender" id="rd" value="male">&nbsp;&nbsp;<span id="but">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;<input required type="radio" name="gender" id="rd" value="female">&nbsp;&nbsp;<span id="but">Female</span>&nbsp;&nbsp;&nbsp;&nbsp;<input required type="radio" name="gender" id="rd" value="other">&nbsp;&nbsp;<span id="but">Other</span></br></br>
		<input type="submit" value="Register" id="butt"></br></br>
		<p>Already Registered?&nbsp;<a href="student.html">Log in..</a></p>
	</form>
</div>







<footer>
		<center><p>Copyright © 2017 Gokhale Education Society's, R. H. Sapat College of Engineering, Management Studies and Research, Nashik -05.</br>
All Rights Reserved by Abhijeet Ranmale.</p></center>
	</footer>

<script>
	
	$().ready(function() {
 $("#registration").validate({
 	errorPlacement: function(error, element) {
			error.appendTo(element.next("div"));
		},
  rules: {
   fname: "required",
   lname: "required",
   email: {
    required: true,
    email: true
   },
   uname: {
    required: true,
    minlength: 3,
	maxlength: 15,
    
   },
   passwd: {
    required: true,
    minlength: 5,
	maxlength: 15,
   },
   cnf_passwd: {
  	required: true,
    minlength: 5,
	maxlength: 15,
	equalTo: '#passwd',
	}
  },
  messages: {
   full_name: "Please enter full name",
   phone: "Please enter phone",
   address: "Please enter address",
   assigned_as: "Please select role",
   company_name: "Please select company",
   project_name: "Please select project",
   uname: {
    required: "Please enter a username",
    minlength: "Your username must consist of at least 3 characters",
    remote : "Username already exists"
   },
   passwd: {
    required: "Please provide a password",
    minlength: "Your password must be at least 5 characters long"
   },
   edit_password: {
    required: "Please provide a password",
    minlength: "Your password must be at least 5 characters long"
   },
   cnf_passwd: {
    required: "Please provide a password",
    minlength: "Your password must be at least 5 characters long",
    equalTo: "Please enter the same password as above"
   },
   email: {
    required: "Please provide a email",
    email : "Please enter a valid email address",
    remote: "Email already exists",
   },
  }
 });
});

</script>

</body>
</html>