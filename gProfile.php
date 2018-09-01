<?php
            session_start();
            require 'config.php';
            if(!(isset($_SESSION['un'])) && !(isset($_SESSION['name']))){
                header("location:login.php");
            }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Show Info and Rating</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="gpro.css" rel="stylesheet">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />
    <style>
    body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 350px;
    position: fixed;
    z-index: 1;
    top: 52px;
    left: 10px;
    
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.done {
   
    margin-left: 500px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
.btn-info {
    margin-left:20px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tutor Finder</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tutor.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<div class="sidenav">
        
        <h3>Rate Options</h3>
        <br>
        <div class="form-group">
        <form action="#" method="post">
        <label for="sel1">Ratings</label>
        <select class="form-control" name="rate">
                        <option value="0">[choose yours]</option>
                        <option value="1">1. One</option>
                        <option value="2">2. Two</option>
                        <option value="3">3. Three</option>
                        <option value="4">4. Four</option>
                        <option value="5">5. Five</option>
                        <option value="6">6. Very Good</option>
                        <option value="7">7. Very Bad</option>
        </select>
        
        </div> 
        
        
       
        <input type="submit" id = "sd" name="submit" class="btn btn-info" value="Rate This Guardian">


        <?php
        //session_start();
        $userid = $_SESSION['un'];

            if(isset($_GET["id"]))
            {
                $data = $_GET["id"];
        
                //echo "<br>$data</br>";
            }
            //echo "<br>$userid</br>";
            $rate = 0;
            if(isset($_POST['submit']))
            {
                
                $rate = $_POST['rate'];
            }
            
            $sql = "SELECT * FROM g_rating where g_id =$data AND rater_id =$userid";
            $boolResult = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
            $rowResult = mysqli_num_rows($boolResult);
            if($rowResult == 0 && $rate == 0) {
                echo '<span style="color:red;">Rate Guardian</span>';
            }
            else if($rowResult == 0)
            /*$rateDB = 0;
            $statement = "SELECT rating_value, rating_cnt FROM g_rating where g_r_id =$data";
            $resultset = mysqli_query($conn, $statement) or die("database error:". mysqli_error($conn));			
            while( $record = mysqli_fetch_assoc($resultset) ) {
                $rateDB = $record['rating_value'];
                $cnt = $record['rating_cnt'];
            }
            $sql = "UPDATE g_rating SET rating_value=$rate, rating_cnt=$cnt where g_r_id =$data";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
             */
            {
                $statement = "INSERT INTO g_rating(rating_value, rater_id, g_id) VALUES ('$rate', '$userid', '$data')";
                if(mysqli_query($conn,$statement)){
                    echo '<span style="color:red;">Submitted Rating</span>';
                   
                }else {
                    echo '<span style="color:red;">Rating error</span>';

                }
               

            }else if($rowResult != 0) {
                echo '<span style="color:red;">You have already Submitted Rating</span>';
                
            }

           // mysqli_close($conn);
         ?>
                <!--<script>
                    function btndisable(){
                        document.getElementById("sd").disabled = true;
                    }
                    </script> 
                    onclick="btndisable()"
                    -->

</form>

        </div>
</div>
<div class="done">

<div class="container">	

	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<?php
             //$sql = "SELECT fullname, phone, nid, email, address FROM guardian_info where phone =$data";
             $sql = "SELECT a.fullname, a.phone, a.nid, a.email, a.address, count(a.phone)as total, sum(b.rating_value)as total_rate FROM guardian_info a, g_rating b where a.phone = b.g_id and a.phone =$data and b.g_id =$data";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_array($resultset) ) {
			?>
            <div class="card hovercard">
                <div class="cardheader">               
					<div class="avatar">
						<img alt="gone" src="gone.png">
					</div>
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $record['fullname']; ?></a>
                    </div>
                    <div class="desc"><b>Phone: </b><?php echo $record['phone']; ?></div>
                    <div class="desc"><b>Email: </b><?php echo $record['email']; ?></div> 
                    <div class="desc"><b>Nid No: </b><?php echo $record['nid']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $record['address']; ?></div> 
                    <div class="desc"><b>Total Users rated: </b><?php echo $record['total']; ?></div> 
                    <div class="desc"><b>Total Rate: </b><?php echo $record['total_rate']; ?></div> 
                    <div class="desc"><b>Rating: </b></div>
                    <div class="rating">
                    <?php
                        $one = $record['total_rate'];
                        $two = $record['total'];
                        $rateResult = (int) ($one / $two);
                        for($i=1; $i<=$rateResult; $i++){
                           echo '<span>&#9734</span>';
                            
                        }
                    ?>
                   
                    
                    </div>
                    <?php 
                    echo "<a href=\"applyPost.php?\" class=\"btn btn-info\" role=\"button\">Call</a>" 
                    ?>
                </div>
            </div>
			<?php } ?>
        </div>
	</div>	

</div>
</div>    


</body>
</html>