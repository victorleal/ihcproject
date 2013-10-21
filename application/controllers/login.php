<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		// Load View
		$data['page_title'] = "Login";

		$data['usuario'] = '';
		$data['senha'] = '';

		$this -> template -> show('login', $data);
	}

	public function validate() {
		$this -> load -> model('usuario');
		$result = $this -> usuario -> validate($this -> input -> post('usuario'), $this -> input -> post('senha'));

		if ($result) {
			$this -> session -> set_userdata(array('logged' => true, 'user' => $result['id'], 'level' => $result['level'], 'nome' => $result['nome']));
			$this -> usuario -> loginLog($result['id']);
			redirect('home');
		} else {
			// Load View
			$data['page_title'] = "Login";

			$data['usuario'] = $this -> input -> post('usuario');
			$data['senha'] = $this -> input -> post('senha');

			$data['error'] = true;

			$this -> template -> show('login', $data);
		}
	}

	public function logout() {
		$this -> session -> unset_userdata('logged');

		redirect('login');
	}

	public function adicionarUsuario() {
		$this -> session -> set_userdata(array('external' => true));
		$this -> load -> model('tipousuario');
		$data['tiposUsuario'] = $this -> tipousuario -> get();
		$this -> template -> show('novoUsuario', $data);
	}

}
?>