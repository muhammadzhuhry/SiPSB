<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pendaftaran extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_pendaftaran');
		}

		function data()
		{

			// nama table
			$table      = 'tbl_pendaftaran';
			// nama PK
			$primaryKey = 'id_pendaftar';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
		        array('db' => 'nama', 'dt' => 'nama'),
		        array('db' => 'panggilan', 'dt' => 'panggilan'),
		        array('db' => 'email', 'dt' => 'email'),
		        //untuk menampilkan aksi(edit/delete dengan parameter id_pendaftar)
		        array(
		              'db' => 'id_pendaftar',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('admin/pendaftaran/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('admin/pendaftaran/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
		            }
		        )
		    );

			$sql_details = array(
				'user' => $this->db->username,
				'pass' => $this->db->password,
				'db'   => $this->db->database,
				'host' => $this->db->hostname
		    );

		    echo json_encode(
		     	SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
		     );

		}
		
		function index()
		{
			$this->template->load('admin/template', 'admin/pendaftaran/view');
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_pendaftaran->update();
				redirect('admin/pendaftaran');
			} else {
				$id_pendaftar 		= $this->uri->segment(4);
				$data['pendaftar'] 	= $this->db->get_where('tbl_pendaftaran', array('id_pendaftar' => $id_pendaftar))->row_array();
				$this->template->load('admin/template', 'admin/pendaftaran/edit', $data);
			}
		}	

		function delete()
		{
			$id_pendaftar 	= $this->uri->segment(4);
			if (!empty($id_pendaftar)) {
				$this->db->where('id_pendaftar', $id_pendaftar);
				$this->db->delete('tbl_pendaftaran');
			}
			redirect('admin/pendaftaran');
		}

	}

?>