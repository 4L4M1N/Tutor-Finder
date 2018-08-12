<?php
    include("config.php");
    $id = $id = $_GET['id'];
    $result = mysqli_query($conn,"delete from g_post_temp WHERE post_id='$id'");
    header("Location:adguardianpost.php");
?>