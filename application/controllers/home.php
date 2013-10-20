<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function Home()
    {
        parent::__construct();
         
        if(!$this->session->userdata('logged'))
            redirect('login');       
    }

	public function index() {
		// Load View
		$data['page_title'] = "Reserva Sala - FT/Unicamp";
		$data['logged'] = $this->session->userdata('logged');
		$this -> template -> show('home', $data);
	}
}
?>