<?php
require_once 'utilities_function/core.inc.php';
require 'page_logic/paymentclearance_o.php';
   $empno=getfield('empno');


  if(isset($_POST['empselect'])&&isset($_POST['empstatus'])&&isset($_POST['sno']))
  {
    $empselect=$_POST['empselect'];
   $empstatus=$_POST['empstatus'];
   $sno=$_POST['sno'];


    $objclear=new clearance();
    if($objclear->getconnection())
    {
     if($objclear->paymentclear($empstatus,$sno)){



     }
     else
     {
      echo 'Please try again later';
     }

    }


  }


?>