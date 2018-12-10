<?php
  include("process/config/connect.php");
  include("process/config/session.php");
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student CGPA Calculate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="asset/ownstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
		<div class="container-flude">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="home.php">CGPA</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="calculate-cgpa.php">Calculate</a>
			      </li>
			    </ul>
			    <li class="nav-link">
			    	<em>Login User ID :<?php echo $student_id; ?> </em>
			    </li>
			     <a href="student-logout.php">Logout</a>
			  </div>
			</nav>
			<div class="container">
				<div class="col-md-12">

					<h2 class="allh2">Calculate CGPA:</h2><hr>

					<form action="" method="get">
					  <div class="form-group">
					  	
					   
					    
					    
					    <?php 

	                        $courseQuery = "select * from course order by 1 DESC";

	                        $runQuery = mysqli_query($con,$courseQuery);
	                          	while($row=mysqli_fetch_array($runQuery)){
	                                $title = $row['c_name'];
	                                $credit = $row['c_credit'];

                        ?>
					       <label>Course Name:</label>
					      <input type="text" name="c_name" value="<?php echo $title; ?>" name="title" readonly>
					      <label>Course Credit:</label>
					      <input type="text" value="<?php echo $credit; ?>" name="credit[]" readonly>
					      <label>SGPA:</label>
						    <input type="text" id="sgpa" placeholder="Please Input Your SGPA" name="cgpa[]"> <br>
					  <?php } ?>
					  <div class="form-group">
					  	<input type="submit" name="submit" class="btn btn-primary" value="Calculate">
					  </div>
					  </div>
					</form>
					<?php 
						$er = "select * from course";
						$result = mysqli_query($con,$er);
						$id = mysqli_num_rows($result);

						$cgpa = $_GET['cgpa'];
						
						foreach ($cgpa as $cgpas) {
							$c += $cgpas;
						}
						

						$credit = $_GET['credit'];
						foreach ($credit as $credits) {
							$cr += $credits;
						}

						$read = ($c*$cr)/$cr;

						$all = $read/$id;

					?>
					<h3>Total CGPA is :<?php echo$all; ?> </h3>
					<!--modal use work-->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Your Current CGPA</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <p>SGPA</p>
					        <p>SGPA</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Print</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!---modal end-->

				</div>

			</div>


			<div class="footer" style="background: gray;">
			  <p>Student CGPA Calculate</p>
			</div>


		</div>



	<!--javascript,propper,jquery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>