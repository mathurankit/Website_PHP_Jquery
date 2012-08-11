<?php


class allclaim{
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




function claimindex($empstatus,$empselect,$paymentid){

 $query_update="UPDATE `paymentapproved` SET `reimbursedamount`='0',`paymentstatus` ='$empstatus' WHERE `empno` ='$empselect' AND `sno` ='$paymentid'";
    $query_update2="UPDATE `empclaimrequest` SET `reimbursedamount`='0',`paymentstatus` ='".mysql_real_escape_string($empstatus)."' WHERE `empno` ='".mysql_real_escape_string($empselect)."' AND `sno` ='".mysql_real_escape_string($paymentid)."'";
    if($query_run_update=mysql_query($query_update)&&$query_run_update2=mysql_query($query_update2))
  {
    return 1;

   }
   else
{
 return 0;

}

}









}






?>