<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_peserta extends CI_Model
	{
		
		public $table = "tbl_peserta";

		function update_baru()
		{
			$tahun = date('Y');

			$data = array(
				// data calon santri
				'calon_peserta'			=> 'tidak',
				'peserta'				=> 'ya',
				'tahun_daftar'			=> $tahun,
				'no_peserta'			=> $this->input->post('no_peserta', TRUE),
				'kd_ruangan'			=> $this->input->post('ruangan', TRUE),
				// status kelulusan
				'status_kelulusan'		=> 'belum_mengikuti_ujian',
			);

			$id_peserta	= $this->input->post('id_peserta');
			$this->db->where('id_peserta', $id_peserta);
			$this->db->update($this->table, $data);
		}

		function update()
		{
			$data = array(
				// data calon santri
				'no_peserta'			=> $this->input->post('no_peserta', TRUE),
				'kd_ruangan'			=> $this->input->post('ruangan', TRUE),
				// status kelulusan
				'status_kelulusan'		=> $this->input->post('status_kelulusan', TRUE),
			);

			$nisn	= $this->input->post('nisn');
			$this->db->where('nisn', $nisn);
			$this->db->update($this->table, $data);
		}

		// ini untuk delete
		function empty_update($id_peserta)
		{
			$data = array(
				// data calon santri
				'calon_peserta'			=> 'ya',
				'peserta'				=> 'tidak',
				'tahun_daftar'			=> '',
				'no_peserta'			=> '',
				'kd_ruangan'			=> '',
				// status kelulusan
				'status_kelulusan'		=> '',
			);

			$this->db->where('id_peserta', $id_peserta);
			$this->db->update($this->table, $data);
		}

	}

?>