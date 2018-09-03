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
	</head>
<body>
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