<?php
require_once 'utilities_function/core.inc.php';

require 'utilities_function/connect.inc.php';
error_reporting(E_ALL ^ E_NOTICE);

$firstname=getfield('firstname');
$lastname=getfield('lastname');
if(!loggedin())
{
	header('Location:prms.php');
}
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
<div id="leftnavwrap">
	<h3>
		
	</h3>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About Indian Oil</a></li>
		<li><a href="#">About PRMS</a></li>
	</ul>
	<h3>
		
	</h3>
	<ul>
		<li>
			<a href="#">Directory</a>
		</li>
		<li>
			<a href="#">Company Profile</a>
		</li>
		<li>
			<a href="#">Contact Usk</a>
		</li>
	</ul>
</div>
	<div id="contentwrap">
		<div id="breadcrumb">
			<a href="prms.php">Home</a> :: <a href="#">Login</a>
		</div> <p ALIGN="RIGHT"><strong><a href="logout.php">Logout</a></strong></p>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
	<center>
	   <P ALIGN="LEFT"><a href="<?php echo $_SERVER['HTTP_REFERER'];  ?>">Back</a> </P>
    <br><br><br>

<p><a href="newclaim.php">New Claim</a><br></p>
<p><a href="viewclaims.php">View Claim records</a><br></p>
         
         <br><br><br><br><br><br><br><br><br>
         
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
