<?php
require_once('../../model/authorization/Rauthorization.php');
require_once('../../common/forwarding.php');
$rauth = new Rauthorization();

$record = $rauth->get_all_user_name();
$cnt = count($record['id']);
if(isset($_POST['remove']))
{
	$user_id = $_POST['user_id'];
	$rauth->delete_user($user_id);
	forward('../admin/authorizeMenu.php');
}
?>