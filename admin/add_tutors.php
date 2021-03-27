<?php include("../server.php"); ?>
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
			<div class="col-md-7">
				<h3 align="center" style="font-weight: 600;">ADD TUTORIALS</h3>
				<br>
				<form action="add_tutors.php" method="POST">
					<input type="text" name="title" placeholder="Enter Title" class="form-control" required><br>
					<textarea name="tutors" placeholder="Enter Contents" class="form-control" required style="height: 300px"></textarea><br>
					<button name="add" class="btn btn-warning">Add Tutors</button>
				</form>
			</div>
		</div>
		</div>

	</section>
</body>
</html>
