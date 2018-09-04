<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Approve Tutor Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
   
    <link href="css/style2.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            #border-radius: 4px;
            font-size: 16px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            background-color: white;
            
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 100%;

    </style>
    <script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("livesearch").innerHTML=this.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+str,true);
            xmlhttp.send();
        }
    </script>

</head>
<body>
    
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#index.php">Tutor Finder</a>
        </div>
        <ul class="nav navbar-nav">
 
            <li><a href="adtutorpost.php">Tutor Post</a></li>
            <li><a href="adstudentpost.php">Student Post</a></li>
            <li class="active"><a href="adguardianpost.php">Guardian Post</a></li>
            <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
            
            <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
        </ul>
    </div>
</nav>

<div class="container">

<form>
    <input type="text" name="search" placeholder="Search" onkeyup="showResult(this.value)">
</form>
<div id="livesearch" style="border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;"></div>


<table class="table table-striped table-bordered table-condensed">
    <tr>
    <th>Post ID</th>
    <th>Guardian ID</th>
    <th>Subject</th>
    <th>Medium</th>
    <th>Fee</th>
    <th>Division</th>
    <th>Address</th>
    <th>Posting Date and Time</th>
    <th>Action</th>
    </tr>
    <?php
        require 'config.php';

        $statement="select * from g_post_temp";
        $result = mysqli_query($conn, $statement);

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>"; 
                echo "<td>".$row['post_id']."</td>";
                echo "<td>".$row['g_id']."</td>";
                echo "<td>".$row['subjects']."</td>";
                echo "<td>".$row['medium']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "<td>".$row['divisions']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['dateTime']."</td>";
                echo "<td><a href=\"dltguardianpost.php?id=$row[post_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"appguardianpost.php?id=$row[post_id]\">Approve</a> | <a href=\"singleview.php?id=$row[post_id]\">View</a></td>";
                echo "</tr>";
            }
        
        }
        else
        {
            echo "Nothing found in db";
        }
        mysqli_close($conn);
    ?>
    </table>
</div>
      
      <script>
      function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
              x.className += " responsive";
          } else {
              x.className = "topnav";
          }
      }
      </script>
</body>
</html>