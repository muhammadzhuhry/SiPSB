<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class Tampilan_utama extends CI_Controller
	{
		
		function index() 
		{
			//$this->template->load('user/frontend/template', 'user/frontend/beranda');
			$this->beranda();
		}

		function beranda()
		{
			$data['beranda'] = $this->db->get('tbl_beranda')->row_array();	
			$this->template->load('user/frontend/template', 'user/frontend/beranda', $data);
		}

		function peserta() 
		{
			// result() nya ada di view
			$queryCalonPeserta		= "SELECT tpeserta.*, tdaftar.* 
					  		  		FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  		  		WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta='ya' AND tpeserta.peserta='tidak'";
			$data['calon_peserta']	= $this->db->query($queryCalonPeserta);
			$queryPeserta	= "SELECT tpeserta.*, tdaftar.* 
					  		  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  		  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta='tidak' AND tpeserta.peserta='ya'";
			$data['peserta']	= $this->db->query($queryPeserta);
			$this->template->load('user/frontend/template', 'user/frontend/peserta', $data);
		}

		function pendaftaran() 
		{
			$this->template->load('user/frontend/template', 'user/frontend/pendaftaran');
		}

		function informasi_prosedur() 
		{
			$data['prosedur'] = $this->db->get('tbl_prosedur')->row_array();
			$this->template->load('user/frontend/template', 'user/frontend/informasi_prosedur', $data);
		}

		function informasi_jadwal() {
			$data['jadwal'] = $this->db->get('tbl_jadwal');
			$this->template->load('user/frontend/template', 'user/frontend/informasi_jadwal', $data);
		}

		function bantuan()
		{
			$this->template->load('user/frontend/template', 'user/frontend/bantuan');
		}

		function sukses()
		{
			$this->template->load('user/frontend/template', 'user/frontend/sukses_daftar');
		}

		function halaman_login() 
		{
			$this->template->load('user/frontend/template', 'user/frontend/login');
		}

	}

?>