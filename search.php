<!DOCTYPE html>
<html>
<head>
	<title>Road Eye</title>
	<link rel="icon" href="./img/logo.jpg">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


		
</head>
<body>
	<link rel="stylesheet" type="text/css" href="traveller.css">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" alt="Logo" style="width:40px;">
  </a>
   <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Road Eye</a>
    </div>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="traveller.php">Traveller</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Violator</a>
    </li>
  </ul>
   <form class="navbar-form navbar-left" style="padding-left: 10px;" method="POST" action="search.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="place">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i  class="fa fa-search"></i>
      </button>
    </div>
  </div>
</form> 
  
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" align="center"><br><br><br><br>
			<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "road";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					else
					{
						$checkval = $_POST['place'];
						$query = "SELECT * FROM `traveller` WHERE 1";
						$count = 1;
						$result = mysqli_query($conn,$query);
						
						while($row = mysqli_fetch_row($result))
						{
						if($row[1]==$checkval)
						{
								if ($row[7] == 'Kanchipuram') {
									
									echo "<img src='img/kanchipuram.png' width='80%'>";

								}
								if ($row[7] == 'Chennai') {
									echo "<img src='img/chennai.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Tiruvallur') {
									echo "<img src='img/thiruvallur.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Tiruvannamalai') {
									echo "<img src='img/thiruvannamalai.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Vilupuram') {
									echo "<img src='img/vilupuram.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Cuddalore') {
									echo "<img src='img/cuddalore.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Dharmapuri') {
									echo "<img src='img/dharmapuri.jpg' width='80%'>";
									echo "<br>";
								}
								if ($row[7] == 'Vellore') {
									echo "<img src='img/vellore.jpg' width='80%'>";
									echo "<br>";
								}
						}
			}
		}
			?>
				
			
		</div>
		<div class="col-sm-6"><br><br><br><br>
			<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "road";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					else
					{
						$checkval = $_POST['place'];
						$query = "SELECT * FROM `traveller` WHERE 1";
						$count = 1;
						$result = mysqli_query($conn,$query);
						
						while($row = mysqli_fetch_row($result))
						{
						if($row[1]==$checkval)
						{
							echo "<table><tr><th>Camera IP address</th><td>$row[0]</td></tr><tr><th>Vehicle num</th><td>$row[1]</td></tr><tr><th>Vehicle Type</th><td>$row[2]</td></tr><tr><th>Time</th><td>$row[3]</td></tr><tr><th>Current State</th><td>$row[6]</td></tr><tr><th>Current District</th><td>$row[7]</td></tr><tr><th>Current Location</th><td>$row[8]</td></tr></table>";
							echo "<br><br>";
						}
						}
					?>

			
		</div>
		<div class="col-sm-3"><br><br><br><br><br>
			<div class="events">
						<a href="map13.html"  style="text-decoration: none; color: #4d5461;">

						
						<p><img style="width:100%" src="img/india.jpg" ></p></a>
					</div>
		</div>
	</div>
</div>



	
	

<?php

}
?>

<div class="row">
	<div class="col-sm-4">
		
	</div>

	<div class="col-sm-4">
		<div class="events">
						<a href="https://console.agora.io/invite?sign=YXBwSWQlM0Q1MTAxY2M1OGNiZTY0OTQ5YjhlOGUwZDUxZmU3YjQ4OSUyNm5hbWUlM0RSYW1lc2glMjZ0aW1lc3RhbXAlM0QxNTcxNjU1NzU4JTI2Y2hhbm5lbCUzRGRlbW8lMjZ0b2tlbiUzRDAwNjUxMDFjYzU4Y2JlNjQ5NDliOGU4ZTBkNTFmZTdiNDg5SUFBd0JDRWJucldrTTRsaSUyQjVhaE4xdzJESkdOUzZ2TURkakdqTk9jRG9jOTVLRGZRdFlBQUFBQUVBQUtMZHQ0enVHdVhRRUFBUURPNGE1ZA%3D%3D"  style="text-decoration: none; color: #4d5461;">

						
						<p><img style="width:100%" src="img/call.jpg" ></p></a>
					</div>
		
	</div>

	<div class="col-sm-4">
		
	</div>
	
</div>
</body></html>