<?php
class Usuario extends CI_Model {
	private $salt = 'i550';

	public $USER_LEVEL_ALUNO = 1;
	public $USER_LEVEL_PROFESSOR = 2;
	public $USER_LEVEL_FUNCIONARIO = 3;
	public $USER_LEVEL_ADMIN = 4;

	public function get($id = false) {
		if ($id) {
			$this -> db -> where('id', $id);
		}
		$this -> db -> order_by('email', 'asc');
		$get = $this -> db -> get('usuario');
		if ($id) {
			return $get -> row_array();
		}
		if ($get -> num_rows > 0) {
			return $get -> result_array();
		}
		return array();
	}

	public function create($data) {
		$data['senha'] = sha1($data['senha'] . $this -> salt);
		return $this -> db -> insert('usuario', $data);
	}

	public function update($id, $data) {
		if (isset($data['senha']))
			$data['senha'] = sha1($data['senha'] . $this -> salt);
		$this -> db -> where('id', $id);
		$update = $this -> db -> update('usuario', $data);
		return $update;
	}

	public function delete($id) {
		$this -> db -> where('id', $id);
		$this -> db -> delete('usuario');
	}

	public function validate($email, $password) {
		$this -> db -> where('email', $email) -> where('senha', sha1($password . $this -> salt));
		$get = $this -> db -> get('usuario');

		if ($get -> num_rows > 0)
			return $get -> row_array();
		return array();
	}

	public function loginLog($id) {
		$data['usuario'] = $id;
		$this -> db -> insert('login_log', $data);
	}

}
?>