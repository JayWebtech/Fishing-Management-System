<?php
	include_once('../db_connection.php');  
	$id=$_GET['id'];

 $sql = "DELETE FROM  tutors WHERE id='$id'";
 $result=mysqli_query($dbcon,$sql);

if($result){
   echo "<script>alert('Removed from Database!')</script>";
   echo"<script>window.open('view_tutors.php','_self')</script>";
 }
 else{
 	echo "<script>alert('Removal unsuccessful!')</script>";
  echo"<script>window.open('view_tutors.php','_self')</script>";
 }
?>