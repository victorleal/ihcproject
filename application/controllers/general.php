<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class General extends CI_Controller {

	function General() {
		parent::__construct();
		if (!$this -> session -> userdata('logged'))
			redirect('login');
	}

	public function sobre() {
		$data['logged'] = $this -> session -> userdata('logged');

		// Load View
		$this -> load -> view('sobre', $data);
	}
	
	public function contato() {
		$data['logged'] = $this -> session -> userdata('logged');

		// Load View
		$this -> load -> view('contato', $data);
	}
}
?>