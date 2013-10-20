<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function Usuarios() {
		parent::__construct();
		if (!$this -> session -> userdata('logged') && !$this -> session -> userdata('external'))
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

	public function add() {
		$data['logged'] = $this -> session -> userdata('logged');

		$data['page_title'] = "Nova Sala";
		$data['nome'] = '';
		$data['quantidadelugares'] = '';

		$this -> template -> show('sala/formCadSala', $data);
	}

	public function save() {
		$this -> load -> model('usuario');
		$sql_data = array('nome' => trim($_POST['nome']), 'email' => trim($_POST['email']), 'senha' => trim($_POST['senha']), 'tipousuario' => trim($_POST['tipoUsuario']));
		$result = $this -> usuario -> create($sql_data);
		if ($result && $this -> session -> userdata('external')) {
			redirect('login');
		} else if ($result) {
			redirect('index');
		}
	}

}
?>