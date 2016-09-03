<?php
require_once('../../model/level/Rgroup.php');
$rgroup = new Rgroup();
$lesson = $rgroup->get_groups();
$cnt = count($lesson['group_id']);

?>