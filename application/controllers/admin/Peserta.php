<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Peserta extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleadmin();
			$this->load->library('ssp');
			$this->load->model('admin/model_peserta');
		}

		function index()
		{			
			$query	= "SELECT tpeserta.*, tdaftar.* 
					  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta='tidak' AND tpeserta.peserta='ya'";
			//$data['peserta'] = $this->db->get_where('tbl_peserta', array('calon_peserta' => 'tidak', 'peserta' => 'ya'));
			$data['peserta'] = $this->db->query($query);
			$this->template->load('admin/template', 'admin/peserta/view', $data);
		}

		function add_data()
		{
			if (isset($_POST['submit'])) {
				$this->model_peserta->update_baru();
	        	redirect('admin/peserta');
			} else {
				$this->template->load('admin/template', 'admin/peserta/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_peserta->update();
				redirect('admin/peserta');
			} else {
				$id_peserta 		= $this->uri->segment(4);
				$query	= "SELECT tpeserta.*, tdaftar.* 
					  FROM tbl_peserta AS tpeserta, tbl_pendaftaran AS tdaftar 
					  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta='tidak' AND tpeserta.peserta='ya' AND tpeserta.id_peserta = $id_peserta";
				$data['peserta'] 	= $this->db->query($query)->row_array();
				//$data['peserta'] 	= $this->db->get_where('tbl_peserta', array('id_peserta' => $id_peserta))->row_array();
				$this->template->load('admin/template', 'admin/peserta/edit', $data);
			}
		}

		// function delete()
		// {
		// 	$nisn 	= $this->uri->segment(4);
		// 	if (!empty($nisn)) {
		// 		$this->db->where('nisn', $nisn);
		// 		$this->db->delete('tbl_pendaftaran');
		// 	}
		// 	redirect('admin/peserta');
		// }

		function delete()
		{
			$id_peserta = $this->uri->segment(4);
			if (!empty($id_peserta)) {
				// mengambalikan peserta menjadi calon peserta
				$this->model_peserta->empty_update($id_peserta);
				redirect('admin/peserta');
			}
			redirect('admin/peserta');
		}

		function form_peserta()
		{
			$nisn 		= $_GET['nisn'];
			$sqlPeserta = "SELECT tpeserta.*, tdaftar.nama
						  FROM tbl_peserta  AS tpeserta, tbl_pendaftaran AS tdaftar
						  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.nisn = '$nisn'";

			$peserta 	= $this->db->query($sqlPeserta)->row_array();
			$data = array(
					// data peserta
						'id_peserta'			=>	$peserta['id_peserta'],
			            'nama'      			=>  $peserta['nama'],
			            'tempat_lahir'   		=>  $peserta['tempat_lahir'],
			            'tanggal_lahir'    		=>  $peserta['tanggal_lahir'],
			            'alamat'    			=>  $peserta['alamat'],
			            'asal_sekolah'    		=>  $peserta['asal_sekolah'],
			            'alamat_sekolah_asal'   =>  $peserta['alamat_sekolah_asal'],
			            'no_ijazah'    			=>  $peserta['no_ijazah'],
			        );
			 echo json_encode($data);
		}

		function export()
		{
			// Load plugin PHPExcel nya
    		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    		// Panggil class PHPExcel nya
    		$csv = new PHPExcel();

    		// Settingan awal fil excel
		    $csv->getProperties()->setCreator('Muhammad Zuhri')
		                 ->setLastModifiedBy('Admin')
		                 ->setTitle("Data Peserta")
		                 ->setSubject("Peserta")
		                 ->setDescription("Laporan Data Peserta")
		                 ->setKeywords("Data Peserta");

		    // Buat header tabel nya pada baris ke 1
		    $csv->setActiveSheetIndex(0)->setCellValue('A1', "NISN"); // Set kolom B1 dengan tulisan "NISN"
		    $csv->setActiveSheetIndex(0)->setCellValue('B1', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
		    $csv->setActiveSheetIndex(0)->setCellValue('C1', "TANGGAL LAHIR"); // Set kolom D1 dengan tulisan "TANGGAL LAHIR"
		    $csv->setActiveSheetIndex(0)->setCellValue('D1', "TEMPAT LAHIR"); // Set kolom E1 dengan tulisan "ALAMAT"

		    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    		//$peserta = $this->db->get_where('tbl_peserta', array('calon_peserta' => 'tidak', 'peserta' => 'ya'))->result();
    		$sqlPeserta = "SELECT tpeserta.*, tdaftar.nama
						  FROM tbl_peserta  AS tpeserta, tbl_pendaftaran AS tdaftar
						  WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.calon_peserta = 'tidak' AND tpeserta.peserta = 'ya'";

			$peserta 	= $this->db->query($sqlPeserta)->result();

    		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
    		$numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 2

    		foreach($peserta as $data){ // Lakukan looping pada variabel peserta
		      $csv->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nisn);
		      $csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nama);
		      $csv->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tanggal_lahir);
		      $csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->tempat_lahir);
		      
		      $numrow++; // Tambah 1 setiap kali looping
		    }

		    // foreach (range('C', $csv->getActiveSheet()->getHighestDataColumn()) as $col) {
		    //     $csv->getActiveSheet()
		    //             ->getColumnDimension($col)
		    //             ->setAutoSize(true);
		    // } 

		 //    PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);
		 //     foreach(range('A','E') as $columnID) {
			//     $csv->getActiveSheet()->getColumnDimension($columnID)
			//         ->setAutoSize(true);
			// }

		    // Set orientasi kertas jadi LANDSCAPE
    		$csv->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

    		// Set judul file excel nya
		    $csv->getActiveSheet(0)->setTitle("Laporan Data Peserta");
		    $csv->setActiveSheetIndex(0);
		    // Proses file excel
		    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		    header('Content-Disposition: attachment; filename="Data Peserta.csv"'); // Set nama file excel nya
		    header('Cache-Control: max-age=0');
		    $write = new PHPExcel_Writer_CSV($csv);
		    $write->save('php://output');

		}

	}

?>