<?php
require_once 'utilities_function/core.inc.php';
require 'utilities_function/connect.inc.php';

if(!loggedin())
{
 header("Location:prms.php");
  
}
$empno=getfield('empno');
$firstname=getfield('firstname');
$lastname=getfield('lastname');

?>








<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
      <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui.css">

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

<body>

<div id="mainwrap">
  <?php include("header.php"); ?>
  </head>
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
			<h2>New Claim Submission Form</h2>
	<center>
	   <P ALIGN="LEFT"><a href="<?php echo $_SERVER['HTTP_REFERER'];  ?>">Back</a> </P>


<div id="apDiv4">
          <?php
             require 'page_handler/newclaim_handler.php';
             ?>

 </center>  <br>
     <center>
                <form method="POST" action="newclaim.php">

                            Patient name &nbsp;&nbsp;&nbsp;&nbsp;           &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                            
                            <select  name="patientname" >
      <option value="Select">Select</option>
            <option value="Self">Self</option>
<?php

     $query1="SELECT `dependentname` FROM `dependent` WHERE `empno`='$empno'";
     if($query_run2=mysql_query($query1))
     {

       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>     

         <option value="<?php echo $dependentname;  ?>"><?php echo $dependentname;  ?>  </option>

          <?php
         }

     }

               ?>
      </select> <br>

                            
                            
                            

                            
                            <br>
              Relation    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;:&nbsp;&nbsp;&nbsp;


  <select   name="relation" >
      <option value="Select">Select</option>
            <option value="Self">Self</option>
<?php

      $empno=getfield('empno');
     $query1="SELECT DISTINCT(`relation`) FROM `dependent` WHERE `empno`='$empno'";
     if($query_run2=mysql_query($query1))
     {

       while($row2=mysql_fetch_assoc($query_run2))
       {
         extract($row2);
   ?>     

         <option value="<?php echo $relation;  ?>"><?php echo $relation;  ?>  </option>

          <?php
         }

     }

               ?>
      </select> <br>
                       <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Treatment Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="treatmenttype" > &nbsp;&nbsp;&nbsp;:
                                 <option value="Select">Select</option>
                                 <option value="Nominated Hospital">Nominated Hospital</option>
                                 <option value="Private Doctor">Private Doctor</option>
                                 <option value="Company Doctor">Company Doctor</option>
                                 </select><br>
                                           <br>
                Doctor Name/Hospital Name  &nbsp;:&nbsp;&nbsp;<input id="doctorname" type="text" name="hospital_doctorname">&nbsp;&nbsp;&nbsp;<br>
                <span id="doctor_check" style="color: #f00;" > </span>
                 <br>  &nbsp;&nbsp;&nbsp;Bill Date&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<input id="date" size="8" type="text" name="billdate">&nbsp;&nbsp;






                  <br>
                         <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Bill No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input  type="text" name="billno"> <br>
                         <br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bill Type&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="billtype" >
                                 <option value="Select">Select</option>
                                 <option value="Consultancy">Consultancy</option>
                                 <option value="Medicine">Medicine</option>
                                 <option value="Test Charge">Test Charge</option>
                                 </select><br>
                                                 <br>
                         
                         

                 &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Claim Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input id="claimamount" type="text" name="claimamount"><br>
                   <span id="amount_check" style="color: #f00;" > </span>
                  <br>


                               <input id="claimsubmit" type="submit" value="Add">
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
<body bgcolor="#DDDDDD">
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
       <script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
        <script type="text/javascript" src="js/ui.js"></script>
        <script type="text/javascript" src="js/claimcheck.js"></script>
</body>
</html>
