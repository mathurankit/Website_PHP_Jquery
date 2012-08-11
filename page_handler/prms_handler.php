 <?php
 require '/page_logic/prms_o.php';
if(loggedin()){
	header('Location:main.php');
}



if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
if(!empty($username)&&!empty($password_hash))
{

$obj1=new prms_main();
if($obj1->getconnection())
{
$obj1->userlogin($username,$password_hash);
}
else
{
 echo 'Something went wrong..Please try again.';

}

}
else
{
	echo 'please supply username and password';

}
}
?>