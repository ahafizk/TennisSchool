<?php
require_once('../../model/register/Ruser.php');
require_once('../../common/forwarding.php');
//require_once('../../db/Database.php');
class Auth
{
	//private $db;
	private $username;
	private $password;
	private $id;
	private $url;
	private $ruser ;
	private $auth;
	
	function Auth()
	{
		$this->url = "../../view/register/index.php";
		$this->ruser = new Ruser();
		$this->auth = false;
		//echo 'auth';
		
			
	}
	function login($username,$password)
	{
//		echo $username;
//		echo $password;
			
			 // check for possible sql injection - passed value should not contain any space or control char
        if (ctype_alnum($username) && ctype_alnum($password)&& !ctype_space($username) && !ctype_space($password))
        {
            
            

            $res = $this->ruser->get_user($username,$password);
//			print_r($res);
            if($res)
            {
                $this->username = $res[1];
				$this->password = $password;
				$this->id = $res[0];
                $this->auth = true;
            }
            else
            {
             //  forward( $this->url) ;
            }

            
        }
        else
        {
          // forward($this->url);
        }
        
      return $this->auth;
	}//end of login
	function get_authentication()
	{
		return $this->auth;	
	}
}
?>