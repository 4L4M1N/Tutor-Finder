<html>
<head>
<style>
div {
    margin-bottom: 15px;
    padding: 4px 12px;
}

.danger {
    background-color: #ffdddd;
    border-left: 6px solid #f44336;
}

.success {
    background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
}

.info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}


.warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
}
</style>
</head>
<body>


<?php
 require 'config.php';
 session_start();
 $un = $_POST['uname'];
 $pw = $_POST['pname'];

 $val = $_POST["user"];
  if($val == "Student")
  {
	$statement = "select id, password from students_users where id ='$un' and password = '$pw'";
	$result = mysqli_query($conn, $statement);
				if (mysqli_num_rows($result) == 1)
			   {
				   $_SESSION['un'] = $un;
				   $_SESSION['name'] = $val;
				
				   header("refresh:3;url=student.php");
				  // echo "<h3>login Sucessful<h3>";
				  	echo "<div class=\"success\">
				   	<p><strong>Success!</strong> Login Sucessfull</p>
					</div><br>";

				 	echo "<div class=\"info\">
					<p><strong>Info!</strong> Please Wait It will redirect</p>
			   		</div>";
			   }
			   else
			   {
				   //echo "Nothing found in db";
				   header("refresh:3;url=login.php");
				   echo "<div class=\"danger\">
				   <p><strong>Sorry!</strong> Password or Username is incorrect</p>
				   </div>";

			   }
			   mysqli_close($conn);
  }
  else if($val == "Gaurdian")
  {
	$statement = "select id, password from guardian_users where id ='$un' and password = '$pw'";
	$result = mysqli_query($conn, $statement);
				if (mysqli_num_rows($result) == 1)
				{
					$_SESSION['un'] = $un;
					$_SESSION['name'] = $val;
					header("refresh:3;url=guardian.php");
					echo "<div class=\"success\">
					<p><strong>Success!</strong> Login Sucessfull</p>
					</div><br>";

				  	echo "<div class=\"info\">
				 	<p><strong>Info!</strong> Please Wait It will redirect</p>
					</div>";
			}

				
				else
				{
					//echo "Nothing found in db";
					header("refresh:3;url=login.php");
					echo "<div class=\"danger\">
					<p><strong>Sorry!</strong> Password or Username is incorrect</p>
					</div>";
				}
				mysqli_close($conn);
  }

  else if($val == "Tutor")
  {
	$statement = "select id, password from tutor_users where id ='$un' and password = '$pw'";
	$result = mysqli_query($conn, $statement);
				if (mysqli_num_rows($result) == 1)
				{
					$_SESSION['un'] = $un;
					$_SESSION['name'] = $val;
					header("refresh:3;url=tutor.php");
					echo "<div class=\"success\">
					<p><strong>Success!</strong> Login Sucessfull</p>
					</div><br>";

				  	echo "<div class=\"info\">
				 	<p><strong>Info!</strong> Please Wait It will redirect</p>
					</div>";
				}
				else
				{
					//echo "Nothing found in db";
					header("refresh:3;url=login.php");
					echo "<div class=\"danger\">
					<p><strong>Sorry!</strong> Password or Username is incorrect</p>
					</div>";
				}
				mysqli_close($conn);
  }

  else if($val == "Admin")
  {
	$statement = "select username, password from admin_info where id ='$un' and password = '$pw'";
	$result = mysqli_query($conn, $statement);
				if (mysqli_num_rows($result) == 1)
				{
					$_SESSION['un'] = $un;
					$_SESSION['name'] = $val;
					header("location:admin.php");
				}
				else
				{
					echo "Nothing found in db";
				}
				mysqli_close($conn);
  }
 ?> 
 </body>
 </html>
