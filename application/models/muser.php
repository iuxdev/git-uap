<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class muser extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkUser($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $user);

		$query = $this->db->get();

		if ($query->num_rows()==0) {
			return -1;
		}

		$this->db->select('idUsuario,nombre,apellido,correo,usuario,foto,idTipoUsuario');
		$this->db->from('usuarios');
		$this->db->where('usuario', $user);
		$this->db->where('clave', $pass);

		$query = $this->db->get();

		if ($query->num_rows()==0) {
			return -2;
		}

		$this->session->set_userdata('usuario',$query->result()[0]);

		return 1;
	}
	public function isSesion()
	{
		if ($this->session->userdata('usuario')) {
			return true;
		}else{
			return false;
		}
	}
	public function typeUserSesion()
	{
		return $this->session->userdata('usuario')->idTipoUsuario;
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */