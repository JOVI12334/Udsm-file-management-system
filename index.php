<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Udsm Students File Management System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
<body style="background-image: linear-gradient(to top, #09203f 0%, #537895 100%);">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#"><img height="50" width="50" src="http://estates.udsm.ac.tz/drive/assets/images/5bc4bde04156c.png" alt=""></a>
				 <a class="navbar-brand" href="#">  Udsm Students File Management System(USFMS)</a>
				 <br>
				<ul>
					<span class="glyphicon glyphicon-home"> <a href="index.php">Home</a> </span>
				</ul>
	    </div>

	  </div>
	</nav>
	<?php include 'login.php'?>
	<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>

<div class="footer">
  	<label class = "footer-title">&copy; Copyright USFMS <?php echo date("Y", strtotime("+8 HOURS"))?></label>
</div>

</body>
</html>
