<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
	class model_formbiodata extends CI_Model
	{
		
		public $table = "tbl_peserta";

		function save()
		{

			$tanggal_daftar = date('d-m-Y');

			$data = array(
				//tabel di database => name di form
				// data calon santri
				'nisn'					=> $this->input->post('nisn', TRUE),
				'id_pendaftar'			=> $this->session->userdata('id_pendaftar'),
				//'nama'				=> $this->set_userdata('nama_lengkap'),
				'calon_peserta'			=> 'ya',
				'tanggal_daftar'		=> $tanggal_daftar,
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
				'status_biodata'			=> 'belum_lengkap',
				'status_verifikasi'			=> 'belum_terverifikasi',
			);
			$this->db->insert($this->table, $data);
		}

		function check($id_pendaftar)
		{
			//$this->db->where('nisn', $nisn);
			$query = "SELECT tpendaftaran.*, tpeserta.*
					 FROM tbl_pendaftaran AS tpendaftaran, tbl_peserta AS tpeserta 
					 WHERE tpendaftaran.id_pendaftar = tpeserta.id_pendaftar AND tpendaftaran.id_pendaftar = '$id_pendaftar'";
			// $check_data = $this->db->get_where('tbl_peserta', array('id_pendaftar' => $id_pendaftar, 'calon_peserta' => 'tidak'))->row_array();
			$check_data = $this->db->query($query)->row_array();
			return $check_data;
		}

	}

?>