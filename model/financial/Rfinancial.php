<?php
require_once('../../db/Database.php');
class Rfinancial
{
	private $db;
	function Rfinancial()
	{
		$this->db = new Database();
	}
	function insert_user_payment($table,$coloums)
	{
		$ret = $this->db->insert($table,$coloums);
		return $ret;
	}
	function update_user_payment($table_name,$coloums,$condition)
	{
		$ret = $this->db->update($table_name,$coloums,$condition);
		return $ret;	
	}
	function delete_user_payment($id)
	{
		$sql = "delete from adminuser where id = $user_id";
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_payment_record($start=1, $end=15,$sidx="initial" ,$sord='desc')
	{
		$sql = "select 
				u.call_name,
				u.initial,
				u.last_name,
				u.middle_name,
				u.gender,
				p.payment_id,
				p.issuer,
				p.country,
				p.language,
				p.currency,
				p.amount,
				p.pay_date,
				p.payment_type,
				p.payment_status
				from user_payment p, user u
				where p.user_id = u.id and p.payment_status ='OK'
				order by $sidx $sord  limit $start,$end ";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['gender'][$i] = $row['gender'];
			$result['payment_id'][$i] = $row['payment_id'];
			$result['issuer'][$i] = $row['issuer'];
			$result['country'][$i] = $row['country'];
			$result['language'][$i] = $row['language'];
			$result['currency'][$i] = $row['currency'];
			$result['pay_date'][$i] = $row['pay_date'];
			$result['payment_type'][$i] = $row['payment_type'];
			$result['payment_status'][$i] = $row['payment_status'];
			$result['amount'][$i] = $row['amount'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_total_financial()
	{
		$sql = "select 
				count(payment_id) as total
				from user_payment where payment_status = 'OK'";	
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_total_unpaid()
	{
		$sql ="select
				count(user_id) as total
				from temp_schedule as ts
				where ts.user_id not in(select user_id from user_payment)";	
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
	function get_unpaid_list($start=1, $end=15,$sidx="user_id" ,$sord='desc')
	{
		$sql = "select
				u.id as user_id,
				u.initial,
				u.call_name,
				u.middle_name,
				u.last_name,
				u.gender,
				ld.lesson_type,
				ld.name as lesson_name,
				lu.max_member,
				lu.available_member,
				lu.location,
				lu.location_name,
				lf.tution_fees,
				lf.payment_unit,
				lf.pay_for,
				lf.vat,
				lf.collection_date,
				lf.tution_fee_collection
				from temp_schedule ts,user u,look_up lu,lesson_detail ld,group_info g,lesson_finance lf
				where ts.user_id not in(select user_id from user_payment)and 
				u.id = ts.user_id and 
				ts.lookup_id = lu.id and 
				lu.lesson_id = ld.id and 
				lu.group_id = g.id and 
				g.lesson_detail_id = ld.id and 
				lf.lesson_id = lu.lesson_id and 
				lf.group_id = lu.group_id and 
				lf.lesson_id = ld.id and
				lf.group_id = g.id and
				ts.confirm = 1
				order by $sidx $sord  limit $start,$end ";
				
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['gender'][$i] = $row['gender'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['tution_fees'][$i] =  $row['tution_fees'];
			$result['tution_fee_collection'][$i] = $row['tutiion_fee_collection'];
			$result['pay_for'][$i] = $row['pay_for'];
			$result['collection_date'][$i] = $row['collection_date'];
			$result['vat'][$i] = $row['vat'];
			$result['payment_unit'][$i] = $row['payment_unit'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
				
	}
	function get_user_payment()
	{
		$sql = "select 
				distinct(u.id) as user_id,
				u.initial,
				u.call_name,
				u.middle_name,
				u.last_name
				from user u, user_payment p
				where u.id = p.user_id and p.user_id not in(select p.user_id from user_payment where LOWER(p.payment_status) =LOWER('OK')) 
				";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_total_amount()
	{
		$sql = "select 
				sum(amount) as total
				from user_payment
				where LOWER(payment_status) = LOWER('OK')
				";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			if($row['total']>0)
			$result = $row['total'];
		
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	function get_paid_total_student()
	{
		$sql = "select
				count(distinct(user_id)) as total
				from user_payment
				where  LOWER(payment_status) = LOWER('OK')";	
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_unpaid_student()
	{
		$sql = "select 
				count(user_id) as total
				from temp_schedule
				where confirm = 1 and 
				user_id not in (select user_id from user_payment where LOWER(payment_status) = LOWER('OK'))
				";	
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_unpaid_amount()
	{
		$sql = "select 
				sum(tution_fees) as total,sum(vat) as vat
				from temp_schedule ts,look_up lu, group_info g,lesson_finance lf
				where ts.lookup_id = lu.id and lu.group_id = g.id and lu.lesson_id = lf.lesson_id and lu.group_id = lf.group_id
				and g.lesson_detail_id = lu.lesson_id and ts.user_id not in(select user_id from user_payment where LOWER(payment_status) = LOWER('OK'))
				";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			if($row['total']>0)
			$result['total'] = $row['total'];
			else $result['total'] = 0;
			if($row['vat']>0)
			$result['vat'] = $row['vat'];
			else $result['vat'] = 0;		
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_notOK_total()
	{
		$sql ="select
				count(user_id)as total
				from user_payment
				where user_id not in (select user_id from user_payment where LOWER(payment_status) = LOWER('OK'))
				";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['total'];
		
			$i++;
		}
		$this->db->disconnect($link);
		return $result;		
		
	}
	function get_notOK_status($start=1, $end=15,$sidx="user_id" ,$sord='desc')
	{
		$sql = "select
				u.id as user_id,
				u.call_name,
				u.initial,
				u.middle_name,
				u.last_name,
				p.payment_id,
				p.amount,
				p.pay_date,
				p.payment_status
				from user u, user_payment p
				where p.user_id = u.id  and 
				p.user_id not in (select user_id from user_payment where LOWER(payment_status) = LOWER('OK'))
				order by $sidx $sord  limit $start,$end ";	
				
				
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			//$result['gender'][$i] = $row['gender'];
			$result['payment_id'][$i] = $row['payment_id'];
			//$result['issuer'][$i] = $row['issuer'];
			//$result['country'][$i] = $row['country'];
			//$result['language'][$i] = $row['language'];
			//$result['currency'][$i] = $row['currency'];
			$result['pay_date'][$i] = $row['pay_date'];
			//$result['payment_type'][$i] = $row['payment_type'];
			$result['payment_status'][$i] = $row['payment_status'];
			$result['amount'][$i] = $row['amount'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_user_status($user_id)
	{
		$sql = "select 
				user_id,
				payment_id,
				payment_status,
				currency,
				amount,
				pay_date,
				payment_type,
				payment_reference
				from user_payment
				where user_id = $user_id order by payment_status asc
				";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['user_id'];
			$result['payment_id'][$i] = $row['payment_id'];
			$result['payment_status'][$i] = $row['payment_status'];
			$result['amount'][$i] = $row['amount'];
			$result['payment_type'][$i] = $row['payment_type'];
			$result['payment_reference'][$i] = $row['payment_reference'];
			$result['pay_date'][$i] = $row['pay_date'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function update_status($payment_id,$user_id,$status,$amount)
	{
		$sql= "update user_payment set
				payment_status = 'OK',
				amount = $amount
				where payment_id = '$payment_id' and user_id = $user_id and LOWER(payment_status) = LOWER('$status')
				";	
		$ret = $this->db->process_query($sql);
		return $ret;
	}
}

?>