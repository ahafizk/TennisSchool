<?php
require_once('../../model/schedule/Rschedule.php');
$rschedule = new Rschedule();
$rschedule->make_look_up();
$t = $rschedule->make_schedule12(); // generate schedule
?>