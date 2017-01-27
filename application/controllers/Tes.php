<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	public function index()
	{
		$this->template->load('template-auth','login');
	}

}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */