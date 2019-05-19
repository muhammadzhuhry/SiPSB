<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
		}
		
		function index()
		{ 
			// $id_admin = $this->session->userdata('id_admin');
			// if (empty($id_admin)) {
			// 	show_404();
			// } else {
			// 	$this->template->load('admin/template', 'admin/dashboard');
			// }
			//$qadmin = 'SELECT COUNT(*) AS hasil FROM tbl_admin';
			//$data['admin'] = $this->db->query($qadmin)->row_array();
			$data['admin'] = $this->db->from("tbl_admin")->count_all_results();

			// $qpendaftar = 'SELECT COUNT(*) AS hasil FROM tbl_pendaftaran';
			// $data['pendaftar'] = $this->db->query($qpendaftar)->row_array();
			$data['pendaftar'] = $this->db->from("tbl_pendaftaran")->count_all_results();

			$qcalon = 'SELECT COUNT(*) AS hasil FROM tbl_peserta WHERE calon_peserta="ya" AND peserta="tidak"';
			$data['calon'] = $this->db->query($qcalon)->row_array();

			$qpeserta = 'SELECT COUNT(*) AS hasil FROM tbl_peserta WHERE calon_peserta="tidak" AND peserta="ya"';
			$data['peserta'] = $this->db->query($qpeserta)->row_array();

			//$data['grafik'] = 'SELECT merk,SUM(stok) AS stok FROM tbl_pendafta GROUP BY merk'
			$qgrafik = 'SELECT tahun_daftar,COUNT(*) AS hasil FROM tbl_peserta WHERE peserta = "ya" GROUP BY tahun_daftar';
			$data['grafik'] = $this->db->query($qgrafik);
			$this->template->load('admin/template', 'admin/dashboard', $data);
			
		}

	}

?>