<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Kollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Kollywood Movies
	          <small>Now Showing</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          <li class="active">Kollywood Movies</li>
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Oh My Kadavule!">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Oh My Kadavule!" alt="Oh My Kadavule!">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Oh My Kadavule!</h3>
			<h4>U/A</h4>
	        <h4><i class="fa fa-star"></i> 4.2/5</h4>
	        <p>
					 <?php
	          $MovieName = 'Oh My Kadavule!';
	          include 'php\displayInfo.php'
	          ?>
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Oh My Kadavule!">View Timings</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Naan Sirithal">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Naan Sirithal" alt="Naan Sirithal">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Naan Sirithal</h3>
			<h4>U/A</h4>
	        <h4><i class="fa fa-star"></i> 4.3/5</h4>
	        <p>
	        <?php
	          $MovieName = "Naan Sirithal";
	          include 'php\displayInfo.php'
	          ?>
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Naan Sirithal">View Timings</a>
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
