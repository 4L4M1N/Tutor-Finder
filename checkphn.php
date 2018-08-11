<?php

    session_start();
   // $user = $_SESSION["usr"];
    require 'config.php';
   // echo "$user";
    $dorr=$_POST['user_phone'];
    //echo "$dorr";
    if(isset($_POST['user_phone']))
{
 $phoneid=$_POST['user_phone'];

 $statement=" SELECT g_phone FROM student_info WHERE g_phone='$phoneid' ";
 $statement2=" SELECT phone FROM guardian_info WHERE phone='$phoneid' ";
 $statement3=" SELECT phone FROM tutor_info WHERE phone='$phoneid' ";

 $query1=mysqli_query($conn,$statement);
 $query2=mysqli_query($conn,$statement2);
 $query3=mysqli_query($conn,$statement3);
 if(mysqli_num_rows($query1)>0 || mysqli_num_rows($query2)>0 || mysqli_num_rows($query3)>0)
 {
  echo "Phoneno Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

/* if(isset($_POST['user_phone']) && $user == "Gaurdian")
    {
    $phoneid=$_POST['user_phone'];

    $statement=" SELECT phone FROM guardian_info WHERE phone='$phoneid' ";

    $query=mysqli_query($conn,$statement);

    if(mysqli_num_rows($query)>0)
    {
    echo "Phoneno Already Exist";
    }
    else
    {
    echo "OK";
    }
    exit();
}

if(isset($_POST['user_phone']) && $user == "Tutor")
{
$phoneid=$_POST['user_phone'];

$statement=" SELECT phone FROM tutor_info WHERE phone='$phoneid' ";

$query=mysqli_query($conn,$statement);

if(mysqli_num_rows($query)>0)
{
echo "Phoneno Already Exist";
}
else
{
echo "OK";
}
exit();
}
*/

?>