<?php
require 'utilities_function/core.inc.php';
require 'utilities_function/connect.inc.php';
if(!loggedin())
{
	header('Location:prms.php');
}else
{
$usertype=getfield('usertype');	
if($usertype==0)
{
	header('Location:main.php');
}

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
#apDiv3 {
	position:absolute;
	left:1234px;
	top:206px;
	width:74px;
	height:23px;
	z-index:1;
}
#apDiv4 {
	position:absolute;
	left:1241px;
	top:176px;
	width:60px;
	height:20px;
	z-index:1;
}
#apDiv4 strong {
	color: #333;
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
		<li><a href="admin.php">Home</a></li>
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
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="prms.php">Home</a> :: <a href="#">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminlogout.php">Logout</a> 				</div>
		<div id="content">
		  <h2>Welcome To Online Medical Reimbursement Portal	 </h2>
		  <p>&nbsp;<center>
	     <a href="allclaim.php">View All Reimbursements</a><br>
     <a href="paymentclearance.php">Reimbursement Clearance</a><br>
     <a href="accountactivation.php">Activate New Accounts</a><br>
      <a href="accountdeactivation.php">Deactivate Accounts</a><br>

<br><br><br><br><br><br><br>
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
