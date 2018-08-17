<?php
    include("config.php");
    $id = $id = $_GET['id'];
    $result = mysqli_query($conn,"delete from tutor_post_temp WHERE post_id='$id'");
    header("Location:adtutorpost.php");
?>