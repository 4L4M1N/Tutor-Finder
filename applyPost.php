<?php
    require 'config.php';
    if(isset($_GET["userId"]) && isset($_GET["post_id"]) && isset($_GET["data"]))
    {
        $userId = $_GET["userId"];
        $data = $_GET["data"];
        $post_id = $_GET["post_id"];
       /* echo $data;
        echo "<br>";
        echo $post_id;
        echo $userId;
        */

    }

    $statement="insert into apply_g_post(post_id,g_id,tutor_id) values ('$post_id','$data','$userId')";
    if(mysqli_query($conn,$statement))
    {
        echo "You Have Applied sucessfully";
        header("refresh:3;url=searchTution.php");
        
    }
    else{
        mysqli_error($conn);
    }
?>