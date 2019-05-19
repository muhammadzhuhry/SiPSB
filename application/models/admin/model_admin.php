<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class model_admin extends CI_Model
	{

		public $table = "tbl_admin";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'nama_lengkap'	=> $this->input->post('nama_lengkap', TRUE),
				'username'		=> $this->input->post('username',TRUE),
				'password'		=> md5($this->input->post('password')),
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
				//tabel di database => name di form
				'nama_lengkap'	=> $this->input->post('nama_lengkap', TRUE),
				'username'		=> $this->input->post('username',TRUE)
			);

			$id_admin	= $this->input->post('id_admin');
			$this->db->where('id_admin', $id_admin);
			$this->db->update($this->table, $data);
		}
		
		function checkLogin($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$admin = $this->db->get('tbl_admin')->row_array();
			return $admin;
		} 

	}

?>