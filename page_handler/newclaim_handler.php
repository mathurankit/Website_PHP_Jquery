<?php

require 'page_logic/newclaim_o.php';


if(isset($_POST['patientname'])&&isset($_POST['relation'])&&isset($_POST['treatmenttype'])&&isset($_POST['hospital_doctorname'])&&isset($_POST['billdate'])&&isset($_POST['billno'])&&isset($_POST['billtype'])&&isset($_POST['claimamount']))
 {

   $patientname=$_POST['patientname'];
  $relation=$_POST['relation'];
  $treatmenttype=$_POST['treatmenttype'];
  $hospital_doctorname=$_POST['hospital_doctorname'];
 $billdate=$_POST['billdate'];
   $billno=$_POST['billno'];
  $billtype=$_POST['billtype'];
  $claimamount=$_POST['claimamount'];
  $status='Pending';
    $date = date('d-M-Y', time());
    if(!empty($patientname)&&!empty($relation)&&!empty($claimamount)&&!empty($billdate)&&!empty($hospital_doctorname)&&!empty($treatmenttype)&&!empty($billno)&&!empty($billtype))
  {
      $objclaim=new submitclaim();
      if($objclaim->getconnection()){
     if($objclaim->claimsubmission($serialno,$empno,$patientname,$claimamount,$billdate,$billtype,$status,$relation,$treatmenttype,$hospital_doctorname,$billno,$$date)){

      echo 'Claim submitted Successfully';
     }
      }


   else
   {
    echo '<br>Could not process..Try again.';
   }



  }
  else
  {
   echo'Please fill in all fields';
  }

 }

?>
