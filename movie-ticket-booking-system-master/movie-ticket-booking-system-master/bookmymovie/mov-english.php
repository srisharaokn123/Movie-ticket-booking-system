<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Hollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Hollywood Movies
	          <small>Now Showing</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          <li class="active">Hollywood Movies</li>
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Dolittle">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Dolittle" alt="Dolittle">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Dolittle</h3>
			<h4>U/A</h4>
	        <h4><i class="fa fa-star"></i> 4.3/5</h4>
	        <p>
					 <?php
	          $MovieName = 'Dolittle';
	          include 'php\displayInfo.php'
	          ?>
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Dolittle">View Timings</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=1917">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=1917" alt="1917">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>1917</h3>
			<h4>U/A</h4>
	        <h4><i class="fa fa-star"></i> 4.6/5</h4>
	        <p>
	        <?php
	          $MovieName = "1917";
	          include 'php\displayInfo.php'
	          ?>
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=1917">View Timings</a>
	      </div>
	    </div>
	    <hr>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
