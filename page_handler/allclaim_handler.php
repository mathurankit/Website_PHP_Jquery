<?php
    require 'page_logic/allclaim_o.php';
 $empno=getfield('empno');
  
  
    if(isset($_POST['empselect'])&&isset($_POST['paymentid'])&&isset($_POST['empstatus']))
  {
    $empselect=$_POST['empselect'];
   $empstatus=$_POST['empstatus'];
   $paymentid=$_POST['paymentid'];
     $obj1=new allclaim();
     if($obj1->getconnection()){
     if($obj1->claimindex($empstatus,$empselect,$paymentid)){

       echo 'Changes submitted successfully.';
     }
     else
     {
      echo 'please try again';
     }                          
     }


  }

?>