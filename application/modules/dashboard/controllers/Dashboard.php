<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboard extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		if ($this->lib->login() == "")
			{
				$this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login sebelum akses dashboard.</p>');
				redirect('login');
			}
	}

	function index(){

			$data['content_view']='dashboard/dashboard_v';
			$this->template->admin($data);

	}

}
