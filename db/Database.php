<?php
class Database
{
		//here declare the connection variables
		private $DBUSER ="";
		private $DBPASS="";
		private $DBHOST="";
		private $DBNAME="";
		private $conn = false;
		
	  function Database()

		{

			$this->DBUSER = 'root';

			$this->DBPASS = '123456';

			$this->DBHOST = 'localhost';

			$this->DBNAME = "sports";

			

		}//end of the constructor default constructor
		function connect()
  		{
   			
    		$this->conn = mysql_connect($this->DBHOST, $this->DBUSER, $this->DBPASS);//return a connection identifier.
			if (!$this->conn) 
			{
   				die('Not connected : ' . mysql_error());
			}

			return $this->conn;
		}
		function dbselect($conn) //return true on success or false on failure
		{
		
			$db_selected = mysql_select_db($this->DBNAME, $conn);
			if (!$db_selected) 
			{
   				die ('Can\'t use foo : ' . mysql_error());
			}
			
			return $db_selected;

		}
		function disconnect($link) //ret true on success or false on failure
  		{
    		return mysql_close($link);
  		}
		
		function insert($table_name=NULL ,$coloums=NULL)
		{
			$str = "insert into ".$table_name." ( ";
			$count = count($coloums);
			$flag = true;
			
			if($coloums==NULL) {echo "coloums are null";return false;}
			else if($table_name==NULL){echo "Table name is  null";return false;}
		
			$i=1;
			foreach($coloums as $key=>$value)
			{
				$str .= $key;
				if($i!=$count )
				{
					$str .=" , ";
				}
				else 
				{
					$str .=" )";	
				}
				
				$i++;
			//$str .=	$coloums['']
			}
			$str .= " values ( ";
			$i=1;
			foreach($coloums as $key=>$value)
			{
				if(is_numeric($value))$str .=$value;
				else 
				{
				$str .= "'$value'";
				}
				if($i!=$count )
				{
					$str .=" , ";
				}
				else 
				{
					$str .=" )";	
				}
				
				$i++;
			//$str .=	$coloums['']
			}
		//print_r( $str);
			$ret = $this->process_query($str);
			return $ret;
		}
		
		function update($table_name=NULL,$coloums=NULL,$conditions=NULL)
		{
			$str = "update ".$table_name." set ";
			$count = count($coloums);
			$flag = true;
			
			if($coloums==NULL) {echo "coloums are null";return false;}
			else if($table_name==NULL){echo "Table name is  null";return false;}
		
			$i=1;
			foreach($coloums as $key=>$value)
			{
				if(is_numeric($value))
				{
					$str .= $key ." = ".$value;
				}
				else
				{
					$str .= $key ." = "."'$value'";
				}
				if($i!=$count )
				{
					$str .=" , ";
				}
				
				
				$i++;
			//$str .=	$coloums['']
			}
			if($conditions!=NULL)
			{
				$str .= " where ";
				$i=1;
				$count = count($conditions);
				foreach($conditions as $key=>$value)
				{
					if(is_numeric($value))$str .="$key = ".$value;
					else 
					{
					$str .= "$key = "."'$value'";
					}
					if($i!=$count )
					{
						$str .=" and ";
					}
					
					
					$i++;
				//$str .=	$coloums['']
				}
			}
		//print_r( $str);
			$ret = $this->process_query($str);
			return $ret;	
		}
				
		function process_query($sql)
		{
			$link = $this->connect();
			$link_id = $this->dbselect($link);
			$retval = mysql_query( $sql, $link );
			if(! $retval )
			{
  				die('Could not found/insert data: ' . mysql_error());
			}
			$this->disconnect($link);
			return $retval;
			
		}
		
		public function __destruct() 
		{
			unset($this->DBUSER);
			unset($this->DBPASS);
			unset($this->DATABASE);
			unset($this->conn);
		}//end of the destructor
}

?>