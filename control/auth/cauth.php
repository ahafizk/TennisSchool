<?php
require_once('../../model/auth/Rauth.php');
require_once('../../common/forwarding.php');
//require_once('../admin/index.php');
session_start();
if(isset($_REQUEST['Login']))
{
	
$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];
//echo $user_name;
//echo $password;
//echo $_SESSION['USER'];

$rauth = new Rauth();
$record = $rauth->get_user($user_name,$password);

if($record)
{
	if(!strcmp($record['user_name'][0],$user_name)&&!strcmp($password,$record['password'][0]))
	{       
                $_SESSION['user_id'] = $record['user_id'][0];
		$_SESSION['USER'] = $user_name;
		$_SESSION['password'] = $password;
		$_SESSION['invalid'] = 0;
		$_SESSION['auths']=1;
//		echo 'hello';
//		forward('../admin/index.php');
                $_SESSION['user_type']=$record['user_type'][0];
                if ($_SESSION['user_type']=='admin'){
                    forward('../admin/index.php');
                } else {
                    forward('/sport/view/student/studenthome.php');
                }
	}
	else
	{
		$_SESSION['invalid'] = 1;
		//forward('index.php');
	}
}
else
{
	$_SESSION['invalid'] = 1;
	//forward('index.php');
}
}
?>