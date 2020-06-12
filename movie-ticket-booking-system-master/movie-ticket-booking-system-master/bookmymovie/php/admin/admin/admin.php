<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "bookmymovie");
    $sql = "SELECT * FROM booking";
    $bookingsNo=mysqli_num_rows(mysqli_query($link, $sql));
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM movies"));
    ?>
    <div class="admin-section-header">
        <div class="admin-logo">
			<a class="navbar-brand" href="admin.php"><span><img src="logo2-nav.png" height="24px"></span></a>
        </div>
        <div class="admin-login-info">
            <a href="#">Welcome, Admin</a>
            <img class="admin-user-avatar" src="avatar.png" alt="">
        </div>
    </div>
    <div class="admin-container">
        <div class="admin-section admin-section1 " style="background:#FFFFFF">
           
        </div>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-stats">
				<div class="admin-section-stats-panel">
                        
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545"><?php echo $bookingsNo ?></h2>
                        <h3>Bookings</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                        <h2 style="color: #4547cf"><?php echo $moviesNo ?></h2>
                        <h3>Movies</h3>
                    </div>
					<div class="admin-section-stats-panel">
                        
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel1">
                    <div class="admin-panel-section-header">
                        <h2>Bookings</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                    </div>
                    <div class="admin-panel-section-content">
                        <?php
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class=\"admin-panel-section-booking-item\">\n";
                                    echo "                            <div class=\"admin-panel-section-booking-info\">\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h3>". $row['movie'] ."</h3>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
                                    echo "                                    <h4>". $row['theatre'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
                                    echo "                                    <h4>". $row['time'] ."</h4>\n";
                                    echo "                                </div>\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h4>". $row['name'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle\"></i>\n";
                                    echo "                                </div>\n";
                                    echo "                            </div>\n";
                                    echo "                        </div>";
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Bookings right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <form action="" method="POST">
                        <input placeholder="Title" type="text" name="name" required>
                        <input placeholder="Description" type="text" name="desc" required>
                        <input type="file" name="img" accept="image/*">
                        <button type="submit" value="submit" name="submit" class="form-btn">Add Movie</button>
                        <?php
                        if(isset($_POST['submit'])){
                            $insert_query = "INSERT INTO movies(img,Description,MovieName 
							VALUES ('img/".$_POST['img']."','".$_POST["desc"]."','".$_POST["name"]."')";
                            mysqli_query($link,$insert_query);}
                        ?>
                    </form>
                </div>
            </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>