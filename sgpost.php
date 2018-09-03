<?php
    session_start();
    if((isset($_SESSION['un'])) && (isset($_SESSION['name']))){
      $userId = $_SESSION['un'];
      $userType = $_SESSION['name'];
    }else {
      header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student or Guardian Post</title>
  <link rel="stylesheet" type="text/css" href="css/post.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <script src="js/sgpost.js"></script>
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tutor Finder</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="sgpost.php">Create Post</a></li>
      <li><a href="logout.php"><?php echo '<span>&#10060</span>'?> Logout</a></li>
    </ul>
  </div>
</nav>




        <div class="container">
                <form name="sgpost" method="post" action="post-handler.php" onsubmit="return(validate());">
                
                  <div class="row">
                    <div class="col-25">
                      <label for="divi">Division</label>
                    </div>
                    <div class="col-75">
                      <select id="divi" name="divisions">
                        <option value="-1" selected>[choose yours]</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Syleht">Syleht</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Khulna">Khulna</option>
                      </select>
                      <p id="derror" style="color:red;"></p>
                    </div>
                  </div>

                  <div class="row">
                        <div class="col-25">
                          <label for="medium">Medium</label>
                        </div>
                        <div class="col-75">
                          <select id="medium" name="mediums">
                            <option value="-1" selected>[choose yours]</option>
                            <option value="English">English</option>
                            <option value="Bangla">Bangla</option>
                          </select>
                          <p id="merror" style="color:red;"></p>
                        </div>
                      </div>

                      <div class="row">
                            <div class="col-25">
                              <label for="sub">Subjects</label>
                            </div>
                            <div class="col-75">
                              <select id="sub" name="subjects">
                                <option value="-1" selected>[choose yours]</option>
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="Math">Math</option>
                                <option value="Higher Math">Higher Math</option>
                                <option value="Biology">Biology</option>
                                <option value="Agriculture">Agriculture</option>
                              </select>
                              <p id="serror" style="color:red;"></p>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="esalary">Proposed Fee</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="esalary" name="salary" placeholder="Your Expected Fee..">
                              <p id="error" style="color:red;"></p>
                            </div>
                          </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="add">Address</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="add" name="address" placeholder="Write something..">
                      <p id="aerror" style="color:red;"></p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="submit" value="Submit">
                  </div>
                </form>
              </div>
</body>
</html>