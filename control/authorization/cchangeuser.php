<?php
require_once('../../model/authorization/Rauthorization.php');
$rauth = new Rauthorization();

$record = $rauth->get_all_user_name();
$cnt = count($record['id']);
?>