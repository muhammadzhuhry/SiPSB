<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Calon_peserta extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_calonpeserta');
		}
		
		function index()
		{
			$query	= "SELECT tpeserta.*, tdaftar.* 
					  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta='ya' AND tpeserta.peserta='tidak'";
			//$data['calon_peserta'] = $this->db->get_where('tbl_peserta', array('calon_peserta' => 'ya', 'peserta' => 'tidak'));
			$data['calon_peserta'] = $this->db->query($query);
			$this->template->load('admin/template', 'admin/calon_peserta/view', $data);
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_calonpeserta->update();
				redirect('admin/calon_peserta');
			} else {
				$id_peserta 	= $this->uri->segment(4);
				$query	= "SELECT tpeserta.*, tdaftar.* 
						  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
						  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.id_peserta = $id_peserta";
				$data['calon_peserta'] = $this->db->query($query)->row_array();
				//$id_peserta 			= $this->uri->segment(4);
				//$data['calon_peserta'] 	= $this->db->get_where('tbl_peserta', array('id_peserta' => $id_peserta))->row_array();
				$this->template->load('admin/template', 'admin/calon_peserta/edit', $data);
			}
		}

		function delete()
		{
			$id_peserta 	= $this->uri->segment(4);
			$id_pendaftar 	= $this->session->userdata('id_pendaftar');
			if (!empty($id_peserta)) {
				$this->db->where('id_peserta', $id_peserta);
				$this->db->delete('tbl_peserta');
				// update tbl_pendaftaran berkas => boleh
				$this->db->where('id_pendaftar', $id_pendaftar);
				$this->db->update('tbl_pendaftaran', array('berkas' => 'tidak_boleh'));
			}
			redirect('admin/calon_peserta');
		}

		function detail()
		{
			$id_peserta 	= $this->uri->segment(4);
			$query	= "SELECT tpeserta.*, tdaftar.* 
					  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.id_peserta = $id_peserta";
			$data['calon_peserta'] = $this->db->query($query)->row_array();
			// $id_peserta 			= $this->uri->segment(4);
			// $data['calon_peserta'] 	= $this->db->get_where('tbl_peserta', array('id_peserta' => $id_peserta))->row_array();
			$this->template->load('admin/template', 'admin/calon_peserta/detail', $data);
		}


	}

?>