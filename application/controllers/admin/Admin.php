<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_admin');
		}

		function data()
		{

			// nama table
			$table      = 'tbl_admin';
			// nama PK
			$primaryKey = 'id_admin';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'nama_lengkap', 'dt' => 'nama_lengkap'),
		        array('db' => 'username', 'dt' => 'username'),
		        array('db' => 'password', 'dt' => 'password'),
		        //untuk menampilkan aksi(edit/delete dengan parameter id_admin)
		        array(
		              'db' => 'id_admin',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('admin/admin/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('admin/admin/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('admin/template', 'admin/admin/view');
		}

		function add()
	    {
	      if (isset($_POST['submit'])) {
	        $this->model_admin->save();
	        redirect('admin/admin');
	      } else {
	        $this->template->load('admin/template', 'admin/admin/add');
	      }
	    }

	    function edit()
	    {
	      if (isset($_POST['submit'])) {
	        $this->model_admin->update();
	        redirect('admin/admin');
	      } else {
	        $id_admin      	= $this->uri->segment(4);
	        $data['admin']  = $this->db->get_where('tbl_admin', array('id_admin' => $id_admin))->row_array();
	        $this->template->load('admin/template', 'admin/admin/edit', $data);
	      }
	    }

	    function delete()
	    {
	      $id_admin      	= $this->uri->segment(4);
	      if (!empty($id_admin)) {
	        $this->db->where('id_admin', $id_admin);
	        $this->db->delete('tbl_admin');
	      }
	      redirect('admin/admin');
	    }

	}

?>