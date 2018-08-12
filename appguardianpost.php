<?php
    include("config.php");
    $id = $id = $_GET['id'];
    $result = mysqli_query($conn,"insert into g_post select * from g_post_temp WHERE post_id='$id'");
    $confirm = mysqli_query($conn,"delete from g_post_temp WHERE post_id='$id'");
    header("Location:adguardianpost.php");
?>