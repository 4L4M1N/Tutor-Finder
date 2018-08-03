<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register in Tuioner</h2>
  </div>
	
  <form method="post" action="registration.php">

	<div class="input-group">
	 <lable>Registering For</lable>
</div>
<div class="input-group">
<input list="user">
  <datalist id="user">
    <option value="Studnet">
    <option value="Tutor">
    <option value="Gaurdian">
  </datalist> 
		</div>

		<div class="input-group">
  	  <label>Fullname</label>
  	  <input type="text" name="fname">
  	</div>

  	<div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="Date" name="dob">
  	</div>
  	<div class="input-group">
  	  <label>Education</label>
  	  <input type="text" name="education">
  	</div>  
      <div class="input-group">
  	  <label>Email</label>
  	  <input type="Email" name="email">
  	</div>
		<div class="input-group">
  	  <label>Contatct Number</label>
  	  <input type="number" name="contactnumber">
  	</div>
		<div class="input-group">
  	  <label>NID Number</label>
  	  <input type="number" name="nidnumber">
  	</div>  
      <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>