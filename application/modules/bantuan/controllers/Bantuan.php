<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Bantuan extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['content_view']='bantuan/bantuan_v';
		$this->template->admin_template($data);
	}
	
}
