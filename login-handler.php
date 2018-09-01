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
				   header("location:student.php");
			   }
			   else
			   {
				   echo "Nothing found in db";
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
					header("location:guardian.php");
				}
				else
				{
					echo "Nothing found in db";
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
					header("location:tutor.php");
				}
				else
				{
					echo "Nothing found in db";
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
					header("location:listdata.php");
				}
				else
				{
					echo "Nothing found in db";
				}
				mysqli_close($conn);
  }
 ?> 
