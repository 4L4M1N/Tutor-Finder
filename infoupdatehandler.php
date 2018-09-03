<?php
session_start();
require 'config.php';
$userId = $_SESSION['un'];
$userType = $_SESSION['name'];
$address=$_POST['address'];
$fullname=$_POST['fname'];
$email=$_POST['email'];
echo $address;
echo $fullname;
echo $email;
if($userType == "Student")
{
    $statement="update student_info set fullname = '$fullname', email = '$email', address = '$address' where g_phone = $userId";
    //$result = mysqli_query($conn, $statement1);
    if(mysqli_query($conn,$statement))
    {
        echo "Update sucessful";
        header('location:logout.php');
    }
    else{
        mysqli_error($conn);
    }
        mysqli_close($conn);
}
else if($userType == "Gaurdian")
{
    $statement2="update guardian_info set fullname = '$fullname', email = '$email', address = '$address' where phone = $userId";
    //$result = mysqli_query($conn, $statement1);
    if(mysqli_query($conn,$statement2))
    {
        echo "Update sucessful";
        header('location:logout.php');
    }
    else{
        mysqli_error($conn);
    }
        mysqli_close($conn);

}
    else if($userType == "Tutor")
    {
        $statement3="update tutor_info set fullname = '$fullname', email = '$email', address = '$address' where phone = $userId";
        //$result = mysqli_query($conn, $statement1);
        if(mysqli_query($conn,$statement3))
        {
            echo "Update sucessful";
            header('location:logout.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);

    }
        else
        {
            echo "somesthing went wrong";
        }
    
?>