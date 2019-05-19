<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Upload_berkas extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleuser();
			//$this->load->model('user/model_uploadberkas');
		}

		function index()
		{
			$id_pendaftar = $this->session->userdata['id_pendaftar'];
			$info = $this->db->get_where('tbl_pendaftaran', array('id_pendaftar' => $id_pendaftar))->row_array();

			if ($info['berkas'] == 'boleh') {
				$this->template->load('user/backend/template', 'user/backend/upload_berkas/upload');
			} elseif ($info['berkas'] == 'selesai') {
				$this->template->load('user/backend/template', 'user/backend/upload_berkas/upload_selesai');
			} else {
				echo "<script>alert('Anda harus menginputkan biodata terlebih dahulu !');
							window.location='".base_url()."user/backend/form_biodata'
					  </script>";
			}
		}

		function do_upload() {
			$id_pendaftar	= $this->session->userdata['id_pendaftar'];
			$nama	 		= $this->session->userdata['panggilan'];
			$query	= "SELECT tpeserta.*, tdaftar.* 
					  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tdaftar.id_pendaftar ='$id_pendaftar'";
			$tanggal 	= date('d-m-Y');
			$pendaftar 	= $this->db->query($query)->row_array();
			$nisn 		= $pendaftar['nisn'];
			$newname 	= $tanggal."+".$nisn."+".$nama;
	        // setting konfigurasi upload
	        $config['upload_path'] 		= './berkas/';
	        $config['allowed_types'] 	= 'rar|zip';
	        $config['max_size']         = 10240;
	        $config['file_name'] 		= $newname;
	        // load library upload
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('berkas')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	            $id_pendaftar = $this->session->userdata['id_pendaftar'];
	            $this->db->where('id_pendaftar', $id_pendaftar);
				$this->db->update('tbl_pendaftaran', array('berkas' => 'selesai'));
	            redirect('user/backend/upload_berkas');
	        }
	    }

	}

?>