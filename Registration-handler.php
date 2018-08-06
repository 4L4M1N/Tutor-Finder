<?php

require 'config.php';

$fullname=$_POST['fname'];
$ins=$_POST['ins'];
$email=$_POST['email'];
$contact=$_POST['contactnumber'];
$nid=$_POST['nidnumber'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$val = $_POST["user"];
if($val == "Student")
{
$statement="insert into student_info(fullname,institutionname,g_phone,email,address,dob) values ('$fullname','$ins','$contact','$email','$address','$dob')";
if(mysqli_query($conn,$statement))
{
    echo "Registration sucessful";
	//header('location:home.php');
}
else{
    mysqli_error($conn);}
    mysqli_close($conn);
}
else if($val == "Gaurdian")
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



?>