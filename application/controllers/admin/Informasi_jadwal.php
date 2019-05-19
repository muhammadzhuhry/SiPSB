<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Informasi_jadwal extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_informasijadwal');
		}

		function data()
		{

			// nama table
			$table      = 'tbl_jadwal';
			// nama PK
			$primaryKey = 'id_tes';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'jenis_kegiatan', 'dt' => 'jenis_kegiatan'),
				array('db' => 'tanggal', 'dt' => 'tanggal'),
				array('db' => 'bulan', 'dt' => 'bulan'),
				array('db' => 'tahun', 'dt' => 'tahun'),
		        //untuk menampilkan aksi(edit/delete dengan parameter id_admin)
		        array(
		              'db' => 'id_tes',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('admin/informasi_jadwal/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('admin/informasi_jadwal/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('admin/template', 'admin/informasi_jadwal/view');
		}

		function add()
	    {
	      if (isset($_POST['submit'])) {
	        $this->model_informasijadwal->save();
	        redirect('admin/informasi_jadwal');
	      } else {
	        $this->template->load('admin/template', 'admin/informasi_jadwal/add');
	      }
	    }

	    function edit()
	    {
	      if (isset($_POST['submit'])) {
	        $this->model_informasijadwal->update();
	        redirect('admin/informasi_jadwal');
	      } else {
	        $id_tes       = $this->uri->segment(4);
	        $data['tes']  = $this->db->get_where('tbl_jadwal', array('id_tes' => $id_tes))->row_array();
	        $this->template->load('admin/template', 'admin/informasi_jadwal/edit', $data);
	      }
	    }

	    function delete()
	    {
	      $id_tes      	= $this->uri->segment(4);
	      if (!empty($id_tes)) {
	        $this->db->where('id_tes', $id_tes);
	        $this->db->delete('tbl_jadwal');
	      }
	      redirect('admin/informasi_jadwal');
	    }

	}

?>