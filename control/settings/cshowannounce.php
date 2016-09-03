<?php
require_once('../../model/settings/Rsettings.php');
$rsetting = new Rsettings();
$record = $rsetting->get_announcement();
$cnt = count($record['subject']);

?>