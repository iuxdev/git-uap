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
		$this->load->model('muser');
		if ($this->muser->isSesion()) {
			$data['usuario']=$this->session->userdata('usuario');
			$this->load->view('pageAuth',$data);
		}else{
			$this->load->view('home');
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
		$config['max_size']	= '2000';
		
		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('pdf')){
			var_dump($this->upload->data());

			$this->load->helper('gpdf_thumb');
			 
			$pdf_file_url = base_url()."files/pdf/".$this->upload->data()['file_name'];
			echo $pdf_file_url;
			$file_path = "./files/pdfimage/pdf_thumb.png";
			saveGPDFThumb($pdf_file_url, $file_path);
			//show the image
			//echo "<p><a href=\"$pdfWithPath\"><img src=\"$thumbDirectory$thumb\" alt=\"\" /></a></p>";
		}else{
			var_dump($this->upload->display_errors());
		}
	}
}
