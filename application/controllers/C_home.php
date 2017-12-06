<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function home()
	{
		
		$this->load->view('Home');
		
	}
	public function caraorder()
	{
		$this->load->view('caraorder');
	}

	public function cekresi()
	{
		$this->load->view('cekresi');
	}

	public function hitung()
	{
		$this->load->view('hitung');
	}

	public function kontak()
	{
		$this->load->view('Kontak');
	}
	
	public function produk()
	{
		$this->load->view('produk');
	}
}
