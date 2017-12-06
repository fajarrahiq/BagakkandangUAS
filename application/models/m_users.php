<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// m_users = model for users
class m_users extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
    }
    // public function cek_login($where){
	// 	$user = $this->select*
	// }
	public function register($member)
	{

		if( $this->db->insert('member', $member) )
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function add_user($member){
		$this->db
		->set('username',$member['username'])
		->set('password',$member['password'])
		->insert('login');

		if($this->db->affected_rows() > 0) return true;
		else return false;
	}
	
}
 ?>