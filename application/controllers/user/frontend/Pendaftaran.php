<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class Pendaftaran extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->model('user/model_pendaftaran');
			$this->load->library('email');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$katasandi = get_random_password();
				$this->model_pendaftaran->save($katasandi);
				$this->model_pendaftaran->saveinfo();
				$this->sendMail($katasandi);
				redirect('user/frontend/tampilan_utama/sukses');
			} else {
				$this->template->load('user/frontend/template', 'user/frontend/pendaftaran');
			}
		}

		function sendMail($katasandi) {
	        $config['protocol'] = "smtp";
	        $config['smtp_host'] = "ssl://smtp.gmail.com";
	        $config['smtp_port'] = "465";
	        $config['smtp_user'] = "mazuhrii17@gmail.com";
	        $config['smtp_pass'] = "zxcvbnm0202";
	        $config['charset'] 	= "utf-8";
	        $config['mailtype'] = "html";
	        $config['newline'] = "\r\n";
	        
	        
	        $this->email->initialize($config);

	        $tujuan = $this->input->post('email');
	        $id_pendaftaran = $this->db->insert_id();
	        $data['pass']  = $katasandi;
	        $data['pendaftaran']  = $this->db->get_where('tbl_pendaftaran', array('id_pendaftar' => $id_pendaftaran))->row_array();
	        $konten	= $this->load->view('user/email_register', $data, TRUE);
	 
	        $this->email->from('mazuhrii17@gmail.com', 'Muhammad Zuhri');
	        $list = array($tujuan);
	        $this->email->to($list);
	        $this->email->subject('Registrasi PSB Pesantren Imam Syafi');
	        $this->email->message($konten);
	        if ($this->email->send()) {
	            redirect('user/frontend/tampilan_utama/sukses');
	        } else {
	            show_error($this->email->print_debugger());
	        }
	    }

	}

?>