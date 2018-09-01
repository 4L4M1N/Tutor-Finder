<!DOCTYPE html>
<html>
<head>

	  <link rel="stylesheet" type="text/css" href="css/messagebox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>
<script src="js/registration.js"></script>
</head>
<body>
 <title>Message Box Tuition Finder</title>
  <div class="header">
  	<h2>Message Box</h2>
  </div>
	
  <form  name="index" method="post" action="Registration-handler.php" onsubmit="return(validate());">

		<div class="input-group">
        <label><u>Message</u></label>
        <p>ekhane data fetch kore show korae dimu</p>
  	</div>

  	<div class="input-group">
  	  <label id="ins">Reply</label>
			<input type="text" name="reply">
			<p id="rerror" style="color:red;"></p>
  	</div>  

  	<div class="input-group">
  	  <button type="submit" class="btn" name="send">Send</button>
  	</div>
  </form>
</body>
</html>