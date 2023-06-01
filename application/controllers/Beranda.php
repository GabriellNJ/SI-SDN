<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct(){
        parent::__construct();

		$this->load->model('Model_agenda');
		$this->load->model('Model_galeri');
		$this->load->model('Model_pengumuman');
	}
	
		public function index(){	
		$header['agenda'] = $this->Model_agenda->sidebar();
		$header['galeri'] = $this->Model_galeri->sidebar();
		$header['pengumuman'] = $this->Model_pengumuman->sidebar();
		$header['judul'] = 'Home';
		$this->load->view('front/index',$header);
	}
}
