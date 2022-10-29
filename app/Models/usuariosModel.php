<?php namespace App\Models;
	use CodeIgniter\Model;

	class usuariosModel extends Model {
		public function getUsuario($data) {
			$usuario = $this->db->table('usuarios');
			$usuario->where($data);
			return $usuario->get()->getResultArray();
		}
	}