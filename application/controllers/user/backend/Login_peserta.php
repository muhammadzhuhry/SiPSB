<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_peserta extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->model('user/model_loginpeserta');
		}

		function index()
		{
			$this->load->view('user/frontend/login');
		}

		function check_login()
		{
			if (isset($_POST['submit'])) {
				$email 			= $this->input->post('email');
				$password 		= $this->input->post('password');
				$hasil_peserta  = $this->model_loginpeserta->checkLogin($email, $password);
				if (!empty($hasil_peserta)) {
					$this->session->set_userdata($hasil_peserta);
					$this->model_loginpeserta->saveinfo();
					redirect('user/backend/prosedur');
				} else {
					//redirect('user/frontend/tampilan_utama/halaman_login');
					echo "<script>alert('Email atau Password yang Anda Inputkan Salah atau Belum Terdaftar');
							window.location='".base_url()."user/frontend/tampilan_utama/halaman_login'
						 </script>";
				}
			} else {
				redirect('user/frontend/tampilan_utama/halaman_login');
			}		
		}

		function process_logout()
		{
			$this->session->sess_destroy();
			redirect('user/frontend/tampilan_utama/halaman_login');
		}

	}

?>