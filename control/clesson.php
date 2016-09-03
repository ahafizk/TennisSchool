<?php

	require_once('../../model/register/Rlesson.php');
	require_once('../../common/forwarding.php');
	if(isset($_POST['lesson']) && !strcasecmp($_POST['lesson'],'voegen les'))
	{
		$lesson_type =$_POST['lesson_type'];
		$lesson_name =$_POST['lesson_name'];
		$description =$_POST['description'];
		$num_lesson =$_POST['num_lesson'];
		$num_free_play =$_POST['num_free_play'];
		$duration =$_POST['duration'];
		
		$rlesson = new Rlesson();
		$ret = $rlesson->insert_lesson($lesson_type,$lesson_name,$description,$num_lesson,$num_free_play,$duration);
		//if($ret)echo 'successfull';
	}
	//echo 'hel';
	
?>