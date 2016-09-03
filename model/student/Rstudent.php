<?php 
require_once('../../db/Database.php');
class Rstudent
{
	private $db ;
	function Rstudent()
	{
		$this->db = new Database();
	}
        function get_announcement(){
            $link = $this->db->connect();
            $sql = "select * from announcement order by created_on desc limit 10";
            $result = $this->db->process_query($sql);
            $link = $this->db->connect();
            $ret = array();
            $i=0;
            while($row = mysql_fetch_array($result))
            {
                $ret[$i]['id'] = $row['id'];
		$ret[$i]['subject'] = $row['subject'];
                $ret[$i]['body'] = $row['body'];
                $ret[$i]['created_on'] = $row['created_on'];
                $ret[$i]['signature'] = $row['signature'];
                $i++;
            }
            $this->db->disconnect($link);
            return $ret;
        }
        
	//insert into user table
        function get_user_profile($user_name){
            $link = $this->db->connect();
            $sql = sprintf("select user.id,user.initial,user.call_name,user.middle_name,user.last_name,user.gender,user.date_of_birth,"
                    . " user.other_detail,user.active,user.user_name,user.password,address.street,address.house_number,address.home_plate,"
                    . "address.post_code,address.telefoon_vast,address.telefoon_mobiel,address.email,address.fax, "
                    . "user_sport_info.id_association, user_sport_info.tb_bonds_nummer,user_sport_info.skill_single,user_sport_info.skill_double"
                    . " from user,address,user_sport_info where user_name = '%s' and user.id=address.user_id and user_sport_info.user_id=user.id",$user_name);
            //echo $sql;
            
            $result = $this->db->process_query($sql);
		$link = $this->db->connect();
		$ret = array();
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$ret['id'][$i] = $row['id'];
			$ret['initial'][$i] = $row['initial'];
			$ret['call_name'][$i] = $row['call_name'];
			$ret['middle_name'][$i] = $row['middle_name'];
			$ret['last_name'][$i] = $row['last_name'];
			$ret['gender'][$i] = $row['gender'];
			$ret['date_of_birth'][$i] = $row['date_of_birth'];
			$ret['other_detail'][$i] = $row['other_detail'];
			$ret['street'][$i] = $row['street'];
			$ret['house_number'][$i] = $row['house_number'];
			$ret['home_plate'][$i] = $row['home_plate'];
			$ret['post_code'][$i] = $row['post_code'];
			$ret['telefoon_vast'][$i] = $row['telefoon_vast'];
			$ret['telefoon_mobiel'][$i] = $row['telefoon_mobiel'];
			$ret['email'][$i] = $row['email'];
			$ret['fax'][$i] = $row['fax'];
			$ret['id_association'][$i] = $row['id_association'];
			$ret['tb_bonds_nummer'][$i] = $row['tb_bonds_nummer'];
			$ret['skill_single'][$i] = $row['skill_single'];
			$ret['skill_double'][$i] = $row['skill_double'];
			$ret['active'][$i] = $row['active'];
				
		}
            $this->db->disconnect($link);
            return $ret;
        }
	function insert_user($initial,$call_name,$middle_name,$last_name, $gender,$date_of_birth,$other_detail)
	{
		$link = $this->db->connect();
		$initial = mysql_real_escape_string($initial);
		$call_name = mysql_real_escape_string($call_name);
		$middle_name = mysql_real_escape_string($middle_name);
		$last_name = mysql_real_escape_string($last_name);
		$gender = mysql_real_escape_string($gender);
		$date_of_birth = mysql_real_escape_string($date_of_birth);
		$other_detail = mysql_real_escape_string($other_detail);
		$this->db->disconnect($link);
		$sql = sprintf("insert into user(initial,call_name,middle_name,last_name,gender,date_of_birth,other_detail) values ('$initial','$call_name','$middle_name','$last_name','$gender','$date_of_birth','$other_detail')");
		//echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	} //end of function insert_user
	
	function insert_address($user_id,$street, $house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax)
	{
		$link = $this->db->connect();
		
		
		$street = mysql_real_escape_string($street);
		$house_number = mysql_real_escape_string($house_number);
		$home_plate = mysql_real_escape_string($home_plate);
		$post_code = mysql_real_escape_string($post_code);
		$telefoon_vast = mysql_real_escape_string($telefoon_vasts);
		$telefoon_mobiel = mysql_real_escape_string($telefoon_mobiel);
		$this->db->disconnect($link);
		$sql = sprintf("INSERT INTO address VALUES (%d,'%s','%s','%s','%s','%s','%s','%s','%s')",$user_id,$street,$house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax);
		//echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	}//insert into address table
	
	function get_user_id($initial,$call_name,$last_name,$gender)
	{
			$ret = false;
			$sql = sprintf("select id from user where initial = '%s' and call_name = '%s' and last_name = '%s' and gender = '%s'",$initial,$call_name,$last_name,$gender);
			//echo $sql;
			$result = $this->db->process_query($sql);
			$link = $this->db->connect();
			while($row = mysql_fetch_row($result))
			{
				$ret = $row[0];
				
			}
			$this->db->disconnect($link);
			return $ret;
	}
	
	function insert_sport_info($user_id,$id_association, $tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation)
	{
		$link = $this->db->connect();
		
		
		$id_association = mysql_real_escape_string($id_association);
		$tb_bonds_nummer = mysql_real_escape_string($tb_bonds_nummer);
		$skill_single = mysql_real_escape_string($skill_single);
		$skill_double = mysql_real_escape_string($skill_double);
		$level = mysql_real_escape_string($level);
		$diploma_certificate = mysql_real_escape_string($diploma_certificate);
		$several_year_had = mysql_real_escape_string($several_year_had);
		$num_year_tennis = mysql_real_escape_string($num_year_tennis);
		$num_year_workout = mysql_real_escape_string($num_year_workout);
		$explanation = mysql_real_escape_string($explanation);
		$this->db->disconnect($link);
		$sql = sprintf("INSERT INTO user_sport_info VALUES (%d,'%s','%s',%d,%d,'%s','%s','%d',%d,%d,'%s')",$user_id,$id_association,$tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation);
		
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function get_user_info($val) //for update information find the user info
	{
            $link = $this->db->connect();
		$arT = array('initial','call_name','middle_name','last_name','gender','date_of_birth','email','active');
		$cnt = count($val);
		$sql = "select u.id,
				u.initial, 
				u.call_name,
				u.middle_name,
				u.last_name, 
				u.gender,
				u.date_of_birth,
				u.other_detail,
				u.active,
				a.street,
				a.house_number,
				a.home_plate,
				a.post_code,
				a.telefoon_vast,
				a.telefoon_mobiel,
				a.email,
				a.fax,
				s.id_association,
				s.tb_bonds_nummer,
				s.skill_single,
				s.skill_double 	
				from user u,address a, user_sport_info s
				where u.id = a.user_id and a.user_id = s.user_id and u.id = s.user_id ";
		
		for($i=0;$i<$cnt;$i++)
		{
			
			if($val[$i]!='')
			{
				$sql .=" and ";
				$sql .= $arT[$i]." LIKE '%".$val[$i]."%'";
			}
		}
//		echo $sql;
//                print_r($val);
		$ret = false;
		$result = $this->db->process_query($sql);
		
		$ret = array();
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$ret['id'][$i] = $row['id'];
			$ret['initial'][$i] = $row['initial'];
			$ret['call_name'][$i] = $row['call_name'];
			$ret['middle_name'][$i] = $row['middle_name'];
			$ret['last_name'][$i] = $row['last_name'];
			$ret['gender'][$i] = $row['gender'];
			$ret['date_of_birth'][$i] = $row['date_of_birth'];
			$ret['other_detail'][$i] = $row['other_detail'];
			$ret['street'][$i] = $row['street'];
			$ret['house_number'][$i] = $row['house_number'];
			$ret['home_plate'][$i] = $row['home_plate'];
			$ret['post_code'][$i] = $row['post_code'];
			$ret['telefoon_vast'][$i] = $row['telefoon_vast'];
			$ret['telefoon_mobiel'][$i] = $row['telefoon_mobiel'];
			$ret['email'][$i] = $row['email'];
			$ret['fax'][$i] = $row['fax'];
			$ret['id_association'][$i] = $row['id_association'];
			$ret['tb_bonds_nummer'][$i] = $row['tb_bonds_nummer'];
			$ret['skill_single'][$i] = $row['skill_single'];
			$ret['skill_double'][$i] = $row['skill_double'];
			$ret['active'][$i] = $row['active'];
				
		}
		//print_r($ret);
		$this->db->disconnect($link); 
		return $ret;	
	}//end of function
	function update_user($initial,$call_name,$middle_name,$last_name, $gender,$date_of_birth,$other_detail,$id)
	{
		$link = $this->db->connect();
		$initial = mysql_real_escape_string($initial);
		$call_name = mysql_real_escape_string($call_name);
		$middle_name = mysql_real_escape_string($middle_name);
		$last_name = mysql_real_escape_string($last_name);
		$gender = mysql_real_escape_string($gender);
		$date_of_birth = mysql_real_escape_string($date_of_birth);
		$other_detail = mysql_real_escape_string($other_detail);
		$this->db->disconnect($link);
		$sql = sprintf("update user set initial='%s',call_name='%s',middle_name='%s',last_name='%s',gender='%s',date_of_birth='%s',other_detail='%s' where id = %d ",$initial,$call_name,$middle_name,$last_name,$gender,$date_of_birth,$other_detail,$id);
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}// update user info
	function update_address($user_id,$street, $house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax)
	{
		$link = $this->db->connect();
		$street = mysql_real_escape_string($street);
		$house_number = mysql_real_escape_string($house_number);
		$home_plate = mysql_real_escape_string($home_plate);
		$post_code = mysql_real_escape_string($post_code);
		$telefoon_vast = mysql_real_escape_string($telefoon_vasts);
		$telefoon_mobiel = mysql_real_escape_string($telefoon_mobiel);
		$this->db->disconnect($link);
		$sql = sprintf("update address set street='%s',house_number='%s',home_plate='%s',post_code='%s',telefoon_vast='%s',telefoon_mobiel='%s',email='%s',fax='%s' where user_id=%d",$street, $house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax,$user_id);
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function update_sport_info($user_id,$id_association, $tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation)
	{
		$link = $this->db->connect();
		
		
		$id_association = mysql_real_escape_string($id_association);
		$tb_bonds_nummer = mysql_real_escape_string($tb_bonds_nummer);
		$skill_single = mysql_real_escape_string($skill_single);
		$skill_double = mysql_real_escape_string($skill_double);
		$level = mysql_real_escape_string($level);
		$diploma_certificate = mysql_real_escape_string($diploma_certificate);
		$several_year_had = mysql_real_escape_string($several_year_had);
		$num_year_tennis = mysql_real_escape_string($num_year_tennis);
		$num_year_workout = mysql_real_escape_string($num_year_workout);
		$explanation = mysql_real_escape_string($explanation);
		$this->db->disconnect($link);
		$sql = sprintf("update user_sport_info set id_association ='%s', tb_bonds_nummer='%s',skill_single=%d,skill_double=%d,level='%s',diploma_certificate='%s',several_year_had=%d,num_year_tennis=%d,num_year_workout=%d,explanation='%s' where user_id = %d",$id_association, $tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation,$user_id);
		$ret = $this->db->process_query($sql);
		return $ret;
	}//end of update sport_info
	
	
	//remove all the information for this user...
	function remove_user($user_id)
	{
		$sql = sprintf("delete from user where id = %d",$user_id);
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function remove_address($user_id)
	{
		$sql = sprintf("delete from address where user_id = %d",$user_id);
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function remove_sport_info($user_id)
	{
		$sql = sprintf("delete from user_sport_info where user_id = %d",$user_id);
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function get_user_temp($user_id)
	{
		$ret = false;
		$sql = "
				select user_id,lookup_id
				from temp_schedule
				where $user_id = user_id
				";
		$ret = $this->db->process_query($sql);
		$result = false;
		if($ret)
		{
		$link = $this->db->connect();
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['lookup_id'];
		}
		$this->db->disconnect($link); 
		}
		return $result;
	}
	
	function get_user_perm($user_id)
	{
		$ret = false;
		$sql = "
				select user_id,lookup_id
				from perm_schedule
				where $user_id = user_id
				";
		$ret = $this->db->process_query($sql);
		$result = false;
		$link = $this->db->connect();
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['lookup_id'];
		}
		$this->db->disconnect($link); 
		return $result;
	}
	
	function user_group_lesson_info($look_up_id)
	{
		$sql = "select lu.id,
				ld.lesson_type,
				ld.name as lesson_name,
				ld.age_group,
				lu.start_time,
				lu.end_time,
				lu.week_day,
				lu.max_member,
				lu.available_member,
				lu.location,
				lu.location_name
				from lesson_detail ld, look_up lu
				where lu.id = $look_up_id and lu.lesson_id = ld.id
				";
		$result = $this->db->process_query($sql);
		$link = $this->db->connect();
		$ret = array();
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$ret['lookup_id'][$i] = $row['id'];
			$ret['lesson_type'][$i] = $row['lesson_type'];
			$ret['lesson_name'][$i] = $row['lesson_name'];
			$ret['start_time'][$i] =$row['start_time'];
			$ret['end_time'][$i] =$row['end_time'];
			$ret['age_group'][$i] = $row['age_group'];
			$ret['week_day'][$i] = $row['week_day'];
			$ret['max_member'][$i] = $row['max_member'];
			$ret['available_member'][$i] = $row['available_member'];
			$ret['location'][$i] = $row['location'];
			$ret['location_name'][$i] = $row['location_name'];
			$ret['lesson_detail'][$i] = $row['lesson_detail'];
			$i++;	
		}
		//print_r($ret);
		$this->db->disconnect($link); 
		
		return $ret;
	}
	
	function get_groups_info()
	{
			$sql = "select lu.id,
				ld.lesson_type,
				ld.name as lesson_name,
				ld.age_group,
				lu.start_time,
				lu.end_time,
				lu.week_day,
				lu.max_member,
				lu.available_member,
				lu.location,
				lu.location_name
				from lesson_detail ld, look_up lu
				where  lu.lesson_id = ld.id
				";
		$result = $this->db->process_query($sql);
		$link = $this->db->connect();
		$ret = array();
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$ret['lookup_id'][$i] = $row['id'];
			$ret['lesson_type'][$i] = $row['lesson_type'];
			$ret['lesson_name'][$i] = $row['lesson_name'];
			$ret['start_time'][$i] =$row['start_time'];
			$ret['end_time'][$i] =$row['end_time'];
			$ret['age_group'][$i] = $row['age_group'];
			$ret['week_day'][$i] = $row['week_day'];
			$ret['max_member'][$i] = $row['max_member'];
			$ret['available_member'][$i] = $row['available_member'];
			$ret['location'][$i] = $row['location'];
			$ret['location_name'][$i] = $row['location_name'];
			$ret['lesson_detail'][$i] = $row['lesson_detail'];
			$i++;	
		}
		//print_r($ret);
		$this->db->disconnect($link); 
		
		return $ret;	
	}
	
	function get_total_temp_schedule()
	{
		$sql = "select count(*) as total from temp_schedule";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_temp_shcedule($start=1, $end=15,$sidx="initial" ,$sord='desc') //using user group max member
	{
		$sql = "select u.initial,
				u.call_name, 
				u.middle_name, 
				u.last_name,
				u.gender,
				a.email,
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
				from temp_schedule ts,look_up lu,user u,lesson_detail ld,address a
				where lu.id = ts.lookup_id and u.id = ts.user_id and ld.id = lu.lesson_id and u.id= a.user_id order by $sidx $sord  limit $start,$end ";
				//echo $sql;
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
			$result['email'][$i] = $row['email'];
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
	
	function getLesson_group()
	{
		$sql = "select distinct(ld.id)as id,
				(ld.name) as lesson_name,
				lu.max_member
				from lesson_detail ld,look_up lu where lu.lesson_id = ld.id";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['max_member'][$i] = $row['max_member'];
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	function getLessonTime($id)
	{
		$sql = "select 
				lu.id as lookup_id,
				(ld.id)as lesson_id,
				(ld.name) as lesson_name,
				ld.lesson_type,
				lu.available_member,
				lu.location,
				lu.location_name,
				lu.start_time,
				lu.end_time,
				lu.week_day,
				lu.max_member
				from lesson_detail ld,look_up lu where lu.lesson_id = ld.id and lu.lesson_id = $id order by lu.week_day";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lookup_id'][$i] = $row['lookup_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['available_member'][$i] = $row['available_member'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			$result['week_day'][$i] = $row['week_day'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['max_member'][$i] = $row['max_member'];
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_temp_user($user_id)
	{
		$sql = "select 
				ts.id as lookup_id
				from temp_schedule ts  where ts.user_id = $user_id";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lookup_id'][$i] = $row['lookup_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function remove_temp_user($user_id)
	{
		$sql = "delete from temp_schedule where user_id = $user_id";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		
		return $ret;	
	}
	function insert_look_up($user_id, $lookup_id)
	{
		$sql = sprintf('insert into temp_schedule(user_id, lookup_id) values(%d,%d)',$user_id,$lookup_id);
		
		
		$ret = $this->db->process_query($sql);
		$sql = sprintf("update look_up set available_member = (available_member+1) where id = $lookup_id");
		$ret = $this->db->process_query($sql);
		//echo $sql;
		return $ret;	
	}
	function update_look_up($lookup_id)
	{
		$sql = "update look_up set available_member= (available_member -1) where id  =$lookup_id ";
		$ret = $this->db->process_query($sql);
		
		return $ret;
	}
	function get_total_student()
	{
		$sql = "select count(id) as total
				from user";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = 0;//''array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		}
		$this->db->disconnect($link);
		return $result;
		
	}
	function get_all_student($start=1, $end=15,$sidx="initial" ,$sord='desc')
	{
		$sql = "select 
				u.id as user_id,
				call_name,
				u.middle_name,
				u.last_name,
				u.initial,
				u.gender,
				u.date_of_birth,
				a.street,
				a.house_number,
				a.home_plate,
				a.email,
				a.telefoon_vast,
				a.telefoon_mobiel
				from user u, address a
				where a.user_id = u.id order by $sidx $sord  limit $start,$end ";	
				$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['call_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['gender'][$i] = $row['gender'];
			$result['street'][$i] = $row['street'];
			$result['house_number'][$i] = $row['house_number'];
			$result['home_plate'][$i] = $row['home_plate'];
			$result['email'][$i] = $row['email'];
			$result['telephone'][$i] = $row['telefoon_vast'];
			$result['mobile'][$i] = $row['telefoon_mobiel'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$result['user_id'][$i] = $row['user_id'];
			/*$result[''][$i] = $row[''];
			$result[''][$i] = $row[''];
			$result[''][$i] = $row[''];
			$result[''][$i] = $row[''];*/
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function count_waiting_list()
	{
		$sql ="select count(id) as total from waiting_list";
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_waiting_list($start=1, $end=15,$sidx="initial" ,$sord='desc')
	{
		$sql="select 
			  u.id as user_id,
			  u.gender,
			  u.initial,
			  u.call_name,
			  u.middle_name,
			  u.last_name,
			  u.date_of_birth,
			  a.email,
			  a.street,
			  a.house_number,
			  a.home_plate,
			  a.post_code,
			  a.telefoon_vast as telephone,
			  a.telefoon_mobiel as mobile,
			  a.fax
			  from waiting_list w,user u,address a
			  where w.user_id = u.id and u.id = a.user_id and w.user_id = a.user_id
			  order by $sidx $sord  limit $start,$end ";
		 $ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['call_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['gender'][$i] = $row['gender'];
			$result['street'][$i] = $row['street'];
			$result['house_number'][$i] = $row['house_number'];
			$result['home_plate'][$i] = $row['home_plate'];
			$result['email'][$i] = $row['email'];
			$result['telephone'][$i] = $row['telefoon_vast'];
			$result['mobile'][$i] = $row['telefoon_mobiel'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$result['user_id'][$i] = $row['user_id'];
			$result['email'][$i] = $row['email'];
			/*$result[''][$i] = $row[''];
			$result[''][$i] = $row[''];
			$result[''][$i] = $row[''];*/
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	/// search student code
}//end of class
?>