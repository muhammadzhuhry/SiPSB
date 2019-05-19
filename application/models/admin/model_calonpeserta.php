<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_calonpeserta extends CI_Model
	{
		
		 public $table = "tbl_peserta";

		 function update()
		{
			$data = array(
				//tabel di database => name di form
				// data calon santri
				'nisn'					=> $this->input->post('nisn', TRUE),
				'tempat_lahir'			=> $this->input->post('tempat_lahir', TRUE),
				'tanggal_lahir'			=> $this->input->post('tanggal_lahir', TRUE),
				'alamat'				=> $this->input->post('alamat', TRUE),
				'asal_sekolah'			=> $this->input->post('asal_sekolah', TRUE),
				'alamat_sekolah_asal'	=> $this->input->post('alamat_sekolah_asal', TRUE),
				'no_ijazah'				=> $this->input->post('no_ijazah', TRUE),
				// data orang tua santri
				'nama_ayah'				=> $this->input->post('nama_ayah', TRUE),
				'pekerjaan_ayah'		=> $this->input->post('pekerjaan_ayah', TRUE),
				'nama_ibu'				=> $this->input->post('nama_ibu', TRUE),
				'pekerjaan_ibu'			=> $this->input->post('pekerjaan_ibu', TRUE),
				'alamat_orangtua'		=> $this->input->post('alamat_orangtua', TRUE),
				'no_telepon'			=> $this->input->post('no_telepon', TRUE),
				// status biodata dan verifikasi
				'status_biodata'			=> $this->input->post('status_biodata', TRUE),
				'status_verifikasi'			=> $this->input->post('status_verifikasi', TRUE),
			);

			$id_peserta	= $this->input->post('id_peserta');
			$this->db->where('id_peserta', $id_peserta);
			$this->db->update($this->table, $data);
		}

		function empty_update($nisn)
		{
			$data = array(
				//tabel di database => name di form
				// data calon santri
				'calon_peserta'			=> 'tidak',
				'tempat_lahir'			=> '',
				'tanggal_lahir'			=> '',
				'alamat'				=> '',
				'asal_sekolah'			=> '',
				'alamat_sekolah_asal'	=> '',
				'no_ijazah'				=> '',
				// data orang tua santri
				'nama_ayah'				=> '',
				'pekerjaan_ayah'		=> '',
				'nama_ibu'				=> '',
				'pekerjaan_ibu'			=> '',
				'alamat_orangtua'		=> '',
				'no_telepon'			=> '',
				// status biodata dan verifikasi
				'status_biodata'			=> 'belum_lengkap',
				'status_verifikasi'			=> 'belum_terverifikasi',
				// peserta
				'peserta'				=> 'tidak',
				'no_peserta'			=> '',
				'kd_ruangan'			=> '',
				'status_kelulusan'		=> '',
			);

			//$nisn	= $this->input->post('nisn');
			$this->db->where('nisn', $nisn);
			$this->db->update($this->table, $data);
		}

	}

?>