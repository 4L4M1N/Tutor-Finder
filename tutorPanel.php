<?php
    require 'config.php';
    session_start();
    if(!(isset($_SESSION['un'])) && !(isset($_SESSION['name']))){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tutor Panel</title>
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
   
    margin-left: 380px; /* Same width as the sidebar + left position in px */
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
      <li><a href="tutor.php">Tutor</a></li>
      <li><a href="searchTution.php">search Tution</a></li>
      <li><a href="post.php">Create Post</a></li>
      <li class="active"><a href="tutorPanel.php">Tutor Panel</a></li>
      <li><a href="infoupdate.php">Account Settings</a></li>
      <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
    </ul>
  </div>
</nav> 

<div class="sidenav">
        
        <h3>Post Options</h3>
        <br>
        <div class="form-group">
        <form action="#" method="post">
        <label for="sel1">Post ID selection</label>
        <select class="form-control" name="postID">
                        <option>[choose yours]</option>
                        <?php
                        $un = $_SESSION['un'];
                        //$un = "01698456325";
                        $sql = "SELECT post_id FROM tutor_post WHERE tutor_id = $un";
                        $rows = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			            while($row = mysqli_fetch_assoc($rows)){
                        ?>
                        <option value="<?php echo $row['post_id']?>">Post ID:<?php echo $row['post_id']?></option>
                        <?php } ?>

        </select>
        
        </div> 

        <input type="submit" name="submit" class="btn btn-info" value="Search">
</form>

    <div>
    <?php
    $postID = 0;
    if(isset($_POST['submit'])){
            $postID = $_POST['postID'];
        }
            
            $sql = "SELECT post_id, tutor_id, subjects, medium, salary, divisions, address, dateTime FROM tutor_post WHERE tutor_id = $un and post_id = $postID";
            $rows = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
		    while($row = mysqli_fetch_assoc($rows)){ 
    ?>
            <div class="title">
                <a href="#"><b>Post Id: </b><?php echo $row['post_id']; ?></a>
            </div>
					<div class="desc"><b>Your Id: </b> <a target="_blank"><?php echo $row['tutor_id']; ?></a></div>		
                    <div class="desc"><b>Subject: </b><?php echo $row['subjects']; ?></div>      
                    <div class="desc"><b>Medium: </b><?php echo $row['medium']; ?></div> 
                    <div class="desc"><b>Salary: </b><?php echo $row['salary']; ?></div> 
                    <div class="desc"><b>Division: </b><?php echo $row['divisions']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $row['address']; ?></div> 
                    <div class="desc"><b>Post Date: </b><?php echo $row['dateTime']; ?></div>
            <?php } ?>

    </div>

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
            $idpost = 0;
            if(isset($_POST['submit']))
            {
                $idpost = $_POST['postID'];
            }
            
            $sql = "SELECT a.id, a.fullname, a.phone, a.email, a.nid, a.address, b.post_id FROM guardian_info a, request_tutor b where a.phone = b.g_id and b.post_id =$idpost and b.t_id =$un";
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
					<div class="desc"><b>Guardian Id: </b> <a target="_blank" href="<?php echo "gProfile.php?id=$row[phone]"; ?>"><?php echo $row['id']; ?></a></div>		
                    <div class="desc"><b>Name: </b><?php echo $row['fullname']; ?></div>      
                   
                    <div class="desc"><b>Phone: </b><?php echo $row['phone']; ?></div> 
                    <div class="desc"><b>Email: </b><?php echo $row['email']; ?></div> 
                    <div class="desc"><b>Nid: </b><?php echo $row['nid']; ?></div> 
                    <div class="desc"><b>Address: </b><?php echo $row['address']; ?></div> 
                    <?php 
                    //echo "<a href=\"applyGuarPost.php?id=$un&post=$row[post_id]&tutor=$row[id]\" class=\"btn btn-info\" role=\"button\">Add</a>" 
                    
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