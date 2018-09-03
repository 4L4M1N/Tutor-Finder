<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#index.php">Tutor Finder</a>
        </div>
        <ul class="nav navbar-nav">

            <li><a href="adtutorpost.php">Tutor Post</a></li>
            <li class="active"><a href="adstudentpost.php">Student Post</a></li>
            <li><a href="adguardianpost.php">Guardian Post</a></li>
            <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
        </ul>
    </div>
</nav>
</body>
</html>