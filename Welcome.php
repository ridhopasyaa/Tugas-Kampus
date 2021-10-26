<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hitung_pembelian(){
		$arr=array();
		$arr['customer'] = $this->input->get('customer');
		$arr['nomorhp'] = $this->input->get('nomorhp');
		$arr['merek'] = $this->input->get('merek');
		$arr['ukuran'] = $this->input->get('ukuran');
		$arr['harga'] = $this->input->get('harga');
		$this->load->view('view_pembelian',$arr);
	}
}
