 <?php
 require_once 'utilities_function/core.inc.php';
 require 'page_logic/prms_o.php';
    $empno=getfield('empno');


  if(isset($_POST['id'])&&isset($_POST['username']))
  {
    $id=$_POST['id'];
    $username=$_POST['username'];
      $obj1=new prms_main();
      $obj1->getconnection();

    if($obj1->getdeactivated($id,$username))
  {

     echo 'Account with username :  <B>'.$empusername.'</B> is now Deactivated.';

   }else
   {
    echo 'Try again Later.';

   }


  }
  ?>