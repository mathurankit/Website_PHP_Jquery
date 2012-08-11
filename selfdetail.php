<?
require_once 'utilities_function/core.inc.php';
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
		</div>   <p ALIGN="RIGHT"><strong><a href="logout.php">Logout</a></strong></p>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
		  <p>
                  <P ALIGN="LEFT"><a href="<?php echo $_SERVER['HTTP_REFERER'];  ?>">Back</a> </P>&nbsp;<center>
<?php

require 'utilities_function/connect.inc.php';

$firstname=getfield('firstname');

$lastname=getfield('lastname');

?>

<div id="apDiv4">



<?php

if(isset($_SESSION['user_id']))

{



 $query="SELECT `firstname`,`lastname`,`empno`,`email`,`mobileno`,`address` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";

 if($query_run=mysql_query($query))

 {

   $mysql_num_rows=mysql_num_rows($query_run);

   ?>

   

   

   <div style="text-align: center;">

   <h2>Personal details</h2>



   <table border="1" cellpadding="2" cellspacing="2" style="width :70%; margin-left:auto; margin-right:auto;">

   <tr>

   <th>Firstname</th>

   <th>Lastname</th>

   <th>E-mail</th>

   <th>Mobile</th>

   <th>Address</th>

   </tr> <br>

   <?php

   while($row=mysql_fetch_assoc($query_run))

   {

    extract($row);

    echo '<tr>';

    echo '<td>'.$firstname.'</td>';

    echo '<td>'.$lastname.'</td>';



    echo '<td>'.$email.'</td>';

    echo '<td>'.$mobileno.'</td>';

    echo '<td>'.$address.'</td>';

    echo '</tr>';

   }

   ?>



   </table>

   </div>



     <br>

   <center><a href="editdetails.php">Edit Details</a></center>





   <?php

 }

 else

 {

       echo $_SESSION['user_id'];

   echo 'Sorry..please try again.';

 }



}

else

{

 header('Location:index.php');

}

?>





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
