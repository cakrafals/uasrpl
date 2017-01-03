<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class template extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	function index($data = null){
		$this->load->view('template/t_awal',$data);
	}

	function r($data = null){
		$this->load->view('template/tregister',$data);
	}

	function admin($data = null){
		$this->load->view('template/admin_template_v',$data);
	}
}
