
<?php 
require_once('../../control/schedule/cprev.php');
$rschedule = new Rschedule();
$rschedule->make_look_up();
$t = $rschedule->make_schedule12();
//print_r($t);
$ret = $rschedule->get_temp_shcedule();
//print_r($ret);
$cntU = count($ret['user_id']);
echo "<table border=\"1\">";
echo "<tr><td>call name</td><td>last name </td><td> lesson type</td><td> lesson name</td><td>max member</td><td>Start Time</td><td></td></tr>";
for($i=0;$i<$cntU;$i++)
{
	
  echo "<tr>";
   echo " <td>".$ret['call_name'][$i]."</td><td> ".$ret['last_name'][$i]."</td><td> ".$ret['lesson_type'][$i]." </td><td>".$ret['lesson_name'][$i]."</td><td>  ".$ret['max_member'][$i]."</td><td>".$ret['start_time'][$i]."</td>";
  echo "</tr>";
  
	
}
echo  "</table>";
echo "list of unassigned users: ";
echo "<table border = \"1\">";
echo "<tr>";
echo "<td>Call Name </td><td>Last Name</td>";
for($i=0;$i<count($t);$i++)
{
	$b = $rschedule->get_user_info_by_id($t[$i]);
	echo "<tr>";
	echo "<td>".$b['call_name'][0]." </td><td>".$b['last_name'][0]."</td>";
	echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>