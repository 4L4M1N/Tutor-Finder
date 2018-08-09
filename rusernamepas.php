
<?php
require 'config.php';
session_start();
$val = $_SESSION["phn"];
$user = $_SESSION["usr"];
if($user == "Tutor"){
		$statement = "select * from tutor_info where phone = '$val'";
		$result = mysqli_query($conn, $statement);
		if(mysqli_num_rows($result) > 0){
			$value = mysqli_fetch_object($result);
			$_SESSION['userid'] = $value->id;
		}else {
			echo "You are not allowed";
			header('location:Registration.php');
			mysqli_close($conn);
		}
}
else if($user == "Student"){
			$statement = "select * from student_info where g_phone = '$val'";
			$result = mysqli_query($conn, $statement);
			if(mysqli_num_rows($result) > 0){
				$value = mysqli_fetch_object($result);
				$_SESSION['userid'] = $value->id;
			}else {
				echo "You are not allowed";
				header('location:Registration.php');
				mysqli_close($conn);
			}
} 
	else if($user == "Gaurdian"){
		$statement = "select * from guardian_info where phone = '$val'";
		$result = mysqli_query($conn, $statement);
		if(mysqli_num_rows($result) > 0){
			$value = mysqli_fetch_object($result);
			$_SESSION['userid'] = $value->id;
		}else {
			echo "You are not allowed";
			header('location:Registration.php');
			mysqli_close($conn);
		}
}


?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/rusernamepass.js"></script>
</head>
<body>
 <title>Tution finder Registration Page</title>
  <div class="header">
  	<h2>Welcome to Tution Finder </h2>
  </div>
	
  <form  name="userpass" method="post" action="rusernamepas-handler.php" onsubmit="return(validate());">

		<div class="input-group">
  	  <label>Username</label>
		<input type="text" name="uname">
		<p id="uerror" style="color:red;"></p>
    </div>
      
  	<div class="input-group">
  	  <label>Password</label>
		<input type="password" name="pass">
		<p id="perror" style="color:red;"></p>
    </div> 
    
    <div class="input-group">
  	  <label>Re-enter password</label>
		<input type="password" name="repass">
		<p id="reperror" style="color:red;"></p>
    </div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
      
  </form>
</body>
</html>