<?php
require_once('../../model/authorization/Rauthorization.php');
$rauth =new Rauthorization();
$user_id = $_POST['user_id'];
$record = $rauth->get_user_by_id($user_id);

?>