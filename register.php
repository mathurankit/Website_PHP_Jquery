<?php
require'utilities_function/core.inc.php';
require'page_handler/register_handler.php';
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
			<a href="prms.php">Home</a> :: <a href="#">Registration</a> 
		</div>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
		  <center> <p align="LEFT"><a href="prms.php">Back</a></P>
	       <h2> Registeration form:  </h2> <br>
      <form method="POST"  action="register.php">
      Username &nbsp;&nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;: &nbsp;    <input id="username" type="text" 

name="username" value ="<?php if(isset($username)){ echo $username;} ?>">
      <br>
	<span id="username_check" style="color: #000;"></span>
<br><br>
      Password&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; : &nbsp; <input id="password" 

type="password" name="password"><br><span id="password_check" style="color: #f00;" ></span><br><br>
         Password again &nbsp; &nbsp; &nbsp;:  &nbsp;  <input id="password_again" type="password" 

name="password_again" ><br>
         <span id="passwordagain_check" style="color: #f00;" > </span>
         <br>
         Firstname&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="firstname" 

type="text" name="firstname" value ="<?php  if(isset($username)){ echo $firstname; } ?>"><br><br>
         Lastname&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="lastname" type= 

"text" name="lastname" value ="<?php if(isset($lastname)){ echo $lastname;} ?>"><br><br>
         Empno&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;: &nbsp; <input id="empno" 

type="text" name="empno" value="<?php if(isset($empno)){echo $empno;}?>"><br>
         <span id="empno_check" style="color: #f00;" > </span>

         <br>

    Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input 

id="email" type="email" name="email"  value ="<?php  if(isset($email)){ echo $email; } ?>"><br><br>
    Mobile&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;  <input id="mobile" 

type="text" name="mobile" value ="<?php  if(isset($mobile)){ echo $mobile; } ?>"><br>
    <span id="mobile_check" style="color: #f00;" > </span>
    <br>
    Address&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <input id="address" type="address" 

name="address" value ="<?php  if(isset($address)){ echo $address; } ?>"><br><br>
    Enter The Text&nbsp; &nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;<input id="secure" type="text" 

name="secure"><br><br>    <img src="generate.php"/>
   <br><br>   <input id="getregister" type="button" value="Register">
              <div id="feedback"></div> </form>
             <br>
           
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
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/usercheck.js"></script>
<script type="text/javascript" src="js/passwordcheck.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>
</body>
</body>
</html>


