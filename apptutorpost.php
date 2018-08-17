<?php
    include("config.php");
    $id = $id = $_GET['id'];
    $result = mysqli_query($conn,"insert into tutor_post select * from tutor_post_temp WHERE post_id='$id'");
    $confirm = mysqli_query($conn,"delete from tutor_post_temp WHERE post_id='$id'");
    header("Location:adtutorpost.php");
?>