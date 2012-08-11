<?php
ob_start();
session_start();

error_reporting(E_ALL ^ E_NOTICE);
$current_file=$_SERVER['SCRIPT_NAME'];
require 'connect.inc.php';

if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
{
 $http_referer=$_SERVER['HTTP_REFERER'];
}






function loggedin()
{

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
return true;
}
else
{
return false;
}
}

function getfield($field)
{              if(isset($_SESSION['user_id']))
{
$query="SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
if($query_run=mysql_query($query))
{
if($query_result=mysql_result($query_run,0,$field))
{
  return $query_result;
}
}
}

}

function paymentamount($treatmenttype,$amount)
{
   if($treatmenttype=='Private Doctor'){
    $tax=($amount*1.1036)-$amount;

   }else if($treatmenttype=='Company Doctor')
   {
    $tax=100;

   }
   else{
    $tax=0;
   }

    $finalamount=$amount-$tax;
return ($finalamount);
}



function getitem($field,$table,$sno){
        $query2="SELECT `$field` FROM `$table` WHERE  `sno`='$sno'";
  if($query_run2=mysql_query($query2))
  {
   if($query_result2=mysql_result($query_run2,0,$field))
   {
     return $query_result2;

   }
  }

 }





?>
