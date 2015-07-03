<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Muser');
		if ($this->Muser->isSesion()) {
			$data['usuario']=$this->session->userdata('usuario');
			if($data['usuario']->idTipoUsuario<5){
				$header='template/header_admin';
			}else{
				$header='template/header_user';
			}

			$data_header= '';
			$data_body= '';
			$data_footer= '';
			$data = array(
			    'title' => 'Repositorio de Tesis',
			    'style' => array(),
			    'script' => array(),
			    'header' => $this->load->view($header, $data_header, true),
			    'body' =>array(
			    	$this->load->view('backend/banner', '', true),
			    	$this->load->view('backend/index', '', true),
			    ),
			    'footer' => $this->load->view('template/footer', $data_footer, true)
			);

			$this->load->view('template/index', $data);

		}else{
			$data_header= '';
			$data_body= '';
			$data_footer= '';
			$data = array(
			    'title' => 'Repositorio de Tesis',
			    'style' => array(),
			    'script' => array('login.js'),
			    'header' => $this->load->view('template/header', $data_header, true),
			    'body' =>array(
			    	$this->load->view('frontend/banner', '', true),
			    	$this->load->view('frontend/index', '', true),
			    	$this->load->view('frontend/login', '', true)
			    ),
			    'footer' => $this->load->view('template/footer', $data_footer, true)
			);

			$this->load->view('template/index', $data);
		}

	}
	public function error404()
	{
		echo "error";
		$this->load->view('home');
	}
	public function subir()
	{
		$config['upload_path'] = './files/pdf/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '10000';

		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('pdf')){
		 	var_dump($this->upload->data());

			$pdf_file   = 'files/pdf/'.$this->upload->data()['raw_name'].'.pdf';
			$save_to    = 'files/pdfimage/'.$this->upload->data()['raw_name'].'.jpg';

			if (! is_readable('./'.$pdf_file)) {
			    echo 'Este archivo no se puede leer.';
			    exit();
			}
			try{
				$img = new Imagick('./'.$pdf_file.'[0]');
				$img->setResolution(300, 300);
				$img->setImageFormat('jpg');
				$img->writeImages('./'.$save_to, false);
				echo '<img src="'.base_url().$save_to.'" alt="">';
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}else{
			var_dump($this->upload->display_errors());
		}
	}
}
