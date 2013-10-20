<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class SalaController extends CI_Controller {

	function Sala() {
		parent::__construct();
		if (!$this -> session -> userdata('logged'))
			redirect('login');
	}

	public function index() {
		$this -> load -> model('sala');
		$data['salas'] = $this -> sala -> get(false);

		$data['page_title'] = "Salas";
		$data['logged'] = $this -> session -> userdata('logged');

		// Load View
		$this -> template -> show('sala/listaSalas', $data);
	}

	public function add() {
		$data['logged'] = $this -> session -> userdata('logged');

		$data['page_title'] = "Nova Sala";
		$data['nome'] = '';
		$data['quantidadelugares'] = '';

		$this -> template -> show('sala/formCadSala', $data);
	}

	public function save() {
		$this -> load -> model('sala');
		$sql_data = array('Nome' => trim($_POST['nome']), 'QuantidadeLugares' => trim($_POST['qtdeLugares']));
		$this -> sala -> create($sql_data);
	}

}
?>