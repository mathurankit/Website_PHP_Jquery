<?php

require '/page_handler/forgot_handler.php';



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
		  &nbsp;<center> <p align="LEFT"><a href="admin.php">Back</a></P>
	        <h2>Recover your lost password</h2>
<form method="POST"  action="forgot.php">
Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input id="username" type="text" name="username"><br><br>
Mobile number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input id="mobile" type="text" name="mobileno"><br>
<span id="mobile_check" style="color: #f00;" > </span>
<br>
Employee Number&nbsp;&nbsp;:&nbsp;&nbsp;<input id="empno" type="text" name="empno"><br>
  <span id="empno_check" style="color: #f00;" > </span>
<br>
<input id="getregister" type="button" value="Get Password"><br>
     <div id="feedback"></div>
</form> 
           
			</center></p>          <div id="login" style=" color: #787860">
	  <h3>About PRMS - </h3>
			<p>This site is developed to facilitate online medical bills submission.Employees can submit forms and track their payment status.For further queries see contact us.</p>
		</div>
	</div>
  <?php include("footer.php"); ?>
	<!-- credit link to remain intact, see readme.txt-->
	<div id="credit" class="right"></div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/forgot.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>
</body>
</html>
