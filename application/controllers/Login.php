<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// Defined & load data from model
		$this->load->model('m_users');
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function aksi_login(){
		$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$where = array(
    		'username'=>$username,
    		'password'=>md5($password)
    		);
    	$cek = $this->m_users->cek_login("login",$where)->num_rows();
        
        if ($cek > 0) {
    		$data_session=array(
    			'nama'=>$username,
    			'status'=>"login");
    		$this->session->set_userdata($data_session);
    		redirect(base_url('index.php/C_home/Home'));
    	}else{
    		echo "Username dan password salah ".$where['password'];
    	}
	}

	public function register_data()
	{

		$user_member = array(
			'email' => $this->input->post('email'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_HP' => $this->input->post('no_HP'),	
			'username' => $this->input->post('username'),
			'password' => md5( $this->input->post('password') ),
			
		);
		echo json_encode($user_member);

		if( $this->m_users->add_user($user_member)){
			if( $this->m_users->register($user_member) )
			{
				redirect(base_url('index.php/login'));
			} else {
				$this->load->view('login');
			}
		}


	}

	function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url('index.php/login'));
    }
}