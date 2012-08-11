<?php

require 'connect.inc.php';

 if(isset($_POST['username'],$_POST['mobile'],$_POST['empno']))
 {
   $username=$_POST['username'];
   $mobileno=$_POST['mobile'];
   $empno=$_POST['empno'];

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
     }
     else
     {
       echo 'query failed';
     }
 }


                       
                       







?>