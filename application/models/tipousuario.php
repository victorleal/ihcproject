<?php
class TipoUsuario extends CI_Model {

	public function get($id = false) {
		if ($id) {
			$this -> db -> where('id', $id);
		}
		$this -> db -> order_by('descricao', 'asc');
		$get = $this -> db -> get('tipousuario');
		if ($id) {
			return $get -> row_array();
		}
		if ($get -> num_rows > 0) {
			return $get -> result_array();
		}
		return array();
	}

	public function create($data) {
		$data['password'] = sha1($data['password'] . $this -> salt);
		return $this -> db -> insert('usuario', $data);
	}

	public function update($id, $data) {
		if (isset($data['password']))
			$data['password'] = sha1($data['password'] . $this -> salt);
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