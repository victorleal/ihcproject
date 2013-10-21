<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Reservas extends CI_Controller {

	function Reservas() {
		parent::__construct();
		if (!$this -> session -> userdata('logged'))
			redirect('login');
	}

	public function index() {
		$this -> load -> model('reserva');
		$data['reservas'] = $this -> reserva -> get(false);

		$data['page_title'] = "reservas";
		$data['logged'] = $this -> session -> userdata('logged');

		// Load View
		$this -> load -> view('reserva/listaReservas', $data);
	}

	public function formCadReserva() {
		$data['logged'] = $this -> session -> userdata('logged');
		$this -> load -> model('sala');
		$data['salas'] = $this -> sala -> get();
		$data['usuario'] = $this -> session -> userdata('nome');
		$data['id'] = $this -> session -> userdata('user');
		$data['page_title'] = "Nova Reserva";

		$this -> load -> view('reserva/formCadReserva', $data);
	}

	public function save() {
		$this -> load -> model('reserva');
		$sql_data = array('usuario' => trim($_POST['responsavel']), 
							'sala' => trim($_POST['sala']),
							'evento' => trim($_POST['evento']),
							'data' => trim($_POST['data']),
							'inicio' => trim($_POST['inicio']),
							'fim' => trim($_POST['fim'])
						);
		$this -> reserva -> create($sql_data);
		redirect('reservas');
	}

	public function formAltReserva() {
		$data['logged'] = $this -> session -> userdata('logged');
		$id = trim($_POST['id']);
		$this -> load -> model('reserva');
		$data['reserva'] = $this -> reserva -> get($id);

		$this -> load -> view('reserva/formAltReserva', $data);
	}

	public function update() {
		$this -> load -> model('reserva');
		$id = trim($_POST['id']);
		$sql_data = array('Nome' => trim($_POST['nome']), 'QuantidadeLugares' => trim($_POST['qtdeLugares']));
		$this -> reserva -> update($id, $sql_data);
		redirect('reservas');
	}

	public function delete() {
		$this -> load -> model('reserva');
		$id = trim($_POST['id']);
		$this -> reserva -> delete($id);
		redirect('reservas');
	}

}
?>