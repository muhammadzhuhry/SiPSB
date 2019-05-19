<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class Cetak_kartu extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleuser();
			$this->load->library('CFPDF');
		}

		function index()
		{	

			$id_pendaftar 		= $this->session->userdata('id_pendaftar');

			$sqlCheck = "SELECT tpeserta.status_biodata, tpeserta.status_verifikasi, tpeserta.calon_peserta, tpeserta.peserta
						 FROM tbl_pendaftaran AS tpendaftaran, tbl_peserta AS tpeserta
						 WHERE tpendaftaran.id_pendaftar = tpeserta.id_pendaftar AND tpendaftaran.id_pendaftar = '$id_pendaftar'";
			$check 	  = $this->db->query($sqlCheck)->row_array();

			if ($check['status_biodata'] == 'lengkap' and $check['status_verifikasi'] == 'terverifikasi' and $check['calon_peserta'] == 'tidak' and $check['peserta'] == 'ya') {

				$sqlCetak	= "SELECT tpeserta.nisn, tdaftar.nama, tpeserta.no_peserta, truang.nama_ruangan
						   FROM tbl_pendaftaran AS tdaftar, tbl_ruangan AS truang, tbl_peserta AS tpeserta
						   WHERE tdaftar.id_pendaftar = tpeserta.id_pendaftar AND tpeserta.kd_ruangan = truang.kd_ruangan AND tdaftar.id_pendaftar = $id_pendaftar";
				$info 		= $this->db->query($sqlCetak)->row_array();

				$pdf = new FPDF('P','mm','A4');
				$pdf->AddPage();
				// Logo
	    		$pdf->Image('assets/user/frontend/img/logo-pis.jpg', 10, 6, 20);
	    		// Bagian Header
		        $pdf->SetFont('Arial', 'B', 14);
		        $pdf->Cell(160, 0, 'Penerimaan Santri Baru', 0, 1, 'C');

		       	$pdf->SetFont('Arial', '', 10);
		        $pdf->Cell(190, 0, 'Jl. Banda Aceh-Medan Km. 16.5', 0, 1, 'R');

		        $pdf->SetFont('Arial', 'B', 13);
		        $pdf->Cell(160, 14, "Pesantren Imam Syafi'i", 0, 1, 'C');

		        $pdf->SetFont('Arial', '', 10);
		        $pdf->Cell(190, -14, 'Desa Reuhat Tuha Sibreh, Aceh Besar', 0, 1, 'R');

		        $pdf->SetFont('Arial', 'B', 12);
		        $pdf->Cell(160, 30, "Banda Aceh", 0, 1, 'C');

		        $pdf->SetFont('Arial', '', 10);
		        $pdf->Cell(190, -31, 'Telepon: 0651-7556-100', 0, 1, 'R');

		        // Garis Hr
		        $pdf->Line(10, 30, 200, 30);

		        // Info Peserta
		        $pdf->Cell(30, 55,'Nisn', 0, 0, 'L');
		        $pdf->Cell(88, 55,': '.$info['nisn'], 0, 0, 'L');
		        $pdf->Cell(33, 55,'Ruangan', 0, 0, 'L');
		        $pdf->Cell(40, 55,': '.$info['nama_ruangan'], 0, 1, 'L');

		        $pdf->Cell(30, -45,'Nama Peserta', 0, 0, 'L');
		        $pdf->Cell(88, -45,': '.$info['nama'], 0, 0, 'L');
		        $pdf->Cell(33, -45,'Tahun Penerimaan', 0, 0, 'L');
		        $pdf->Cell(40, -45,': 2018/2019', 0, 1, 'L');

		        $pdf->Cell(30, 55,'No Peserta', 0, 0, 'L');
		        $pdf->Cell(88, 55,': '.$info['no_peserta'], 0, 0, 'L');

		        // Spasi
		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(1, 10, '', 0, 1);

		        // Tabel Head
		        $pdf->Cell(10, 10, 'NO', 1, 0, 'C');
		        $pdf->Cell(70, 10, 'Jenis Tes', 1, 0, 'C');
		        $pdf->Cell(45, 10, 'Tanggal Tes', 1, 0, 'C');
		        $pdf->Cell(65, 10, 'Paraf', 1, 1, 'C');

		        // Tabel isi
		        $konten = $this->db->get('tbl_jadwal')->result();
		        $no=1;
		        foreach ($konten as $row) {
		        	$tgl_tes = $row->tanggal.'-'.$row->bulan.'-'.$row->tahun;
		        	$pdf->Cell(10, 10, $no, 1, 0, 'C');
		        	$pdf->Cell(70, 10, $row->jenis_kegiatan, 1, 0, 'C');
		        	$pdf->Cell(45, 10, $tgl_tes, 1, 0, 'C');
		        	$pdf->Cell(65, 10, '', 1, 1, 'C');
		        $no++;
		        }

		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(140, 10, '', 0, 0);
		        $pdf->SetFont('Arial', '', 10);
		        $pdf->Cell(50, 10, 'Banda Aceh, 10-Juni-2018', 0, 1);

		        // Stempel
	    		$pdf->Image('assets/user/frontend/img/stempel.png', 160, 167, 25);

		        $pdf->Cell(1, 10, '', 0, 1);
		        $pdf->Cell(1, 12, '', 0, 1);
		        $pdf->Cell(127, 10, '', 0, 0);
		        $pdf->Cell(33, 10, "Panitia PSB Pesantren Imam Syafi'i", 0, 1);

		        $name = $info['no_peserta'];
				$pdf->Output('D', $name.'Kartu-Ujian.pdf');
				//$pdf->Output();
				

			} else {
				$this->template->load('user/backend/template', 'user/backend/cetak_kartu/gagal_cetak');
			}
			
			
		}

	}

?>