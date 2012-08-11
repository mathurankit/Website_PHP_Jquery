<?php
require '/page_logic/prms_o.php';
    if(loggedin())
{
	header('Location:main.php');
}

if(isset($_POST['username'],$_POST['password'],$_POST['password_again'],$_POST['firstname'],$_POST['lastname'],$_POST['empno'],$_POST['email'],$_POST['mobile'],$_POST['address'],$_POST['secure']))
  {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_hash=md5($password);
    $password_again=$_POST['password_again'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $empno=$_POST['empno'];
        $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];


            if($_POST['secure']!=$_SESSION['secure'])
           {
                 echo 'please reenter the text';
           }

           else
           {
                 $obj1=new prms_main();
                 $obj1->getconnection();
                 if($obj1->getregister($username,$password_hash,$firstname,$lastname,$empno,$email,$mobile,$address))
               {
                 echo 'You are Successfully Registered';

               }
               else
               {
                     echo 'Could not get registered';

               }

             }
              }
?>