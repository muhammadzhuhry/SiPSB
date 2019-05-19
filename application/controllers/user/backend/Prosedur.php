<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Prosedur extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			ruleuser();
		}

		function index()
		{
			$this->template->load('user/backend/template', 'user/backend/prosedur/view');
		}

	}

?>