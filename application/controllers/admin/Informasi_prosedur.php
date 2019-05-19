<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Informasi_prosedur extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->model('admin/model_informasiprosedur');
		}

		function index()
		{
			$check = $this->db->get('tbl_prosedur')->result();
			if (!empty($check)) {
				$data['prosedur'] = $this->db->get('tbl_prosedur')->row_array();
				$this->template->load('admin/template', 'admin/informasi_prosedur/form_prosedur', $data);
			} else {
				$this->template->load('admin/template', 'admin/informasi_prosedur/form_prosedurnew');
			}
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_informasiprosedur->save();
				redirect('admin/informasi_prosedur');
			} else {
				$this->template->load('admin/template', 'admin/informasi_prosedur/form_prosedurnew');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_informasiprosedur->update();
				redirect('admin/informasi_prosedur');
			} else {
				redirect('admin/informasi_prosedur');
			}
		}

	}

?>