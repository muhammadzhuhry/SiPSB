<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('admin/model_admin');
		}

		function index()
		{
			$this->load->view('admin/login');
		}

		function check_login()
		{
			if (isset($_POST['submit'])) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$hasil = $this->model_admin->checkLogin($username, $password);
				if (!empty($hasil)) {
					//$this->session->set_userdata('admin', $hasil);
					$this->session->set_userdata($hasil);
					redirect('admin/dashboard');
				} else {
					echo "<script>alert('Username atau Password yang Anda Inputkan Salah atau Belum Terdaftar');
							window.location='".base_url()."login'
						  </script>";
				}
			} else {
				redirect('login');
			}		
		}

		function process_logout()
		{
			//$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			redirect('login');
		}

	}

?>