  <?php
require '../utilities_function/core.inc.php';
require '../utilities_function/connect.inc.php';
require 'prms_o.php';

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
    $usertype=0;


        if($password!=$password_again)
       {
                echo 'password do not match';
       }
        else if($_POST['secure']!=$_SESSION['secure'])
           {
                 echo 'please reenter the text';
           }
       else
       {

           $query="SELECT `username` FROM `users` WHERE `username`='$username'";
           $query_run=mysql_query($query);
           if(mysql_num_rows($query_run)==1)
           {
            echo 'Username already exist';

           }


           else
           {

            $obj1=new prms_main();
            $obj1->getconnection();
            if($obj1->getregister($username,$password_hash,$firstname,$lastname,$empno,$email,$mobile,$address))
	    {
		echo'You are successfully registered.';

            } 
           else
		{
			
			echo 'Try again...';
 		}

           }




           }



     
     }
























  ?>
