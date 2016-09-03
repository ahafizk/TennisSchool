<?php
require_once('../../model/financial/Rfinancial.php');
$rfinancial = new Rfinancial();
$total_amount = $rfinancial->get_total_amount();
$total_paid_student = $rfinancial->get_paid_total_student();
$total_unpaid_student = $rfinancial->get_unpaid_student();
$total_dues = $rfinancial->get_unpaid_amount();
?>