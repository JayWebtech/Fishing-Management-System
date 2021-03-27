<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="nav">
		<h2>ADMIN DASHBOARD <i class="glyphicon glyphicon-upload" style="font-size: 25px;"></i></h2>
	</div>
	<section id="right_bar">
		<div class="row">
			<div class="col-md-4">
				<p><a href="admin_dashboard.php">View Users</a></p>
				<p><a href="add_tutors.php">Add Tutorials</a></p>
				<p><a href="view_tutors.php">View Tutorials</a></p>
			</div>
			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
					<tr>
						<td><b>ID</b></td>
						<td><b>Name</b></td>
						<td><b>Email</b></td>
						<td><b>Date of Birth</b></td>
						<td><b>Fishing Experience</b></td>
					</tr>
				</thead>
				<?php

				include("../db_connection.php");
				$sql = "SELECT * FROM users";
				$query = mysqli_query($dbcon,$sql);
				while ($run = mysqli_fetch_assoc($query)) {
					echo "<tbody>
						<tr>
						<td width='1%'>".$run['id']."</td>
						<td width='10%'>".$run['firstname']." ".$run['surname']."</td>
						<td width='10%'>".$run['email']."</td>
						<td width='10%'>".$run['dob']."</td>
						<td width='1%'>".$run['f_idea']."</td>
						</tr>";
				 ?>
				<?php } ?>
	</table>
			</div>
		</div>
		</div>

	</section>
</body>
</html>
