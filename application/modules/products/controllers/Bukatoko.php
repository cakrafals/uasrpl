<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukatoko extends MX_Controller
{

	function __construct()
	{
        parent::__construct();
    }

	public function index()
	{
		if ($this->lib->login() != "")
		{
			$this->load->module('template');
			$this->load->model('category/M_category');

			$data = array(
				'title' => 'Jual Barang',
				'category' => $this->M_category->get('category', 'ASC'),
				'style' => '<style type="text/css">.main.container, .ui.vertical.segment {margin-top: 7em;}.ui.menu .item img.logo {margin-right: 1em;}</style>'
			);
{
		if ($this->lib->login() != "")
		{
			$username = $this->session->userdata('username');
			$now = date("Y-m-d");
			$path_one = './assets/img/products/'.$now;
			$path_two = $path_one."/".$username;
			if (!is_dir('./assets/img/products/'.$now.'/'.$username))
			{
				mkdir($path_one, 0777, TRUE);
				mkdir($path_two, 0777, TRUE);
				$path = './assets/img/products/'.$now.'/'.$username;
			}
			else
			{
				$path = './assets/img/products/'.$now.'/'.$username;
			}
			$this->load->model('M_products');

			$this->form_validation->set_rules('name_products', 'Nama Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('category', 'Kategori', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kondisi', 'Kondisi', 'trim|required|xss_clean');
			$this->form_validation->set_rules('berat', 'Perkiraan Berat', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stok', 'Stok', 'trim|required|xss_clean');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required|xss_clean');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|xss_clean');
			$this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

			if ($this->form_validation->run() == TRUE)
			{
				$config['upload_path']		= $path;
                $config['allowed_types']	= 'jpeg|jpg|png';
                $config['max_size']			= 1024;
                $config['max_width']		= 800;
                $config['max_height']		= 780;
                $config['encrypt_name']		= TRUE;
		  		$config['remove_spaces']	= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $gambar = $this->upload->data();
                	$this->upload->initialize($config);
                	$source = './assets/img/products/'.$now.'/'.$username.'/'.$gambar['file_name'];
                    //$image = $data['upload_path'];

					$data = array(
						'id_category' => $this->input->post('category'),
							'kategori'	=> $this->input->post('kategori'),
						'id_user' => $this->session->userdata('id'),
						'name_products' => $this->input->post('name_products'),
						'slug' => url_title($this->input->post('name_products'), 'dash', TRUE),
						'description' => $this->input->post('deskripsi'),
						'qty' => $this->input->post('stok'),
						'kondisi' => $this->input->post('kondisi'),
						'berat' => $this->input->post('berat'),
						'price' =>  $this->input->post('harga'),
						'image1' => $source
					);

					//$data = $this->get_data_from_post();
					$this->_insert($data);
					$this->session->set_flashdata('notice', '<div class="ui success message"><i class="close icon"></i><div class="header">Barang berhasil disimpan.</div></div>');
					redirect('products/me');
                }
			}
			else
			{
				$this->load->model('category/M_category');
				$this->load->module('template');

				$data = array(
					'title' => 'Jual Barang',
					'category' => $this->M_category->get('category', 'ASC'),
					'style' => '<style type="text/css">.main.container, .ui.vertical.segment {margin-top: 7em;}.ui.menu .item img.logo {margin-right: 1em;}</style>'
				);

				$this->template->navbar($data);
				$this->load->view('bukatoko', $data);
			$this->template->footer();
			}
		}
		else
		{
			$this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login sebelum menjual barang.</p>');
			redirect('login');
		}
	}

	function _insert($data) {
        $this->load->model('M_products');
        $this->M_products->_insert($data);
    }
}
	/*
			$this->template->navbar($data);
			//$this->template->nav_menu();
			//$this->template->sidebar_dashboard();
			$this->load->view('bukatoko', $data);
			$this->template->footer();
			*/
		}


	function add()
	{
		if ($this->lib->login() != "")
		{
			$username = $this->session->userdata('username');
			$now = date("Y-m-d");
			$path_one = './assets/img/products/'.$now;
			$path_two = $path_one."/".$username;
			if (!is_dir('./assets/img/products/'.$now.'/'.$username))
			{
				mkdir($path_one, 0777, TRUE);
				mkdir($path_two, 0777, TRUE);
				$path = './assets/img/products/'.$now.'/'.$username;
			}
			else
			{
				$path = './assets/img/products/'.$now.'/'.$username;
			}
			$this->load->model('M_products');

			$this->form_validation->set_rules('name_products', 'Nama Barang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('category', 'Kategori', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kondisi', 'Kondisi', 'trim|required|xss_clean');
			$this->form_validation->set_rules('berat', 'Perkiraan Berat', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stok', 'Stok', 'trim|required|xss_clean');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required|xss_clean');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|xss_clean');
			$this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

			if ($this->form_validation->run() == TRUE)
			{
				$config['upload_path']		= $path;
                $config['allowed_types']	= 'jpeg|jpg|png';
                $config['max_size']			= 1024;
                $config['max_width']		= 800;
                $config['max_height']		= 780;
                $config['encrypt_name']		= TRUE;
		  					$config['remove_spaces']	= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $gambar = $this->upload->data();
                	$this->upload->initialize($config);
                	$source = './assets/img/products/'.$now.'/'.$username.'/'.$gambar['file_name'];
                    //$image = $data['upload_path'];

					$data = array(
						'id_category' => $this->input->post('category'),
						'kategori'	=> $this->input->post('kategori'),
						'id_user' => $this->session->userdata('id'),
						'name_products' => $this->input->post('name_products'),
						'slug' => url_title($this->input->post('name_products'), 'dash', TRUE),
						'description' => $this->input->post('deskripsi'),
						'qty' => $this->input->post('stok'),
						'kondisi' => $this->input->post('kondisi'),
						'berat' => $this->input->post('berat'),
						'price' =>  $this->input->post('harga'),
						'image1' => $source
					);

					//$data = $this->get_data_from_post();
					$this->_insert($data);
					$this->session->set_flashdata('notice', '<div class="ui success message"><i class="close icon"></i><div class="header">Barang berhasil disimpan.</div></div>');
					redirect('dashboard');
                }
			}
			else
			{
				$this->load->model('category/M_category');
				$this->load->module('template');

				$data = array(
					'title' => 'Tambah Barang',
					'category' => $this->M_category->get('category', 'ASC'),

				);


				$this->template->navbar($data);
				//$this->template->nav_menu();
				//$this->template->sidebar_dashboard();
				$this->load->view('bukatoko', $data);
				$this->template->footer();
			}
		}
		else
		{
			$this->session->set_flashdata('not_login', '<p style="color: red;">Silahkan login sebelum menjual barang.</p>');
			redirect('login');
		}
	}

	function _insert($data) {
        $this->load->model('M_products');
        $this->M_products->_insert($data);
    }
}
