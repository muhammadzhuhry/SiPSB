<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Ruangan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_ruangan');
		}

		function data()
		{

			// nama table
			$table      = 'tbl_ruangan';
			// nama PK
			$primaryKey = 'kd_ruangan';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'kd_ruangan', 'dt' => 'kd_ruangan'),
		        array('db' => 'nama_ruangan', 'dt' => 'nama_ruangan'),
		        //untuk menampilkan aksi(edit/delete dengan parameter kode ruangan)
		        array(
		              'db' => 'kd_ruangan',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('admin/ruangan/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('admin/ruangan/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('admin/template', 'admin/ruangan/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_ruangan->save();
				redirect('admin/ruangan');
			} else {
				$this->template->load('admin/template', 'admin/ruangan/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_ruangan->update();
				redirect('admin/ruangan');
			} else {
				$kd_ruangan 		= $this->uri->segment(4);
				$data['ruangan'] 	= $this->db->get_where('tbl_ruangan', array('kd_ruangan' => $kd_ruangan))->row_array();
				$this->template->load('admin/template', 'admin/ruangan/edit', $data);
			}
		}

		function delete()
	    {
	      $kd_ruangan      	= $this->uri->segment(4);
	      if (!empty($kd_ruangan)) {
	        $this->db->where('kd_ruangan', $kd_ruangan);
	        $this->db->delete('tbl_ruangan');
	      }
	      redirect('admin/ruangan');
	    }

	}

?>