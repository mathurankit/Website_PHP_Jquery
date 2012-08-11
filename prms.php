<?php

require '/utilities_function/core.inc.php';


?>


















<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Your Website Title Here</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:580px;
	top:482px;
	width:337px;
	height:31px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:566px;
	top:352px;
	width:402px;
	height:255px;
	z-index:1;
}
</style>
</head>
<body>

<div id="mainwrap">
  <?php include("header.php"); ?>
<?php include("leftnav.php"); ?>
	<div id="contentwrap">
		<div id="breadcrumb">
			<a href="prms.php">Home</a> :: <a href="#">Login</a>
		</div>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
		  <p>&nbsp;<center> <b>
		  	        <?php
 require '/page_handler/prms_handler.php';
 ?><br>    </b>
	        Please Log in. 
	        

         <form action="<?php echo $current_file  ?>" method="POST">
Username&nbsp;:&nbsp; <input type="text" name="username"/>
<br><br>
Password&nbsp;:&nbsp;&nbsp;<input type="password" name="password"/>
<br><br>
<input type="submit" value ="Log in">
</form>
<a href="register.php">Registeration Form</a>
<a href="forgot.php">Forgot Password</a>

			</center></p>          <div id="login" style=" color: #787860">
	  <h3>About PRMS - </h3>
			<p>This site is developed to facilitate online medical bills submission.Employees can submit forms and track their payment status.For further queries see contact us.</p>
		</div>
	</div>
  <?php include("footer.php"); ?>
	<!-- credit link to remain intact, see readme.txt-->
	<div id="credit" class="right"></div>
</div>
</body>
</html>
