<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Keranjang extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['content_view']='keranjang/keranjang_v';
		$this->template->admin_template($data);
	}
	
}
