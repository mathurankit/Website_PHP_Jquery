<?php
require 'utilities_function/core.inc.php';
require 'utilities_function/connect.inc.php';
$empno=getfield('empno');

$firstname=getfield('firstname');
$lastname=getfield('lastname');

if(isset($_POST['email'])&&isset($_POST['mobile'])&&isset($_POST['address'])){
	$email=mysql_real_escape_string($_POST['email']);
		$mobile=mysql_real_escape_string($_POST['mobile']);
			$address=mysql_real_escape_string($_POST['address']);
			if(!empty($email)&&!empty($mobile)&&!empty($address)){
				$query="UPDATE `users` SET `email`='$email',`mobileno`='$mobile',`address`='$address' WHERE `empno`='$empno'";
				if($query_run=mysql_query($query))
				{
				
					echo 'Updation Completed Successfully';
				}
								
			}
			else
			{
				echo 'Please fill in the form.';
			}
}



?>