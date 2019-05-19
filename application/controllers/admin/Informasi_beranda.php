<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class Informasi_beranda extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->model('admin/model_informasiberanda');
		}

		function index()
		{
			$check = $this->db->get('tbl_beranda')->result();
			if (!empty($check)) {
				$data['beranda'] = $this->db->get('tbl_beranda')->row_array();
				$this->template->load('admin/template', 'admin/informasi_beranda/form_beranda', $data);
			} else {
				$this->template->load('admin/template', 'admin/informasi_beranda/form_berandanew');
			}
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_informasiberanda->save();
				redirect('admin/informasi_beranda');
			} else {
				$this->template->load('admin/template', 'admin/informasi_beranda/form_berandanew');
			}
		}

		//tanpa password
		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_informasiberanda->update();
				redirect('admin/informasi_beranda');
			} else {
				redirect('admin/informasi_beranda');
			}
		}

		// dengan password
		// function edit()
		// {
		// 	$katasandi = date('d-m-Y');
		// 	if (isset($_POST['submit'])) {
		// 		if ($_POST['password'] == $katasandi) {
		// 			$this->model_informasiberanda->update();
		// 			redirect('admin/informasi_beranda');
		// 			echo "gagal broh";
		// 		} else {
		// 			echo "gagal broh";
		// 		}
		// 	} else {
		// 		redirect('admin/informasi_beranda');
		// 	}
		// }

	}

?>