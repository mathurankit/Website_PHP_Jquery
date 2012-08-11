<?php

require '../utilities_function/connect.inc.php';



 if(isset($_POST['username'])&&isset($_POST['mobile'])&&isset($_POST['empno']))
 {
   $username=$_POST['username'];
   $mobileno=$_POST['mobile'];
   $empno=$_POST['empno'];
   if(!empty($username)&&!empty($mobileno)&&!empty($empno))
   {
     $query="SELECT `id` FROM `users` WHERE `username`='$username' AND `empno`='$empno'";
     if($query_run=mysql_query($query))
     {
       $mysql_num_rows=mysql_num_rows($query_run);
       if($mysql_num_rows==1)
       {
          $newpassword=rand(1000,9999);
          $newpassword_hash=md5($newpassword);
         $query="UPDATE `users` SET `password` = '$newpassword_hash' WHERE `username` ='$username';";
           if($query_update=mysql_query($query))
           {

             echo'Password is reset now...'.$newpassword;

           }
           else
           {
            echo 'could not update ur password';
           }

          }
          else if($mysql_num_rows==0){
           echo 'Wrong Username/Password.'; 
          }
        }
     else
     {
      echo 'Sorry no record found...Try again.';
     }

   }
   else
   {

    echo'Please fill in all fields.';

   }


 }






















?>