<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_pendaftaran extends CI_Model
	{
		
		 public $table = "tbl_pendaftaran";

		 function update()
		{
			$data = array(
				'nama'          => $this->input->post('nama', TRUE),
				'panggilan'     => $this->input->post('panggilan', TRUE),
				'email'         => $this->input->post('email', TRUE)
			);

			$id_pendaftar	= $this->input->post('id_pendaftar');
			$this->db->where('id_pendaftar', $id_pendaftar);
			$this->db->update($this->table, $data);
		}

	}

?>