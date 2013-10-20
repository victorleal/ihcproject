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
		$this -> load -> model('usuario');
		$data['usuarios'] = $this -> usuario -> get(false);

		$data['page_title'] = "Usuários";
		$data['logged'] = $this -> session -> userdata('logged');

		// Load View
		$this -> load -> view('usuario/listaUsuarios', $data);
	}

	public function formCadUsuario() {
		$this -> session -> set_userdata(array('external' => false));
		$data['logged'] = $this -> session -> userdata('logged');
		$this -> load -> model('tipousuario');
		$data['tiposUsuario'] = $this -> tipousuario -> get();
		$data['page_title'] = "Novo Usuário";

		$this -> load -> view('usuario/formCadUsuario', $data);
	}

	public function formAltUsuario() {
		$data['logged'] = $this -> session -> userdata('logged');
		$id = trim($_POST['id']);
		$this -> load -> model('usuario');
		$data['usuario'] = $this -> usuario -> get($id);
		$this -> load -> model('tipousuario');
		$data['tiposUsuario'] = $this -> tipousuario -> get();
		$data['page_title'] = "Novo Usuário";

		$this -> load -> view('usuario/formAltUsuario', $data);
	}

	public function save() {
		$this -> load -> model('usuario');
		$sql_data = array('nome' => trim($_POST['nome']), 'matricula' => $_POST['matricula'],'email' => trim($_POST['email']), 'senha' => trim($_POST['senha']), 'telefone' => $_POST['telefone'], 'tipousuario' => trim($_POST['tipoUsuario']));
		$result = $this -> usuario -> create($sql_data);
		if ($result && $this -> session -> userdata('external')) {
			redirect('login');
		} else if ($result) {
			redirect('usuarios');
		}
	}

	public function update() {
		$this -> load -> model('usuario');
		$id = trim($_POST['id']);
		$sql_data = array('nome' => trim($_POST['nome']), 'matricula' => trim($_POST['matricula']),'email' => trim($_POST['email']), 'senha' => trim($_POST['senha']), 'telefone' => trim($_POST['telefone']), 'tipousuario' => trim($_POST['tipoUsuario']));
		$result = $this -> usuario -> update($id, $sql_data);
		if ($result) {
			redirect('usuarios');
		}
	}

	public function delete() {
		$this -> load -> model('usuario');
		$id = trim($_POST['id']);
		$this -> usuario -> delete($id);
		redirect('usuarios');
	}

}
?>