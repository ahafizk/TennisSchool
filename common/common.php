<?php
$weekDay = array(1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thusday',5=>'Friday',6=>'Saturday',7=>'Sunday');
function isValidEmail($email)
{
	$reg = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
	if(eregi($reg, $email))
	{
		return true;	
	}
	else return false;
	
}
function getGender($type)
{
	$gender= array('M'=>'Man','W'=>'Woman',''=>'NA');
	return $gender[$type];
}
function getActive($type)
{
	$active = array(1=>'Active',2=>'Inactive');
	return $active[$type];
}

function getSingleSkill($type)
{
	if($type==0)return 'Unknown';
	else if($type==10)return "No Member KNL TB.";
	else return $type;
}
?>