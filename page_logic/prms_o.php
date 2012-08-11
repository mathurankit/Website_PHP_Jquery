<?php

class prms_main
{
  function getactivated($id,$username){
      $nowactivated=1;
    $query_update="UPDATE `users` SET `activated` ='$nowactivated' WHERE `id` ='$id' AND `username`='$username'";
    if($query_run_update=mysql_query($query_update))
   {

    return 1;

   }
   else
   {
    return 0;
   }


  }
  
  
  function getdeactivated($id,$username){
      $nowactivated=0;
    $query_update="UPDATE `users` SET `activated` ='$nowactivated' WHERE `id` ='$id' AND `username`='$username'";
    if($query_run_update=mysql_query($query_update))
   {

    return 1;

   }
   else
   {
    return 0;
   }


  }








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

function getregister($username,$password_hash,$firstname,$lastname,$empno,$email,$mobile,$address){
         $usertype=0;
          $query="INSERT INTO `users` VALUES('','$username','$password_hash','$firstname','$lastname','$empno','$email','$mobile','$address','','$usertype','')";

            if($query_run=mysql_query($query))
            {

              return 1;
            }
            else
            {
             return 0;
            }
}






function userlogin($username,$password_hash)
 {

$query="SELECT `id`,`activated`  FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' and `password`='".mysql_real_escape_string($password_hash)."'";

if($query_run=mysql_query($query))
{
  $query_num_rows=mysql_num_rows($query_run);
  if($query_num_rows==0)
  {   ?>
  
  <html><body><center>
     Invalid username/password
  	  
  	  
  	  </center><?php
}
  else if($query_num_rows==1)
  {
                             
             $active=mysql_result($query_run,0,'activated');
             if($active==0)
             {
               header('Location:notactivated.php');

             }
              else
              {
             $user_id=mysql_result($query_run,0,'id');
  	  $_SESSION['user_id']=$user_id;
         $usertype=getfield('usertype');
  	    if($usertype==0)
  	    {
            header('Location:main.php');
  	    }
  	    else
  	    {
             header('Location:admin.php');
            }
  	           }





  }
   }
   else
   {
    echo'Sorry..You experienced an Unexpected Error.Please try again.';

   }
}
}



?>