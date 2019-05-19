<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Form_biodata extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			ruleuser();
			$this->load->model('user/model_formbiodata');
		}
		
		function index()
		{
			$id_pendaftar		= $this->session->userdata('id_pendaftar');
			$hasil				= $this->model_formbiodata->check($id_pendaftar);
			if (empty($hasil)) {
				// jika calon peserta tidak bernilai, maka akan menampilkan form biodata
				$this->template->load('user/backend/template', 'user/backend/biodata/form_biodata');
			} else {
				// jika calon peserta bernilai ya maka akan menampilkan detail biodata
				$sql 					= "SELECT tdaftar.*, tpeserta.* 
										  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
										  WHERE tpeserta.id_pendaftar = tdaftar.id_pendaftar AND tdaftar.id_pendaftar = '$id_pendaftar'";
 				$data['calon_peserta'] 	= $this->db->query($sql)->row_array();
				$this->template->load('user/backend/template', 'user/backend/biodata/detail_biodata', $data);
			}		
		}


		function add_data()
		{
			if (isset($_POST['submit'])) {
				$id_pendaftar = $this->session->userdata('id_pendaftar');
				$this->model_formbiodata->save();
				// update tbl_pendaftaran berkas => boleh
				$this->db->where('id_pendaftar', $id_pendaftar);
				$this->db->update('tbl_pendaftaran', array('berkas' => 'boleh'));
				redirect('user/backend/form_biodata');
			} else {
				$this->template->load('user/backend/template', 'user/backend/biodata/form_biodata');
			}
		}

	}

?>