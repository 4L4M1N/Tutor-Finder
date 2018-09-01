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
   
    margin-left: 400px; /* Same width as the sidebar + left position in px */
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
        
        <h3>Search Options</h3>
        <br>
        <div class="form-group">
        <label for="sel1">Search By Divisions:</label>
        <select class="form-control" id="searchDivi">
            <option>Dhaka</option>
            <option>Chittagong</option>
            <option>Khulna</option>
            <option>Rangpur</option>
            <option>Barisal</option>
            <option>Sylet</option>
            <option>Rajshahi</option>
        </select>
        
        </div> 
        <input type="submit" class="btn btn-info" value="Search">
        

        <div class="form-group">
        <br>
        <label for="sel1">Search By Medium:</label>
        <select class="form-control" id="searchMedium">
            <option>1</option>
            <option>Bangla</option>
            <option>English</option>
            
        </select>
        
        </div> 
        <input type="submit" class="btn btn-info" value="Search">


</div>

<div class="done">
<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?> 

<div class="row">
		
			<?php
			$sql = "SELECT post_id, tutor_id, subjects, medium, salary, divisions, address, dateTime FROM tutor_post";
			$rows = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while($row = mysqli_fetch_assoc($rows)){
            ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">    
            <div class="card hovercard">
            
                <div class="cardheader">               
	
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><b>Post Id: </b><?php echo $row['post_id']; ?></a>
                    </div>
					<div class="desc"><b>Guardian Id: </b> <a target="_blank" href="<?php echo "gProfile.php?id=$row[g_id]"; ?>"><?php echo $row['g_id']; ?></a></div>		
                    <div class="desc"><b>Subject: </b><?php echo $row['subjects']; ?></div>      
                    <div class="desc"><b>Medium: </b><?php echo $row['medium']; ?></div> 
                    <div class="desc"><b>Salary: </b><?php echo $row['salary']; ?></div> 
                    <div class="desc"><b>Division: </b><?php echo $row['divisions']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $row['address']; ?></div> 
                    <div class="desc"><b>Post Date: </b><?php echo $row['dateTime']; ?></div> 
                    <?php 
                    echo "<a href=\"applyPost.php?id=$row[g_id]\" class=\"btn btn-info\" role=\"button\">Apply</a>" 

                    ?>
                    
                    	
                    							
                </div>
            </div>
			
        </div>
        <?php $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';} ?>
</div>


</div>    


</body>
</html>