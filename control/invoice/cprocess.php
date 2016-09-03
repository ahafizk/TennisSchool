<?php
if(isset($_POST['count']))
{
	require_once("pdf/make_pdf.php");
	$cntR = $_POST['count'];
	$cntN =0;
	for($i=0;$i<$cntR;$i++)
	{
		$checkd = "user_id".$i;
		if(isset($_POST[$checked]))
		{
			$cntN = $cntN + 1;
			
		}
	}//for
}
?>