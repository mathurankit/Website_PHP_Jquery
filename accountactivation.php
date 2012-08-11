<?php
require_once 'utilities_function/core.inc.php';

require 'utilities_function/connect.inc.php';
require 'page_handler/accountactivation_handler.php';
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
#apDiv3 {
	position:absolute;
	left:889px;
	top:188px;
	width:94px;
	height:22px;
	z-index:1;
}
</style>
</head>
<body>

<div id="apDiv3">
  <p><strong><a href="logout.php">Logout</a></strong></p>
  <p><strong><a href="logout.php"></a></strong></p>
</div>
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
			<a href="admin.php">Home</a> :: <a href="#">Login</a>
		</div>
		<div id="content">
			<h2>Welcome To Online Medical Reimbursement Portal</h2>
	<center>  <p align="LEFT"><a href="admin.php">Back</a></P>
  



<?php
$activation=0;
      $query="SELECT * FROM `users` WHERE `activated`='$activation';";
      if(mysql_num_rows($query_run=mysql_query($query))==0)
      {
        echo 'No records Found';
      }
   elseif($query_run=mysql_query($query))
   {  ?>

   <h2>Recent Account Registrations</h2>

   <table border="1" cellpadding="2" cellspacing="2" style="width :70%; margin-left:auto; margin-right:auto;">
   <tr>
   <th>ID</th>
   <th>Employee Number</th>
    <th>Mobile</th>
    <th>Activation Status</th>
   </tr> <br>
   <?php
   while($row=mysql_fetch_assoc($query_run))
   {
    extract($row);
    echo '<tr>';
    echo '<td>'.$id.'</td>';


    echo '<td>'.$empno.'</td>';

    echo '<td>'.$mobileno.'</td>';

    echo '<td>'.$activated.'</td>';;
      echo '</tr>';
   }




          ?>

   </table>
   <br><br><br>
        Please Select the ID and Username to activate the account
    <form method="POST" action="accountactivation.php">
ID: <select name="id">
<option value="Select">Select</option>
<?php
$activated=0;
     $query1="SELECT DISTINCT(`id`) FROM `users` WHERE `activated`='$activated'";
     if($query_run2=mysql_query($query1))
     {
       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>
         <option value="<?php echo $id;  ?>"><?php echo $id;  ?>  </option>
          <?php
         }

     }

               ?>
      </select> <br>
      
      
      Username: <select name="username">
      <option value="Select">Select</option>
<?php
     $query1="SELECT DISTINCT(`username`) FROM `users` WHERE `activated`='$activated'";
     if($query_run2=mysql_query($query1))
     {
       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>
         <option value="<?php echo $username;  ?>"><?php echo $username;  ?>  </option>
          <?php
         }

     }

               ?>
      </select> <br>







Status: <select name="activationstatus"> <option value="activate">Activate</option>

                              <option value="deactivate">Deactivate</option>
      </select><br>

      <input type="submit" value="Submit">
      </form>

         <?php 
         }
          ?>








   


         
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
