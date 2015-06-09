<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('muser');
	}

	public function index()
	{
		//if(!isset($_POST['sis'])){
			//redirect('Home');
		//}

		//5 = no lista usuarios
		//4,3=lista 5
		//2 = lista 3,4,5
		//1 = lista 2,3,4,5

		if ($this->muser->isSesion()) {
			echo "sesion abierta";
		}else{
			redirect(base_url().'home');
		}

	}

	public function login()
	{
		if(!isset($_POST['sis'])){
			redirect(base_url().'home');
		}

		if ( isset($_POST['user']) && isset($_POST['pass']) ){
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			echo $this->muser->checkUser($user,$pass);
		}else{
			echo 0;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */