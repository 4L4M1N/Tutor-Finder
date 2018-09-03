
<?php
session_start();
require 'config.php';

$fullname=$_POST['fname'];
$ins=$_POST['ins'];
$email=$_POST['email'];
$contact=$_POST['contactnumber'];
$nid=$_POST['nidnumber'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$val = $_POST["user"];
$_SESSION["phn"] = $contact;
$_SESSION["usr"] = $val;
if($val == "Student")
{
$statement="insert into student_info(fullname,institutionname,g_phone,email,address,dob) values ('$fullname','$ins','$contact','$email','$address','$dob')";
if(mysqli_query($conn,$statement))
{
    echo "Registration sucessful";
    header('location:rusernamepas.php');
    
}
else{
    mysqli_error($conn);
}
    mysqli_close($conn);
}
else if($val == "Gaurdian")
{
    $sql = "insert into guardian_info(fullname,phone,nid,email,address) values ('$fullname','$contact','$nid','$email','$address');";
    
    $sql .= "insert into g_rating(rating_value,rater_id,g_id) values (1,'$contact','$contact')";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
        header('location:rusernamepas.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    /*if(mysqli_query($conn,$sql))
    {
        $statement="insert into g_rating(id,rating_value,rating_cnt) values ('$contact',0,0)";
        mysqli_query($statement2);
        echo "Registration sucessful";
        header('location:rusernamepas.php');
    }
    else{
        mysqli_error($conn);
    }
        mysqli_close($conn);   
 */
    


}
    else if($val == "Tutor")
    {
        $sql="insert into tutor_info(fullname,institutionname,phone,email,nid,address) values ('$fullname','$ins','$contact','$email','$nid','$address');";
        $sql .= "insert into t_rating(rating_value,rater_id,t_id) values (1,'$contact','$contact')";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            header('location:rusernamepas.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
       
       
        /* if(mysqli_query($conn,$statement))
        {
            //echo "Registration sucessful";
            header('location:rusernamepas.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);*/
    }
        else
        {
            echo "somesthing went wrong";
        }
?>