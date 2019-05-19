<?php

	function auto_nopeserta()
	{
		$tahun = date('Y');
		$ci    	= get_instance();
		// Ambil No Peserta terakhir dari Table
		$check 	= $ci->db->query("select no_peserta from tbl_peserta order by no_peserta desc");
		if ($check->num_rows() > 0) {
			// variabel check pertama tidak dibikin row_array karena agar bisa terbaca num_rowsnya
			$check 	= $check->row_array();
			// Memasukan No Peserta terakhir ke dalam variabel
			$last  	= $check['no_peserta'];
			// Mengambil kode uniknya, contoh PIS20180001 -> yang ditampilkan hanya 0001
			$unique	= substr($last, 7,4)+1;
			$new 	= "PIS".$tahun.sprintf("%04s", $unique);
			return $new;
		} else {
			return "PIS".$tahun."0001";
		}
	}

	function cmb_dinamis($name, $table, $field, $pk, $selected=null, $extra=null)
	{
		$ci   = get_instance();
		$cmb  = "<select name='$name' class='form-control' $extra>";

		$data = $ci->db->get($table)->result();
		foreach ($data as $row) {
			$cmb .= "<option value='".$row->$pk."'";
			//Apabila $selected bernilai sama dengan nilai $pk maka akan bernilai selected selain itu akan bernilai null
			$cmb .= $selected == $row->$pk ? 'selected' : '';
			$cmb .= ">".$row->$field."</option>";
		}
		$cmb .= "</select>";

		return $cmb;
	}

	function ruleadmin() 
	{
		$ci = get_instance();
		$id_admin = $ci->session->userdata('id_admin');
		$check = $ci->db->get_where('tbl_admin', array('id_admin' => $id_admin))->row_array();
		if (empty($check)) {
			//echo "Anda Harus Login Terlebih Dahulu!";
			echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
		 		 window.location='".base_url()."login'
	 			 </script>";
			die;
		}
	}

	function ruleuser() 
	{
		$ci = get_instance();
		$id_user = $ci->session->userdata('id_pendaftar');
		$check = $ci->db->get_where('tbl_pendaftaran', array('id_pendaftar' => $id_user))->row_array();
		if (empty($check)) {
			//echo "Anda Harus Login Terlebih Dahulu!";
			echo "<script>alert('Anda Harus Login Terlebih Dahulu!');
		 		 window.location='".base_url()."user/frontend/tampilan_utama/halaman_login'
	 			 </script>";
			die;
		}
	}

	function get_random_password($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=true, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }
                                
        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                
        
      return $password;
    }

?>