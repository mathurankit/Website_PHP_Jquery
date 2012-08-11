    <?php
      require 'utilities_function/core.inc.php';
      require 'utilities_function/connect.inc.php';

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
			<a href="prms.php">Home</a> :: <a href="#">Personal Details</a> :: <a href="#">Edit Details</a>
		</div>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
		  <p>&nbsp;<center><P ALIGN="LEFT"><a href="main.php">Back</a> </P>


<div id="apDiv4">




 Please Re-enter Your Personal Details:   <br><br>

   
Firstname&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; 


<input id="firstname" type="text" disabled="disabled" name="firstname" value ="<?php echo $val1=getfield('firstname');  ?>"><br><br>
       Lastname&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="lastname" type= "text" name="lastname" disabled="disabled"  value ="<?php echo $val2=getfield('lastname'); ?>"><br><br>

    Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="email" type="email" name="email"  value ="<?php  if(isset($email)){ echo $email; } ?>"><br><br>
    Mobile&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;  <input id="mobile" type="text" name="mobile" value ="<?php  if(isset($mobile)){ echo $mobile; } ?>"><br>
    <span id="mobile_check" style="color: #f00;" > </span>
    <br>
    Address&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="address" type="address" name="address" value ="<?php  if(isset($address)){ echo $address; } ?>"><br><br>


         <input id="modify" type="Button" value="Modify"/><br>
         <span id="feedback"></span>

      
      
  





			</center></p>          <div id="login" style=" color: #787860">
	  <h3>About PRMS - </h3>
			<p>This site is developed to facilitate online medical bills submission.Employees can submit forms and track their payment status.For further queries see contact us.</p>
		</div>
	</div>
  <?php include("footer.php"); ?>
	<!-- credit link to remain intact, see readme.txt-->
	<div id="credit" class="right"></div>
</div>    <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/changedetails.js"></script>

</body>
</html>
