<?php
require_once('../../model/student/Rstudent.php');
$rstudent = new Rstudent();
$record = $rstudent->get_temp_shcedule();
?>