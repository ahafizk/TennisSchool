<?php
require_once('../../common/common.php');
require_once('../../common/forwarding.php');
require_once('../../model/student/Rstudent.php');
session_start();
 if(isset($_POST['Remove']))
 {
	$user_id = $_POST['user_id'];
	echo $user_id;
	$rstudent = new Rstudent();
	
	$rstudent->remove_sport_info($user_id);
	$rstudent->remove_address($user_id);
	$rstudent->remove_user($user_id);
	forward('../../view/admin/studentMenu.php');
 }
?>