<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fishing Tutorial Website</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
	<section id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					
				</div>
				<div class="col-md-5">
					<h2 align="center"><b>REGISTER HERE</b></h2>
					<form action="register.php" method="POST"><br><br>
						<input type="text" name="fname" placeholder="Enter Your Firstname"><br><br>
						<input type="text" name="sname" placeholder="Enter Your Secondname"><br><br>
						<input type="email" name="email" placeholder="Enter Your Email"><br><br>						
						<input type="date" name="dob"><br><br>
						<input type="password" name="pword" placeholder="Enter Password"><br><br>
						<p>Do You Have an Experience on Fishing?</p>
						<input type="radio" name="f_idea" value="YES">Yes&nbsp;&nbsp;
						<input type="radio" name="f_idea" value="NO">No
						<br><br>
						<button name="register">Register</button>
						<br><br>
						<p>Already have an Account? <a href="login.php">Click here</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
