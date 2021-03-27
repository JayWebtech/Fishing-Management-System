
<?php
 include ("db_connection.php"); 
$email = $_GET['email'];
 $result=mysqli_query($dbcon,"SELECT firstname,surname FROM users WHERE email='$email'");
        $retrive=mysqli_fetch_array($result);

        $firstname=$retrive['firstname'];
        $surname=$retrive['surname'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fishing Tutorial Website</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="jquery/1.12.2/jquery.min.js"></script>
</head>
<body>

	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Fishing Tutorials</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#contact">WELCOME <?php echo "<b>".$firstname."</b>" ;echo "&nbsp;"; echo "<b>".$surname."</b>" ?></a></li>
        <li><a href="index.php" class="page-scroll">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<section id="body">
	<div class="container">
		<div class="row">
			
			<div class="col-md-9">
				<?php
				include("db_connection.php");
				$total = "SELECT * FROM tutors";
					$count = mysqli_query($dbcon,$total);
					$nr = mysqli_num_rows($count);
					$items_per_page = 1;
					$totalpages = ceil($nr/$items_per_page);
					if (isset($_GET['page']) && !empty($_GET['page'])){
    				$page =$_GET['page'];
					}
					else
					    $page = 1;
					    $offset = ($page - 1) * $items_per_page;
					    $sql = "SELECT * FROM tutors LIMIT $items_per_page OFFSET $offset";
					    $result = mysqli_query($dbcon,$sql);
					    $row_count = mysqli_num_rows($result);
					    while ($row = mysqli_fetch_assoc($result)) 

					    	echo "<p>".$row['tutors']."</p>";
		echo "<div class='pagination'>";
					for ($i=1; $i <= $totalpages ; $i++) { 
            		if($i == $page)
           			echo '<a class="active">'.$i.'</a>';
           			else
           			 echo '<a href="dashboard.php?page='.$i.'">'.$i.'</a>';
       				 }
       				 echo "</div>";
       				  ?>
			</div>
			<div class="col-md-3">
				<p style="color: yellow; font-weight: 1000"><i class="glyphicon glyphicon-ok"></i> FISHING TUTORIALS OUTLINE</p>
				<?php
				include("db_connection.php");
				$sql = "SELECT title FROM tutors";
				$query = mysqli_query($dbcon,$sql);
				while ($rows=mysqli_fetch_array($query)) {
			
				 ?>
				<p style="font-size: 10px !important;"><?php echo $rows['title']; ?></p>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

