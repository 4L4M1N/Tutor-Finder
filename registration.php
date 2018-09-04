<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
 <script type="text/javascript">

function showText(num)
{
if(num==0){
document.getElementById('nidnumber').style.display='none';
document.getElementById('hid').style.display='none';
document.getElementById('dob1').style.display='block';
document.getElementById('dob').style.display='block';
document.getElementById('ins1').style.display='block';
document.getElementById('ins').style.display='block';

}
else if(num==1)
{
	document.getElementById('dob1').style.display='none';
document.getElementById('dob').style.display='none';
document.getElementById('ins1').style.display='none';
document.getElementById('ins').style.display='none';
document.getElementById('nidnumber').style.display='block';
document.getElementById('hid').style.display='block';

}
else if(num==2)
{
	document.getElementById('dob1').style.display='none';
document.getElementById('dob').style.display='none';
document.getElementById('nidnumber').style.display='block';
document.getElementById('hid').style.display='block';
document.getElementById('ins1').style.display='block';
document.getElementById('ins').style.display='block';

}

return;
}



</script>
<script src="js/registration.js"></script>
</head>
<body>
 <title>Tution finder Registration Page</title>
  <div class="header">
  	<h2>Register in Tutor Finder</h2>
  </div>
	
  <form  name="index" method="post" action="Registration-handler.php" onsubmit="return(validate());">

	
	<div class="input-group">
	 <lable>Registering For (Please Click Below)</lable>
</div>
<div>
  <input type="radio" onclick="showText(0)" id="r1" name="user" value="Student">Student
  <input type="radio" onclick="showText(1)" id="r2" name="user" value="Gaurdian">Gaurdian
  <input type="radio" onclick="showText(2)" id="r3" name="user" value="Tutor">Tutor
	</div>

		<div class="input-group">
  	  <label>Fullname</label>
			<input type="text" name="fname">
			<p id="ferror" style="color:red;"></p>
  	</div>

  	<div class="input-group">
  	  <label id="dob">Date of Birth</label>
			<input id="dob1" type="Date" name="dob">
			<p id="derror" style="color:red;"></p>
  	</div>
  	<div class="input-group">
  	  <label id="ins">Institution Name</label>
			<input id="ins1" type="text" name="ins">
			<p id="ierror" style="color:red;"></p>
  	</div>  
      <div class="input-group">
  	  <label>Email</label>
			<input type="Email" name="email">
			<p id="eerror" style="color:red;"></p>

  	</div>
		<div class="input-group">
  	  <label>Contatct Number</label>
			<input type="text" name="contactnumber" id="veriphn" onkeyup="checkphone();">
			<p id="cerror" style="color:red;"></p>
			<span id="phn_status"></span>
  	</div>
		<div class="input-group">
  	  <label id="hid">NID Number</label>
			<input type="text" id ="nidnumber" name="nidnumber">
			<p id="nerror" style="color:red;"></p>
  	</div>  
      <div class="input-group">
  	  <label>Address</label>
			<input type="text" name="address">
			<p id="aerror" style="color:red;"></p>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>