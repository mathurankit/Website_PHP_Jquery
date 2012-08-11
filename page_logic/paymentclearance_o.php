<?php
  require_once 'utilities_function/core.inc.php';

class clearance{

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

function paymentclear($empstatus,$sno){
               //  print_r($_POST);

               $amountclaimed=getitem('claimamount','empclaimrequest',$sno);
 $treattype=getitem('treatmenttype','empclaimrequest',$sno);
     $finalamount=paymentamount($treattype,$amountclaimed);
     $reimbursedamount=$finalamount;
$query_update="UPDATE `paymentapproved` SET  `reimbursedamount`='$reimbursedamount',`paymentstatus`='$empstatus' WHERE `sno` ='$sno'";
    $query_update2="UPDATE `empclaimrequest` SET `reimbursedamount`='$reimbursedamount',`paymentstatus`='$empstatus' WHERE `sno`='$sno'";
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