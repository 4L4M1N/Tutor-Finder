<?php
    include("config.php");
    $id = $id = $_GET['id'];
    $result = mysqli_query($conn,"insert into st_post select * from st_post_temp WHERE post_id='$id'");
    $confirm = mysqli_query($conn,"delete from st_post_temp WHERE post_id='$id'");
    header("Location:adstudentpost.php");
?>