<?php
	require_once('../../model/register/Ruser.php');
	require_once('../../model/register/Raddress.php');
	$ruser = new Ruser();
	$raddress = new Raddress();
	
	$inactive_user = $ruser->get_user_inactive(); // get the newly register user.
	$active_user = $ruser->get_user_active(); // get the old user who have already scheduled
	$_SESSION['inactive_user'] = $inactive_user;
	$inUserCount = $ruser->get_total_user_inactive();//count the total user
	$inUserCount = count($inactive_user['id']);
	$inactive_address = array();
	for($i=0;$i<$inUserCount;$i++)
	{
		$inactive_address[$i] = $raddress->get_address_by_id($inactive_user['id'][$i]);
	}
	$acUserCount = count($active_user['id']);
	$active_address = array();
	for($i=0;$i<$acUserCount;$i++)
	{
		$active_address[$i] = $raddress->get_address_by_id($active_user['id'][$i]);
	}
	//print_r($inactive_address);
	//print_r($inactive_address);
	/*
	 <?php
                          if($inUserCount>=1)
                          	echo "<label>totaal nieuw lid:&nbsp;</label>$inUserCount<br/>";
						  else echo "There are no new Member!<br/>"; 
						  if($inUserCount>=1)
						  {
							  echo "<label>nieuwe leden:</label>";
							  echo "<select name='user_id'>";
							  echo "<option value=\"-1\" selected=\"selected\">selecteren</option>";
							  for($i=0;$i<$inUserCount;$i++)
							  {
							  	echo "<option value=\"".$inactive_user['id'][$i]."\">".$inactive_user['first_name'][$i]." ".$inactive_user['last_name'][$i]."</option>";
							  }
							  echo "<br/>";
						  }
						  
						  if($acUserCount>=1)
                          	echo "<label>totaal nieuw lid:&nbsp;</label>$inUserCount<br/>";
						  else echo "There are no new Member!<br/>"; 
						  if($acUserCount>=1)
						  {
							  echo "<label>nieuwe leden:</label>";
							  echo "<select name='user_id'>";
							  echo "<option value=\"-1\" selected=\"selected\">selecteren</option>";
							  for($i=0;$i<$acUserCount;$i++)
							  {
							  	echo "<option value=\"".$active_user['id'][$i]."\">".$active_user['first_name'][$i]." ".$active_user['last_name'][$i]."</option>";
							  }
							  echo "<br/>";
						  }
						  ?>
	*/

?>