<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Service extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['content_view']='service/service_v';
		$this->template->admin($data);
	}
}
