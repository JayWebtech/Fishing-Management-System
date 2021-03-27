<?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
		.top ul{
			padding: 0;
			margin: 0;
			background-color: steelblue !important;
			overflow: none;
			list-style: none;
		}
		.top li{
			float: left;
		}
		.top li a{
			text-decoration: none;
			padding: 20px;
			display: inline-block;
			color: 
		}
	</style>
</head>
<body>
	<div class="nav">
		<h2>ADMIN DASHBOARD <i class="glyphicon glyphicon-upload" style="font-size: 25px;"></i></h2>
	</div>
	<div class="top">
		<ul>
			<li><a href="admin_dashboard.php">View Users</a></li>
			<li><a href="add_tutors.php">Add Tutorials</a></li>
			<li><a href="view_tutors.php">View Tutorials</a></li>
		</ul>
	</div>
	<section id="right_bar">
				<?php

				include("../db_connection.php");
				$sql = "SELECT * FROM tutors WHERE id = '$id'";
				$query = mysqli_query($dbcon,$sql);
				$retrieve = mysqli_fetch_array($query);
				
				$title = $retrieve['title'];
				$contents= $retrieve['tutors'];
				?>
				<h3 align="center" style="font-weight: 600; margin-top: 100px;">EDIT TUTORIALS</h3>
				<br>
				<form action="edit.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="text" name="title" placeholder="Enter Title" class="form-control" required style="width:50%; margin-left: 25%;" value="<?php echo $title; ?>"><br>
					<textarea name="tutors" placeholder="Enter Contents" class="form-control" required style="height: 300px; width: 50%;margin-left: 25%;"> <?php echo $contents; ?></textarea><br>
					<button name="edit" class="btn btn-success btn-sm" data-toggle="modal" style="margin-left: 25%;"><span class='glyphicon glyphicon-edit'></span> Update</button>
				</form>
	</table>
			</div>
		</div>
		</div>

	</section>
</body>
</html>
<?php 

include("../db_connection.php");
if (isset($_POST['edit'])) {
	$title = $_POST['title'];
	$tutors = $_POST['tutors'];
	$id = $_POST['id'];

    	$query = "UPDATE tutors SET title = '$title', tutors = '$tutors' WHERE id = '$id'";
    	if (mysqli_query($dbcon,$query)) {
    		echo"<script>alert('Update Made Successfully!')</script>";
    		echo"<script>window.open('view_tutors.php','_self')</script>";
    	}
    	else{
    		echo"<script>alert('Update Not Successful!')</script>";
    		echo"<script>window.open('view_tutors.php','_self')</script>";
}
}
?>