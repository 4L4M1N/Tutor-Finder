<?php
    if(isset($_GET["id"]))
    {
        $data = $_GET["id"];
        echo $data;
    }
    require 'config.php';
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
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
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
        <select class="form-control" name="searchDivi">
                        <option value="all" selected>[choose yours]</option>
                        <option value="1">1. One</option>
                        <option value="2">2. Two</option>
                        <option value="3">3. Three</option>
                        <option value="4">4. Four</option>
                        <option value="5">5. Five</option>
                        <option value="6">6. Very Good</option>
                        <option value="7">7. Very Bad</option>
        </select>
        
        </div> 
        
        
       
        <input type="submit" name="submit" class="btn btn-info" value="Rate This Guardian">
</form>

</div>

<div class="done">

<div class="container">	

	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<?php
			 $sql = "SELECT fullname, phone, nid, email, address FROM guardian_info where phone =$data";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
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
                    <div class="desc"><b>Rating: </b></div>
                    <div class="rating">
                    <span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span>
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