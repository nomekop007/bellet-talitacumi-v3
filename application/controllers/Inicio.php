<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{
        $datos['titulo'] = 'Talita Cumi';
		$datos['banner'] = 'Ballet Cristiano Talita-Cumi';
		$this->load->view('headfooter/head',$datos);
        $this->load->view('inicio/talitacumi');
        $this->load->view('headfooter/footer');
        
	}

	public function historia(){

		$datos['titulo'] = 'Talita Cumi';
		$datos['banner'] = 'Historia de la Academia';
		$this->load->view('headfooter/head',$datos);
		$this->load->view('inicio/historia');
		$this->load->view('headfooter/footer');
 	}

	public function misionvision(){
		$datos['titulo'] = 'Talita Cumi';
		$datos['banner'] = 'Misión y Visión';
		$this->load->view('headfooter/head',$datos);
		$this->load->view('inicio/misionvision');
		$this->load->view('headfooter/footer');
	}

}
