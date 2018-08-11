<?php
    session_start();
    require 'config.php';
    if((isset($_SESSION['un'])) && (isset($_SESSION['name']))){
      $userId = $_SESSION['un'];
      $userType = $_SESSION['name'];
      $salary=$_POST['salary'];
      $add=$_POST['address'];
      $division = $_POST['divisions'];
      $medium = $_POST['mediums'];
      $subject = $_POST['subjects'];
      if($userType == "Tutor") {
        $statement="insert into tutor_post_temp(tutor_id,subjects,medium,salary,divisions,address) values ('$userId','$subject','$medium','$salary','$division','$add')";
        if(mysqli_query($conn,$statement))
        {
            echo "Sucessfully Posted";
            header('location:post.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);
      }
      else if($userType == "Gaurdian") {
        $statement="insert into g_post_temp(g_id,subjects,medium,salary,divisions,address) values ('$userId','$subject','$medium','$salary','$division','$add')";
        if(mysqli_query($conn,$statement))
        {
            echo "Sucessfully Posted";
            header('location:sgpost.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);
      }

      else if($userType == "Student") {
        $statement="insert into st_post_temp(st_id,subjects,medium,salary,divisions,address) values ('$userId','$subject','$medium','$salary','$division','$add')";
        if(mysqli_query($conn,$statement))
        {
            echo "Sucessfully Posted";
            header('location:sgpost.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);
      }

    }
    else {
      header("location:login.php");
    }
?>