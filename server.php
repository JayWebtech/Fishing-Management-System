<?php
session_start(); 
$error1 = "";
$error2 = "";

include ("db_connection.php");

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$email = $_POST['email'];
	$dob   = $_POST['dob'];
	$pword = $_POST['pword'];
	$f_idea = $_POST['f_idea'];

	if ($fname=='') {
		echo "<script>alert('Firstname cannot be Empty!')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}
	if ($sname=='') {
		echo "<script>alert('Surname cannot be Empty!')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}
	if ($email=='') {
		echo "<script>alert('Email cannot be Empty!')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}
	if ($pword=='') {
		echo "<script>alert('Password cannot be Empty!')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}

	$query = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($dbcon,$query);
	if (mysqli_num_rows($result) > 0) {
		echo "<script>alert('Email Already Exists!, Try another one')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}

	$insert = "INSERT INTO users (firstname,surname,email,dob,f_idea,password) VALUES ('$fname','$sname','$email','$dob','$f_idea','$pword')";
	if (mysqli_query($dbcon,$insert)) {
		echo "<script>alert('Registration Successful!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	else{
		echo "<script>alert('Registration Unsuccessful!')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}
}
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pword = $_POST['pword'];

	if ($email=='') {
		echo "<script>alert('Email cannot be Empty!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	if ($pword=='') {
		echo "<script>alert('Password cannot be Empty!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}

	 $admin_query = "SELECT * FROM users WHERE email = '$email' AND password = '$pword'";
	 $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query) > 0)  
    	{  
        echo "<script>window.open('dashboard.php?email=$email','_self')</script>"; 
    	}  
    else {
    	echo"<script>alert('Incorrect Login Details!')</script>";

    } 
    } 
if (isset($_POST['alogin'])) {
	$email = $_POST['email'];
	$pword = $_POST['pword'];

	if ($email=='') {
		echo "<script>alert('Email cannot be Empty!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	if ($pword=='') {
		echo "<script>alert('Password cannot be Empty!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}

	 $admin_query = "SELECT * FROM admin WHERE username = '$email' AND password = '$pword'";
	 $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query) > 0)  
    	{  
        echo "<script>window.open('admin_dashboard.php?email=$email','_self')</script>"; 
    	}  
    else {
    	echo"<script>alert('Incorrect Login Details!')</script>";

    } 
    } 
    if (isset($_POST['add'])) {
    	$title = $_POST['title'];
    	$tutors = $_POST['tutors'];

    	$sql = "INSERT INTO tutors(title, tutors) VALUES ('$title','$tutors')";
    	if (mysqli_query($dbcon,$sql)) {
    		echo"<script>alert('Tutors Added Successfully!')</script>";
    	}
    	else{
    		echo"<script>alert('Tutors not Added Successfully!')</script>";
    	}
    }

?>