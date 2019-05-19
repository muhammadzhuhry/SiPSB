<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class model_pendaftaran extends CI_Model
	{
		
		public $table = "tbl_pendaftaran";
		function save($katasandi)
		{
			//$katasandi = get_random_password();
			$data = array(
				//tabel di database => name di form
				'email'			=> $this->input->post('email', TRUE),
				'nama'			=> $this->input->post('nama', TRUE),
				'panggilan'		=> $this->input->post('panggilan',TRUE),
				'password'		=> md5($katasandi),
				'berkas'    	=> 'tidak_boleh'
			);
			$this->db->insert($this->table, $data);
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
				'device'			=> $agent,
				'sistem_operasi'	=> $this->agent->platform(),
				'ip_addres'			=> $this->input->ip_address()
			);
			$this->db->insert('tbl_info_visitor', $data);
		}

	}

?>