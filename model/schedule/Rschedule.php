<?php
//require_once('../../db/Database.php');
require_once('../../db/Database.php');
class Rschedule
{
	private $db;
	function Rschedule()
	{
		$this->db = new Database();
	}//end of constructor
	
	function insert_into_look_up($start_time,$end_time,$duration,$group_id,$lesson_id,$week_day,$max_member,$available_member,$location,$location_name)
	{
		$sql = "insert into look_up (start_time,end_time,duration,group_id,lesson_id,week_day,max_member,available_member,location,location_name) values($start_time,$end_time,$duration,$group_id,$lesson_id,$week_day,$max_member,$available_member,'$location','$location_name')";	
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function get_user_info_by_id($id)
	{
		$sql = "select *from user where id = $id";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['call_name'][$i] = $row['call_name'];
			$result['last_name'][$i] = $row['last_name'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_week_time($lesson_type,$week_day)
	{
		$sql = "select distinct(lt.location) as location,
				lt.start_time, 
				lt.end_time,
				lt.name as location_name 
				from lesson_detail ld , group_info gi, lesson_times lt 
				where 
				ld.id = gi.lesson_detail_id and 
				gi.id = lt.group_info_id and 
				gi.lesson_detail_id = lt.group_info_lesson_detail_id and 
				ld.lesson_type = '$lesson_type' and
				lt.week_day = '$week_day'
				
				order by lt.start_time";
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['week_day'][$i] = $row['week_day'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			
			
			
			
			$i++;	
		}
		//print_r($result);
			//print_r($ret);
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_week_day($lesson_type)
	{
		$sql = "select distinct(lt.week_day) as week_day ,
				lt.start_time, 
				lt.end_time,
				lt.location,
				lt.name as location_name 
				from  lesson_detail ld , group_info gi, lesson_times lt 
				where ld.id = gi.lesson_detail_id and 
				gi.id = lt.group_info_id and 
				gi.lesson_detail_id = lt.group_info_lesson_detail_id and 
				ld.lesson_type = '$lesson_type' 
				order by week_day";
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['week_day'][$i] = $row['week_day'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			
			$i++;	
		}
		//print_r($result);
			//print_r($ret);
			$this->db->disconnect($link);
		return $result;	
	}
	
	
	function get_day_location_time($lesson_type)
	{
		$sql = "select ld.id as lesson_id, 
				ld.lesson_type,
				ld.name as lesson_name,
				ld.num_lesson, 
				ld.duration_per_lesson, 
				ld.age_group,
				gi.max_group_member as member, 
				lt.week_day ,
				lt.start_time, 
				lt.end_time,
				lt.location,
				lt.name as location_name 
				from lesson_detail ld , group_info gi, lesson_times lt 
				where 
				ld.id = gi.lesson_detail_id and 
				gi.id = lt.group_info_id and 
				gi.lesson_detail_id = lt.group_info_lesson_detail_id and 
				ld.lesson_type = '$lesson_type'";
				
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$result['member'][$i] = $row['member'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['week_day'][$i] = $row['week_day'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			
			
			
			
			$i++;	
		}
		//print_r($result);
			//print_r($ret);
			$this->db->disconnect($link);
		return $result;	
	}
	
	//return selected times for a particular day for a user.
	function get_user_time_pref_Time($user_id,$week_day)
	{
		$sql = "select day_time from user_time_pref where user_id = $user_id and week_day = $week_day";	
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['day_time'][$i] =  $row['day_time'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_user_time_by_week_day($week_day,$user_id) //user time prefereance table
	{
		$sql = 	"select user_id, week_day, day_time from user_time_pref where week_day = $week_day and user_id = $user_id order by day_time";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['day_time'][$i] =  $row['day_time'];
			$result['week_day'][$i] = $row['week_day'];
			$i++;
		}
		$this->db->disconnect($link);
		//print_r($result);
		//echo "<br/>";
		return $result;	
	}
	function get_lessons()
	{
		$sql = "select *from lesson_detail";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['name'][$i] = $row['name'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	function get_lesson_by_id($lesson_id)
	{
		$sql = "select *from lesson_detail where id = $lesson_id";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['name'][$i] = $row['name'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function make_user_time_range11($week_day,$user_id)
	{
		$start = array();
		$end = array();
		$result = $this->get_user_time_by_week_day($week_day,$user_id);
		$cnt = count($result['user_id']);
		
		$k =0;
		$temp=0;
		for($i=0;$i<$cnt;$i++)
		{
			$s1 =  $result['day_time'][$i];
			$s2 =  $result['day_time'][($i+1)];
			if($i==0)
			{
				$s = $result['day_time'][$i];
				$temp = $s;
						
			}
			else if(($s2-$s1)>0 && ($s2-$s1)<=1)
			{
				$temp += $s2-$s1;	
			}
			else 
			{
				$start[$k] = $s;
				$end[$k] = $temp;
				$s = $result['day_time'][$i];
				$temp = $s;
				$k++;
			}
			if(($i+1)==$cnt)
			{
				$start[$k] = $s;
				$end[$k] = $temp;
			}
		}//end of for
		$a = array();
		
		$a['start'] = $start;
		$a['end'] = $end;
		return $a;
	}
	// ret = time range of day of a user
	function make_user_time_range($week_day,$user_id)
	{
		$start = array();
		$end = array();
		$result = $this->get_user_time_by_week_day($week_day,$user_id);
		$cnt = count($result['user_id']);
		
		$k =0;
		$temp=0;
		for($i=0;$i<$cnt;$i++)
		{
			if($i==0)
			{
				$s = $result['day_time'][$i];
				$temp = $s;
				if(($i+1<$cnt) && ($result['day_time'][$i+1]-$result['day_time'][$i])<=1 && ($result['day_time'][$i+1]-$result['day_time'][$i])>0)
				{
					$temp += $result['day_time'][$i+1]-$result['day_time'][$i];	
				}
				else 
				{
					$temp = $s+1;
				}
			}
			
			else if($temp == $result['day_time'][$i])
			{
				$temp = $temp +1;	
			}
			else 
			{
				$start[$k] = $s;
				$end[$k] = $temp;
				$s = $result['day_time'][$i];
				$temp = $s+1;
				$k++;
			}
			if(($i+1)==$cnt)
			{
				$start[$k] = $s;
				$end[$k] = $temp;
			}
		}//end of for
		$a = array();
		
		$a['start'] = $start;
		$a['end'] = $end;
		return $a;
	}
	
	//ret time interval between start_time and end_time
	function find_time_slot($start, $end, $start_time, $end_time) //it returns hours
	{
		$interval = -1;//default for no match
		if(($start< $start_time)&&($end< $start_time))//out of range
		{
			$interval = -1;	
		}
		else if(($start> $end_time)&&($end> $end_time))//out of range
		{
			$interval = -1;	
		}
		else if($start<=$start_time)
		{
			if($end<=$end_time)
			{
				$interval = $end - $start_time;	
			}
			else if($end>$end_time)
			{
				$interval = $end_time - $start_time;
			}
		}
		else if($start>$start_time && $start<$end_time)
		{
			if($end<=$end_time)
			{
				$interval = $end - $start;
			}
			else if($end>$end_time)
			{
				$interval = $end_time - $start;
			}
		}
		return $interval;
	}
	
	function get_prev_info_for_lookup()
	{
		$sql = "select lt.location, 
				lt.name as location_name,
				lt.start_time , 
				lt.end_time,
				lt.week_day,
				ld.duration_per_lesson as duration,
				gi.id as group_id,
				ld.id as lesson_id,
				gi.max_group_member as max_member 
				from lesson_times lt, group_info gi, lesson_detail ld 
				where ld.id = gi.lesson_detail_id and 
				gi.id = lt.group_info_id and 
				lt.group_info_id not in (select group_id from look_up) and 
				gi.lesson_detail_id = lt.group_info_lesson_detail_id 
				order by lt.start_time,ld.id ";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['week_day'][$i] = $row['week_day'];
			$result['duration'][$i] = $row['duration'];
			$result['max_member'][$i] = $row['max_member'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] =  $row['location_name'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['duration'][$i] = $row['duration'];
			$result['max_member'][$i] = $row['max_member'];
			//$result[''][$i]
			$i++;
		}
		$this->db->disconnect($link);
		//print_r($result);
		//echo "<br/>";
		return $result;
	}
	
	function make_look_up()
	{
		$tolarence = 0; // it up to the manager.
		$result = $this->get_prev_info_for_lookup();
		
		$cntR = count($result['group_id']);
		//echo $cntR;
		for($i=0;$i<$cntR;$i++)
		{
			$duration = $result['duration'][$i];
			$start = (int)($result['start_time'][$i] *100);
			$end = (int)($result['end_time'][$i]);
			
			$si =(int) $start/100;
			$sf = $start%100;
			
			$ei =(int) $end/100;
			$ef = (int)$end%100;
			
			$rm = ((int)$duration) %60;
			$ipart =(int) ($duration / 60);
			
			$next = $si + $ipart + (int)(($sf+$rm)/60) + (($sf+$rm)%60)/100;
			//echo $end;
			//echo $next;
			$s = $start/100;
			//echo $next_d."<br/>";
			//echo $s;
			while($next<=$end)
			{
				
				$this->insert_into_look_up($s,$next,$result['duration'][$i],$result['group_id'][$i],$result['lesson_id'][$i],$result['week_day'][$i],$result['max_member'][$i],0,$result['location'][$i],$result['location_name'][$i]);
				$s = $next;
				//echo $next;
				$next = $next *100;
				$si = (int)($next/100);
				$sf = (int)($next%100);
				$next = $si + $ipart + (int)(($sf+$rm)/60) + (($sf+$rm)%60)/100;
				
				
			}//end of while
		}
	}
	
	//ret user_id from user_lesson_pref where the user is not prescheduled 
	function get_distinct_user_id()
	{
		$sql = "select distinct(user_id)as user_id from user_lesson_pref
				where user_id not in(select distinct user_id from perm_schedule) and 
				user_id not in(select distinct user_id from temp_schedule)";	
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	//return the particular users day and preference  
	function get_particular_user_pref($user_id)
	{
		$sql = "select ul.user_id,
				ul.preference,
				ut.week_day,
				ul.group_id 
				from user_time_pref ut,user_lesson_pref ul
				where ut.user_id = ul.user_id and 
				ul.user_id = $user_id
				order by ul.preference";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['group_id'][$i] = $row['group_id'];
			$result['preference'][$i] = $row['preference'];
			$result['week_day'][$i] = $row['week_day'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	//ret look_up info using group_id
	function get_look_up_info($group_id,$week_day)
	{
		$sql = "select * 
				from look_up 
				where group_id = $group_id and
				week_day = $week_day and
				available_member < max_member
				order by start_time";
				
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['duration'][$i] = $row['duration'];
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['week_day'][$i] = $row['week_day'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_look_up_by_id($id)
	{
		$sql = "select *from look_up where id = $id";	
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['duration'][$i] = $row['duration'];
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['week_day'][$i] = $row['week_day'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
		
	}
	
	function check_available($start,$end, $start_time, $end_time)
	{
		if(($start>=$start_time && $start<$end_time)&& ($end>$start_time && $end<=$end_time)&&($end-$start)>0)
		{
			return true;	
		}
		else return false;
	}
	
	function update_lookup_availableMember($lookup_id,$member)
	{
		$sql = sprintf("select *from look_up where id = %d",$lookup_id);
		
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['available_member'][$i] = $row['available_member'];
			$i++;
		}
		$this->db->disconnect($link);
		//echo $result['available_member'][0];
		$total_member = $result['available_member'][0] + $member;
		$sql = "update look_up set available_member = $total_member where id = $lookup_id";	
		$ret = $this->db->process_query($sql);
		
		return $ret;
	}
	
	function insert_temp_schedule($user_id,$lookup_id)
	{
		$sql = sprintf("insert into temp_schedule(user_id,lookup_id)values(%d,%d)",$user_id,$lookup_id);
		$ret = $this->db->process_query($sql);
		if($ret)$this->update_lookup_availableMember($lookup_id,1);//update the lookup table
		return $ret;
	} 
	
	function make_schedule()
	{
		$flag = false;
		$lid = -1;
		$unassigned = array();
		$ui = 0;//unassigned user count
		$dist_userid = $this->get_distinct_user_id(); // get the distinct user id which is not schedule before.
		
		$cntDU = count($dist_userid['user_id']);
		//now for each user get the preference 
		for($i=0; $i<$cntDU; $i++)
		{	
			$flag = false;
			$user_pref = $this->get_particular_user_pref($dist_userid['user_id'][$i]); // now get the user's preference
			//$partner_pref = $this->get_user_pref_info($dist_userid['user_id'][$i]); // get the partners
			$user_id = $dist_userid['user_id'][$i];
			$cntP = count($user_pref['preference']);
			//now check for availability and assign him in a group
			for($j=0;$j<$cntP;$j++)
			{
				if($flag == true) break;
				$time_range = $this->make_user_time_range($user_pref['week_day'][$j],$user_pref['user_id'][$j]);
				$look_info = $this->get_look_up_info($user_pref['group_id'][$j],$user_pref['week_day'][$j]);
				$cntLi = count($look_info['group_id']);
				$cntT = count($time_range['start']);

				for($k=0;$k<$cntT;$k++) // now check the availablity
				{
					if($cntLi==0)$flag = true;
					if($flag==true)break;

					for($z=0;$z<$cntLi;$z++)
					{
						
						if($this->check_available($look_info['start_time'][$z],$look_info['end_time'][$z], $time_range['start'][$k], $time_range['end'][$k]))
						{
							$lookup_id =  $look_info['id'][$z];
							//
							$this->insert_temp_schedule($user_id,$lookup_id);
							$flag = true;
							break;
						}
						
						
					}//end of z for
					
				}//end of k for
				
			}//end of j for
			if($flag==false)
			{
				$unassigned[$ui] =  $dist_userid['user_id'][$i];
				$ui++;
			}
		}
		return $unassigned;
	}//end of function
	
	function check_not_interested_partners($not_desired,$lookup_id)
	{
		$sql = sprintf("select user_id from temp_schedule where $lookup_id = %d",$lookup_id);
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$i++;
		}
		
		$sql = sprintf("select user_id from perm_schedule where $lookup_id = %d",$lookup_id);
		
		$ret = $this->db->process_query($sql);
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$i++;
		}
		//now match with the not desired partners
		$flag = false;
		$pt = count($not_desired);
		for($j=0;$j<$pt;$j++)
		{
			for($k=0;$k<$i;$k++)
			{
				if($not_desired[$j]==$result['user_id'][$k])
				{
					$flag = true;
					break;
				}
			}
			if($flag==true)break;
		}
		$this->db->disconnect($link);
		return $flag;
	}
	
	function make_schedule12()
	{
		$flag = false;
		$lid = -1;
		$unassigned = array();
		$ui = 0;//unassigned user count
		$dist_userid = $this->get_distinct_user_id(); // get the distinct user id which is not schedule before.
		
		$cntDU = count($dist_userid['user_id']);
		//now for each user get the preference 
		for($i=0; $i<$cntDU; $i++)
		{	
			$flag = false;
			$user_pref = $this->get_particular_user_pref($dist_userid['user_id'][$i]); // now get the user's preference
			$cntP = count($user_pref['preference']);
			
			$user_id = $dist_userid['user_id'][$i];
			
			//get user partner preference
			$partner_pref = $this->get_user_pref_info($dist_userid['user_id'][$i]); // get the partners
			$cntPt = count($partner_pref['call_name']); // count how many partner he prefered
			$not_desired = array(); //contains the user id which he is not interested;
			$dt = 0;
			
			for($pt =0;$pt<$cntPt;$pt++)
			{
				$partner_ids = $this->get_user_id_by_callName_lastName($partner_pref ['call_name'][$pt], $partner_pref['last_name'][$pt] ); // get the partners id
				$cntptID = count($partner_ids['user_id']);
				$desired = $partner_pref['desired'][$pt];
				
				for($ids =0 ;$ids<$cntptID;$ids++)
				{
					if(!strcasecmp($desired,'N'))
					{
						$not_desired[$dt] = $partner_ids['user_id'][$ids]; // the users whom he is not interested to group
						$dt++;
					}
					else if($desired=='Y' || $desired=='O') // whome he is interested
					{
						$tmp_sch = $this->check_partner_already_temp_scheduled($partner_ids['user_id'][$ids]);
						$perm_sch = $this->check_partner_already_perm_scheduled($user_id);
						if(count($tmp_sch['user_id'])>0)
						{
							$lookup_id = $tmp_sch['lookup_id'][0]; // one person only assigns to one groups
							$start_time = $tmp_sch['start_time'][0];
							$end_time = $tmp_sch['end_time'][0];
							for($up=0;$up<$cntP;$up++)// user time preference loop
							{
								//now make the time range for the user 
								$time_range = $this->make_user_time_range($user_pref['week_day'][$up],$user_pref['user_id'][$up]);
								$cntT = count($time_range['start']);
								for($ct=0;$ct<$cntT;$ct++) // now check the availablity
								{
									if($this->check_available($start_time,$end_time, $time_range['start'][$ct], $time_range['end'][$ct]))
									{
										$this->insert_temp_schedule($user_id,$lookup_id);
										$flag = true;
										break;
									}
								}
								if($flag==true)break;
							}//end of for
							//$this->insert_temp_schedule($user_id,$lookup_id);
						}//end of if
						else if(count($perm_sch['user_id']))
						{
							$lookup_id = $perm_sch['lookup_id'][0]; // one person only assigns to one groups
							$start_time = $perm_sch['start_time'][0];
							$end_time = $perm_sch['end_time'][0];
							for($up=0;$up<$cntP;$up++)// user time preference loop
							{
								//now make the time range for the user 
								$time_range = $this->make_user_time_range($user_pref['week_day'][$up],$user_pref['user_id'][$up]);
								$cntT = count($time_range['start']);
								for($ct=0;$ct<$cntT;$ct++) // now check the availablity
								{
									if($this->check_available($start_time,$end_time, $time_range['start'][$ct], $time_range['end'][$ct]))
									{
										$this->insert_temp_schedule($user_id,$lookup_id);
										$flag = true;

										break;
									}
								}
								if($flag == true)break;
							}//end of for
						}//end of else if
						
					}//end of else
					if($flag == true) break;
				}//end of partners ids for
				if($flag == true) break;
			}//end of partners preference for
			
			//if($flag==true )echo 'hi';
		//	print_r($not_desired);
			//this is normal grouping
			//now check for availability and assign him in a group
			for($j=0;$j<$cntP;$j++)
			{
				if($flag == true) break;
				$time_range = $this->make_user_time_range($user_pref['week_day'][$j],$user_pref['user_id'][$j]);
				$look_info = $this->get_look_up_info($user_pref['group_id'][$j],$user_pref['week_day'][$j]);
				$cntLi = count($look_info['group_id']);
				$cntT = count($time_range['start']);
				//$not_desired;
				for($k=0;$k<$cntT;$k++) // now check the availablity
				{
					//if($cntLi==0)$flag = true;
					if($flag==true)break;

					for($z=0;$z<$cntLi;$z++)
					{
						
						if($this->check_available($look_info['start_time'][$z],$look_info['end_time'][$z], $time_range['start'][$k], $time_range['end'][$k]))
						{
							$lookup_id =  $look_info['id'][$z];
							if(count($not_desired)>0)
							{
								//print_r($not_desired);
								$fl = false;
								$fl = $this->check_not_interested_partners($not_desired,$lookup_id);
								if($fl==true) {$flag = false;continue;}
							}
							
							$this->insert_temp_schedule($user_id,$lookup_id);
							$flag = true;
							break;
						}
						
						
					}//end of z for
					
				}//end of k for
				
			}//end of j for
			//if($flag==true )echo 'hi';
			if($flag==false)
			{
				$unassigned[$ui] =  $dist_userid['user_id'][$i];
				$sql = sprintf("select user_id from waiting_list where user_id =%d",$dist_userid['user_id'][$i]);
				$ret = $this->db->process_query($sql);
				$link = $this->db->connect();
				$result = 0;
				
				while($row = mysql_fetch_array($ret))
				{
					$result = $row['user_id'];
				}
				if($result<=0)
				{
					$sql = sprintf("insert into waiting_list(user_id)values(%d)",$dist_userid['user_id'][$i]);
					$ret = $this->db->process_query($sql);
				}
				$this->db->disconnect($link);
				$result =0;
				$ui++;
				
			}
		}
		return $unassigned;
	}//end of function
	
	function get_temp_shcedule() //using user group max member
	{
		$sql = "select u.initial, 
				u.middle_name, 
				u.last_name,
				u.call_name,
				u.gender,
				u.date_of_birth,
				ts.user_id,
				lu.start_time,
				lu.end_time,
				lu.duration,
				lu.max_member,
				lu.available_member,
				ld.lesson_type,
				ld.name as lesson_name,
				ld.num_lesson,
				ld.age_group
				from temp_schedule ts,look_up lu,user u,lesson_detail ld
				where lu.id = ts.lookup_id and u.id = ts.user_id and ld.id = lu.lesson_id";	
		 $ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['available_member'][$i] = $row['available_member'];
			$result['initial'][$i] = $row['initial'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['call_name'][$i] = $row['call_name'];
			$result['gender'][$i] = $row['gender'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$result['user_id'][$i] = $row['user_id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['duration'][$i] = $row['duration'];
			$result['max_member'][$i] = $row['max_member'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	// ret user_id
	function get_user_id_by_callName_lastName($callname, $lastname)// get the user id for user_partner preference
	{
		$sql = sprintf("select id  from user where call_name = '%s' and last_name='%s'",$callname,$lastname);
		
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		
		$result = array();
		$i =0;
		
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['id'];
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	
	//get partners call_name , last_name from user_partner_pref table
	function get_user_pref_info($user_id)
	{
		$sql = "select * from user_partner_pref where user_id = $user_id";
		
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		
		$result = array();
		$i =0;
		
		while($row = mysql_fetch_array($ret))
		{
			$result['call_name'][$i] = $row['call_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['desired'][$i] = $row['desired'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['sex'][$i] = $row['sex'];
			$result['birth_date'][$i] = $row['birth_date'];
			$result['street '][$i] = $row['street '];
			$result['house_num'][$i] = $row['house_num'];
			$result['post_code'][$i] = $row['post_code'];
			$result['location'][$i] = $row['location'];
			$result['telephone 	'][$i] = $row['telephone'];
			$result['mobile'][$i] = $row['mobile'];
			$result['email'][$i] = $row['email'];
			$result['bond_num '][$i] = $row['bond_num '];
			$result['level_skill'][$i] = $row['level_skill'];
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	
	function check_partner_already_temp_scheduled($user_id)
	{
		$sql = "select ts.user_id,
				ts.lookup_id,
				lu.start_time,
				lu.end_time
				from temp_schedule ts, look_up lu
				where user_id = $user_id and 
				lu.id = ts.lookup_id and lu.available_member < lu.max_member";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		
		$result = array();
		$i =0;
		
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['lookup_id'][$i] = $row['lookup_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function check_partner_already_perm_scheduled($user_id)
	{
		$sql = "select ps.user_id,
				ps.lookup_id,
				lu.start_time,
				lu.end_time
				from perm_schedule ps, look_up lu
				where user_id = $user_id and 
				lu.id = ps.lookup_id and lu.available_member < lu.max_member";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		
		$result = array();
		$i =0;
		
		while($row = mysql_fetch_array($ret))
		{
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['user_id'][$i] = $row['user_id'];
			$result['lookup_id'][$i] = $row['lookup_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
}//end of class

//$rs = new Rschedule();
//$a = $rs->get_user_time_pref_Time(1,1);
//$a = $rs->make_user_time_range(1,1);
//print_r($a);
//echo "<br/>";
//$us = $rs->make_schedule();
//print_r($us);
//print_r( ($rs->make_schedule()));
//print_r( $rs->make_look_up());
?>