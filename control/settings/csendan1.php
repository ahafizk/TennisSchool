<?php
require_once('../../model/settings/Rsettings.php');
if(isset($_POST['radio_t']))
{
	$value = $_POST['radio_t'];
	$type = $_POST['type'];
	if($value == 1)
	{
		$id = $_POST['subject'];	
	}
	else if($value==2)
	{
		$id = $_POST['date'];
	}
	$rauth = new Rsettings();
	$record = $rauth->get_announcement_id($id);
}
?>