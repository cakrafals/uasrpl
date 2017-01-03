<?php
class Login extends MY_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
//	$this->load->view('login_v');
	$this->load->model('Mdl_login');
	if ($this->lib->login() != "")
		{
			redirect('dashboard');
		}
		else
		{
			$this->form_validation->set_rules('_email', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('_password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
			if ($this->form_validation->run() == TRUE)
			{
				$email = $this->input->post('_email');
				$password = md5(md5(sha1($this->input->post('_password'))));
				$check = $this->Mdl_login->login(array('email' => $email), array('password' => $password));
				if ($check == TRUE)
				{
					foreach ($check as $user)
					{
						$this->session->set_userdata(array(
							'email' => $user->email,
							'id' => $user->id_user,
							'nama_lengkap' => $user->nama_lengkap,
							'username' => $user->username
						));
						redirect('dashboard');
					}
				}
				else
				{

					$data = array(
						'error' => 'Maaf, Email atau Password salah!',
						'title' => 'Masuk',
						'style' => '<style type="text/css">body {background-color: #DADADA;}body > .grid {height: 100%;}.image {margin-top: -100px;}.column {max-width: 450px;}</style>'
					);
					$this->load->view('login_v', $data);

				}
			}
			else
			{

				$data = array(
					'title' => 'Masuk',
					'style' => '<style type="text/css">body {background-color: #DADADA;}body > .grid {height: 100%;}.image {margin-top: -100px;}.column {max-width: 450px;}</style>'
				);

				$this->load->view('login_v', $data);

			}
		}
	}

	function loggedin()
	{
		if ($this->lib->login() != "")
		{
			$me = $this->lib->record();
			foreach ($me as $user)
			{
				$data['email'] = $user->email;
				$data['id'] = $user->id_user;
				$data['nama'] = $user->nama_lengkap;
				$data['username'] = $user->username;
				$data['ip'] = $user->ip_address;
			}
			$this->load->view('loggedin', $data);
		}
		else
		{
			redirect();
		}

	}

	function logout()
	{
		if ($this->lib->login() != "") {
			$this->lib->logout();
			redirect();
		} else {
			redirect();
		}
	}
}




  ?>
