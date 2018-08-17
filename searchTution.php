<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Search Tution</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />
    <style>
    body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 130px;
    position: fixed;
    z-index: 1;
    top: 52px;
    left: 0px;
    background: #eee;
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
   
    margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
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
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="done">
<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?> 

<div class="row">
		
			<?php
			$sql = "SELECT post_id, g_id, subjects, medium, salary, divisions, address, dateTime FROM g_post";
			$rows = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while($row = mysqli_fetch_assoc($rows)){
            ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">    
            <div class="card hovercard">
            
                <div class="cardheader">               
	
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $row['post_id']; ?></a>
                    </div>
					<div class="desc"> <a target="_blank" href="<?php echo "#"; ?>"><?php echo $row['g_id']; ?></a></div>		
                    <div class="desc"><?php echo $row['subjects']; ?></div>      
                    <div class="desc"><?php echo $row['medium']; ?></div> 
                    <div class="desc"><?php echo $row['salary']; ?></div> 
                    <div class="desc"><?php echo $row['divisions']; ?></div> 
                    <div class="desc"><?php echo $row['address']; ?></div> 
                    <div class="desc"><?php echo $row['dateTime']; ?></div> 
                    	
                    							
                </div>
            </div>
			
        </div>
        <?php $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';} ?>
</div>


</div>    


</body>
</html>