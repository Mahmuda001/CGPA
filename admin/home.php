<?php
include('config/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
	<div class="container">
	
			<!-- Image and text -->
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand" href="#">
		    <?php
		    echo $email;
		    ?>
		  </a>
		  <a class="navbar-brand" href="admin-logout.php">
		    logout
		  </a>
		</nav>
			<form action="course-process.php" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Course Title</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="c_title" aria-describedby="emailHelp" placeholder="Enter course title">
			   
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Course Code</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="course code" name="c_code">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Course Credit</label>
			    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="course credit" name="c_credit">
			  </div>
			  
			  <input type="submit" name="submit" value="submit" class="btn btn-primary">
			</form>
	
	</div>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html> 