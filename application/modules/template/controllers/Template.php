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

	function footer($data = null){
		$this->load->view('template/footer',$data);
	}

	function admin($data = null){
		$this->load->view('template/admin_template_v',$data);
	}

			function navbar($data = null){
				$this->load->view('template/navbar1',$data);
			}
			function dash($data = null){
				$this->load->view('template/navbar',$data);
			}

}
