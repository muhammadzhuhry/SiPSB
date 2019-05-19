<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_informasiberanda extends CI_Model
	{

		public $table = "tbl_beranda";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'beranda'		=> $this->input->post('form_beranda', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$beranda = $this->input->post('form_beranda');
			if (!empty($beranda)) {
				$data = array(
					//tabel di database => name di form
					'beranda'		=> $this->input->post('form_beranda',TRUE)
				);

				$id_beranda	= $this->input->post('id_beranda');
				$this->db->where('id_beranda', $id_beranda);
				$this->db->update($this->table, $data);
			} else {
				redirect('admin/informasi_beranda');
			}
			
		}

	}

?>