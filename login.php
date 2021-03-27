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
					<h2 align="center"><b>LOGIN HERE</b></h2>
					<form action="login.php" method="POST"><br><br>
						<input type="email" name="email" placeholder="Enter Your Email"><br><br>						
						<input type="password" name="pword" placeholder="Enter Password"><br><br>
						<button name="login">Login</button>
						<br><br>
						<p>Do not have an Account? <a href="register.php">Click here</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
