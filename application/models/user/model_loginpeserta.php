<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_loginpeserta extends CI_Model
	{
		
		function checkLogin($email, $password)
		{
			$this->db->where('email', $email);
			$this->db->where('password', md5($password));
			$user = $this->db->get('tbl_pendaftaran')->row_array();
			return $user;
		}

		function saveinfo()
		{
			if ($this->agent->is_browser()){
				$agent = $this->agent->browser().' '.$this->agent->version();
			}elseif ($this->agent->is_mobile()){
				$agent = $this->agent->mobile();
			}else{
				$agent = 'Data user gagal di dapatkan';
			}
	 
			// echo "Di akses dari :<br/>";
			// echo "Browser = ". $agent . "<br/>";
			// echo "Sistem Operasi = " . $this->agent->platform() ."<br/>"; // Platform info (Windows, Linux, Mac, etc.)
			// //ip hanya muncul pada hosting
			// echo "IP = " . $this->input->ip_address();

			$data = array(
				//tabel di database => name di form
				'id_pendaftar'		=> $this->session->userdata('id_pendaftar'),
				'device'			=> $agent,
				'sistem_operasi'	=> $this->agent->platform(),
				'ip_addres'			=> $this->input->ip_address()
			);
			$this->db->insert('tbl_info_user', $data);
		}

	}

?>