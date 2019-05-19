<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
	class model_informasiprosedur extends CI_Model
	{

		public $table = "tbl_prosedur";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'prosedur'		=> $this->input->post('form_prosedur', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$prosedur = $this->input->post('form_prosedur');
			if (!empty($prosedur)) {
				$data = array(
					//tabel di database => name di form
					'prosedur'		=> $this->input->post('form_prosedur',TRUE)
				);

				$id_prosedur	= $this->input->post('id_prosedur');
				$this->db->where('id_prosedur', $id_prosedur);
				$this->db->update($this->table, $data);
			} else {
				redirect('admin/informasi_prosedur');
			}
			
		}

	}

?>