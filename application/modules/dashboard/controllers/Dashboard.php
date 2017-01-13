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
		$this->load->model('M_dashboard');
		$data['sdata'] = $this->M_dashboard->home_data();
		$this->load->module('template');

        $data = array (
					'sdata'   =>$this->M_dashboard->home_data(),
        	'query'		=> $this->M_dashboard->get('id_category'),
	        'sessid'	=> $this->session->userdata('id'),
	        'title'		=> "Situs Belanja Online Mudah, Cepat, Aman, Berkah",
	        'style' 	=> '<style type="text/css">body {background-color: #FFFFFF;}.ui.menu .item img.logo {margin-right: 1em;}.main.container {margin-top: 7em;}.wireframe {margin-top: 2em;}.ui.footer.segment{}</style>'
	    );

			$data['content_view']='dashboard/dashboard_v';
			$this->template->admin($data);

	}

}
