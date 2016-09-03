<?php
require_once('../../model/invoice/Rinvoice.php');
$rin = new Rinvoice();
$r = $rin->get_info(1);
print_r($r);
?>