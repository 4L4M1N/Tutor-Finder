<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/common.css" />

</head>
<body>
    
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#job">Search Tutor</a>
        <a href="post.php">Post</a>
        <a href="#profile">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    
      <div style="padding-left:16px">
        <h2>Responsive Topnav Example</h2>
        <p>Resize the browser window to see how it works.</p>
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