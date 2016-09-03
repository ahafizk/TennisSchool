<?php
require_once('../../model/level/Rgroup.php');
$rgroup = new Rgroup();
$id_s = $_POST['group_id'];
$ids = explode(",",$id_s);
$group_id = $ids[0];
$lesson_id = $ids[1];


$lesson = $rgroup->get_lesson_by_id($lesson_id);
$group = $rgroup->get_group_by_id($group_id);
$times = $rgroup->get_lesson_times_by_id($group_id, $lesson_id);
$finance = $rgroup->get_lesson_finance($group_id,$lesson_id);
$avl = $rgroup->get_availablemember($group_id,$lesson_id);

?>