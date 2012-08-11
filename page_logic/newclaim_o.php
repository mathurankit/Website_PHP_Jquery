<?php

class submitclaim{
 function getconnection()
  {
    
    $mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="a_database";

if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||@!mysql_select_db($mysql_db))
{
	die(mysql_error());
	return 0;
}
 return 1;
}


function claimsubmission($serialno,$empno,$patientname,$claimamount,$billdate,$billtype,$status,$relation,$treatmenttype,$hospital_doctorname,$billno,$date){
  

$sno= date("mdY");
  $empno=getfield('empno');
   $query_count= "SELECT * FROM `empclaimrequest` WHERE `empno`='$empno'";
   if($query_count_run=mysql_query($query_count))
   {
    global $counter;
   $counter=mysql_num_rows($query_count_run);
  ++$counter;

   }

 $serialno=$sno.''.$empno.''.$counter;
 
 
 
  $query2="INSERT INTO `paymentapproved` VALUES('$serialno','$empno','$patientname','$claimamount','$billdate','','$billtype','','$status')";
   $query="INSERT INTO `empclaimrequest` VALUES ('$serialno','$empno','$patientname','$relation','$treatmenttype','$hospital_doctorname','$billdate','$billno','$billtype','$claimamount','','$status','$date')";
   if($query_run2=mysql_query($query2)&&$query_run=mysql_query($query))
   {

   ?>
    <center>  Form Submitted Successfully<br>
      Click <a href="claim.php">here</a> to go back.  </center>
   <?php


   }




}




}





?>