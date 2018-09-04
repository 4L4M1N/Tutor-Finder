<?php
    require 'config.php';
    session_start();
    if(!(isset($_SESSION['un'])) && !(isset($_SESSION['name']))){
        header("location:login.php");
	}
	$user = $_SESSION['un'];
	$type = $_SESSION['name'];
?>

<!DOCTYPE html>
<html>
	<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="js/edit.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Search Tution</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />
    <style>
    body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 350px;
    position: fixed;
    z-index: 1;
    top: 52px;
    left: 10px;
    
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.done {
   
    margin-left: 380px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
.btn-info {
    margin-left:20px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>

<body>
<div>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tutor Finder</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="guardian.php">Guardian</a></li>
      <li><a href="searchTutor.php">Search Tutor</a></li>
      <li><a href="sgpost.php" target="_blank">Create Post</a></li>
      <li><a href="guardianPanel.php">Guardian Panel</a></li>

      <li class="active"><a href="infoGuar.php">Account Settings</a></li>
      <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
    </ul>
  </div>
</nav>


</div>



<br>


 <title>Profile Information</title>
  <div class="header">
  	<h2>Tutor Finder Profile Information</h2>
  </div>
	
  
		<?php 
			if($type == "Student"){
				$sql = "SELECT fullname, email, address from student_info where g_phone = $user";
				//$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			}else if($type == "Gaurdian"){
				$sql = "SELECT fullname, email, address from guardian_info where phone = $user";
			}else if($type == "Tutor"){
				$sql = "SELECT fullname, email, address from tutor_info where phone = $user";
			}
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			while( $record = mysqli_fetch_array($resultset) ) {
		?>
<form  name="index" method="post" action="infoupdatehandler.php" onsubmit="return(validate());">	
	<div class="input-group">
	 <lable>If you need any changes feel free to change  (Please Click Update)</lable>
</div>

	<div class="input-group">
  	  <label>Fullname</label>
			<input type="text" name="fname" value="<?php echo $record['fullname']; ?>">
			<p id="ferror" style="color:red;"></p>
  	</div>
  
      <div class="input-group">
  	  <label>Email</label>
			<input type="Email" name="email" value="<?php echo $record['email']; ?>">
			<p id="eerror" style="color:red;"></p>

  	</div>

      <div class="input-group">
  	  <label>Address</label>
			<input type="text" name="address" value="<?php echo $record['address']; ?>">
			<p id="aerror" style="color:red;"></p>
  	</div>
			
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Update</button>
  	</div>


	 
  </form>
  <?php } ?>
  

</body>
</html>