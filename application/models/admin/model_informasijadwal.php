<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class model_informasijadwal extends CI_Model
	{

		public $table = "tbl_jadwal";

		function save()
		{
			$tgl = $this->input->post('tanggal_tes', TRUE);
			list($m, $d, $y) = explode ( '/', $tgl);
			$data = array(
				//tabel di database => name di form
				'jenis_kegiatan'	=> $this->input->post('jenis_kegiatan', TRUE),
				'tanggal'			=> $d,
				'bulan'				=> $m,
				'tahun'				=> $y
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$tgl = $this->input->post('tanggal_tes', TRUE);
			list($m, $d, $y) = explode ( '/', $tgl);
			$data = array(
				//tabel di database => name di form
				'jenis_kegiatan'	=> $this->input->post('jenis_kegiatan', TRUE),
				//'tanggal'			=> $this->input->post('tanggal_tes', TRUE)
				'tanggal'			=> $d,
				'bulan'				=> $m,
				'tahun'				=> $y
			);

			$id_tes	= $this->input->post('id_tes');
			$this->db->where('id_tes', $id_tes);
			$this->db->update($this->table, $data);
		}

	}

?>