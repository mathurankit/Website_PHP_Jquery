<?php

require_once 'utilities_function/core.inc.php';
require_once 'utilities_function/connect.inc.php';
require 'page_handler/paymentclear_handler.php';
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
	<center> <p align="LEFT"><a href="admin.php">Back</a></P>



<?php

   $query="SELECT * FROM `empclaimrequest` WHERE `paymentstatus`!='Approved'";
   if(mysql_num_rows($query_run=mysql_query($query))==0)
      {
        echo 'No records Found';
      }
   elseif($query_run=mysql_query($query))
   { 


     ?>

   <h2>Current Pending Payments</h2>

   <table border="1" cellpadding="2" cellspacing="2" style="width :70%; margin-left:auto; margin-right:auto;">
   <tr>
   <th>Payment Id</th>
   <th>Empno</th>
   <th>Patient Name</th>
   <th>Claim Amount</th>
   <th>Reimbursed Amount</th>
   <th>Bill Date</th>
   <th>Reimbursement Type</th>

  

   </tr> <br>
   <?php

   while($row=mysql_fetch_assoc($query_run))
   {

    extract($row);
    echo '<tr>';
    echo '<td>'.$sno.'</td>';
    echo '<td>'.$empno.'</td>';
    echo '<td>'.$patientname.'</td>';
    echo '<td>'.$claimamount.'</td>';
      echo '<td>'.$reimbursedamount.'</td>';
    echo '<td>'.$billdate.'</td>';
    echo '<td>'.$billtype.'</td>';





   }
         ?>

   </table>
   <br><br><br>



 <form method="POST" action="paymentclearance.php">
EMPNO: <select name="empselect">
<option value="Select">Select</option>
<?php
     $query1="SELECT DISTINCT(`empno`) FROM `empclaimrequest` WHERE `paymentstatus`!='Approved'";
     if($query_run2=mysql_query($query1))
     {
       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>
         <option value="<?php echo $empno;  ?>"><?php echo $empno;  ?>  </option>
          <?php
         }

     }

               ?>
      </select> <br>
      
      
       Payment Id: <select name="sno">
       <option value="Select">Select</option>
<?php
     $query1="SELECT `sno` FROM `empclaimrequest` WHERE `paymentstatus`!='Approved'";
     if($query_run2=mysql_query($query1))
     {
       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>
         <option value="<?php echo $sno;  ?>"><?php echo $sno;  ?>  </option>
          <?php
         }

     }

               ?>
      </select> <br>







Status: <select name="empstatus"> <option value="Approved">Approved</option>


      </select><br>

      <input type="submit" value="submit">
      </form>


    <?php } 
    
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
