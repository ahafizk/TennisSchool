<?php
require_once('../../model/register/Rpayment.php');
require_once('../../common/forwarding.php');

if(isset($_POST['voucher'])&&!strcasecmp($_POST['voucher'],'stuur voucher'))
{
	$rpayment = new Rpayment();
	for($i=1;$i<=6;$i++)
	{
		$tr = 'term'.$i;
		
		$term = $_POST[$tr];
		$tu = 'tution'.$i;
		$tution = $_POST[$tu];
		$bt = 'bwt'.$i;
		$bwt = $_POST[$bt];
		$per = 'percent'.$i;
		$percent = $_POST[$per];
		$pay = 'payment_unit'.$i;
		$payment_unit = $_POST[$pay];
		$pa = 'paid_by'.$i;
		$paid_by = $_POST[$pa];
		$d = 'day'.$i;
		$m = 'month'.$i;
		$y = 'year'.$i;
		$d = $_POST[$d];
		$m = $_POST[$m];
		$y = $_POST[$y];
		$pay_for = $d."-".$m."-".$y;
		
		if(strcasecmp($term,'')&&strcasecmp($tution,'')&&strcasecmp($percent,'')&&strcasecmp($paid_by,''))
		{
			$ret = $rpayment->insert_payment($_SESSION['user_id'], $tution,$bwt,$percent,$paid_by,$paid_for,$payment_unit);	
		}
	}
	if($ret)
	{
		forward('../register/lesson.php');	
	}
}
?>