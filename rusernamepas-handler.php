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
session_start();
require 'config.php';

$username=$_POST['uname'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$id=$_SESSION['userid'];
$usertoken=$_SESSION["usr"];
$userPhone=$_SESSION["phn"];
if($usertoken == "Tutor")
{
$statement="insert into tutor_users(id,username,password) values ('$userPhone','$username','$pass')";
if(mysqli_query($conn,$statement))
{
    echo "Registration sucessful";
    session_destroy();
    header("refresh:3;url=login.php");
    echo "<div class=\"success\">
    <p><strong>Success!</strong> Registration Sucessfull</p>
    </div><br>";

      echo "<div class=\"info\">
     <p><strong>Info!</strong> Please Wait It will redirect to Login</p>
    </div>";
}
else{
    mysqli_error($conn);
   
    echo "somesthing went wrong";
}
    mysqli_close($conn);
}
else if($usertoken == "Gaurdian")
{
$statement="insert into guardian_users(id,username,password) values ('$userPhone','$username','$pass')";
if(mysqli_query($conn,$statement))
{
    echo "Registration sucessful";
    session_destroy();
    header("refresh:3;url=login.php");
    echo "<div class=\"success\">
    <p><strong>Success!</strong> Registration Sucessfull</p>
    </div><br>";

      echo "<div class=\"info\">
     <p><strong>Info!</strong> Please Wait It will redirect to Login</p>
    </div>";
}
else{
    mysqli_error($conn);
    echo "somesthing went wrong";
}
    mysqli_close($conn);
}
else if($usertoken == "Student")
{
$statement="insert into students_users(id,username,password) values ('$userPhone','$username','$pass')";
if(mysqli_query($conn,$statement))
{
    echo "Registration sucessful";
    session_destroy();
    header("refresh:3;url=login.php");
    // echo "<h3>login Sucessful<h3>";
        echo "<div class=\"success\">
         <p><strong>Success!</strong> Registration  Sucessfull</p>
      </div><br>";

       echo "<div class=\"info\">
      <p><strong>Info!</strong> Please Wait It will redirect to Login</p>
         </div>";
}
else{
    mysqli_error($conn);
    echo "somesthing went wrong";
}
    mysqli_close($conn);
}
/*else if($val == "Gaurdian")
{
    $statement="insert into guardian_info(fullname,phone,nid,email,address) values ('$fullname','$contact','$nid','$email','$address')";
    if(mysqli_query($conn,$statement))
    {
        echo "Registration sucessful";
        //header('location:home.php');
    }
    else{
        mysqli_error($conn);}
        mysqli_close($conn);
    }
    else if($val == "Tutor")
    {
        $statement="insert into tutor_info(fullname,institutionname,phone,email,nid,address) values ('$fullname','$ins','$contact','$email','$nid','$address')";
        if(mysqli_query($conn,$statement))
        {
            echo "Registration sucessful";
            //header('location:home.php');
        }
        else{
            mysqli_error($conn);}
            mysqli_close($conn);
        }
        else
        {
            echo "somesthing went wrong";
        }

*/

?>