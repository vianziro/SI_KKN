<?php
class Kkn_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function Data_Login($user,$pass)
		{
			$user_bersih=$user;
			$pass_bersih=$pass;
			$query=$this->db->query("select * from tbllogin where username='$user_bersih' and psw='$pass_bersih'");
			return $query;
		}
	function Update_Password($nim,$pwd)
		{
			$this->db->query("update tbllogin set psw='$pwd' where username='$nim'");
		}


}
?>
