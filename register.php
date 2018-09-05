<?php
	require('connect.php');
    if(isset($_SESSION[studentid])) {
        header("Location: index.php");
    }

    //echo "======>>>>>>>>>>>> <pre>"; print_r($_POST); exit;
    // If the values are posted, insert them into the database.
    if (isset($_POST['uname']) && isset($_POST['passwd'])){
        $fname = $_POST['fname'];
	    $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $passwd = md5($_POST['passwd']);
        $num = $_POST['num'];
        $gender = $_POST['gender'];
 
        $query = "INSERT INTO `students` (firstname, lastname, username, email, password, mobile, gender) VALUES ('$fname', '$lname', '$uname', '$email', '$passwd', '$num', '$gender')";
        $result = mysqli_query($connection, $query);
        if($result){
            $_SESSION['smsg'] ="User Created Successfully.";
            header("Location: student.php");
        } else {
            $_SESSION['fmsg'] ="User Registration Failed";
            header("Location: register.php");
        }
    }
    ?>