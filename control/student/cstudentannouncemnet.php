<?php
require_once('../../common/common.php');
require_once('../../common/forwarding.php');
require_once('../../model/student/Rstudent.php');

$rstudent = new Rstudent();
$ret = $rstudent->get_announcement(); //get first 10 announcements
?>
