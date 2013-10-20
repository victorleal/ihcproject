<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Salas extends CI_Controller {

	function Salas() {
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
		$this -> load -> view('sala/listaSalas', $data);
	}

	public function formCadSala() {
		$data['logged'] = $this -> session -> userdata('logged');

		$data['page_title'] = "Nova Sala";
		$data['nome'] = '';
		$data['quantidadelugares'] = '';

		$this -> load -> view('sala/formCadSala', $data);
	}

	public function save() {
		$this -> load -> model('sala');
		$sql_data = array('Nome' => trim($_POST['nome']), 'QuantidadeLugares' => trim($_POST['qtdeLugares']));
		$this -> sala -> create($sql_data);
		redirect('salas');
	}

	public function formAltSala() {
		$data['logged'] = $this -> session -> userdata('logged');
		$id = trim($_POST['id']);
		$this -> load -> model('sala');
		$data['sala'] = $this -> sala -> get($id);

		$this -> load -> view('sala/formAltSala', $data);
	}
	
	public function update() {
		$this -> load -> model('sala');
		$id = trim($_POST['id']);
		$sql_data = array('Nome' => trim($_POST['nome']), 'QuantidadeLugares' => trim($_POST['qtdeLugares']));
		$this -> sala -> update($id, $sql_data);
		redirect('salas');
	}
	
	public function delete(){
		$this -> load -> model('sala');
		$id = trim($_POST['id']);
		$this -> sala -> delete($id);
		redirect('salas');
	}

}
?>