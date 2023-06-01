<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class A_siswa extends CI_Controller	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Model_siswa');
			$this->load->model('Model_kelas');
			$this->load->helper('form');
			$this->load->library('form_validation');

		}

		public function index()
		{
			$data = $this->session->level;
			if($data=='Admin'){
				$x = array(
					'tampil' => $this->Model_siswa->t_siswa(),
					'tampill' => $this->Model_kelas->t_kelas()
				);
				$header['judul'] = 'Siswa';
				$this->load->view('admin/template/header',$header);
				$this->load->view('admin/template/navbar');
				$this->load->view('admin/template/sidebar');
				$this->load->view('admin/siswa',$x);
				$this->load->view('admin/template/footer');
			}
			else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
				You must sign in with your account to access this page</div>');
				redirect('login');
			}
		}
		public function insert(){
			$this->form_validation->set_rules($this->Model_siswa->rules());
			if($this->form_validation->run()==false){
				$this->session->set_flashdata('pesan','gagal');
				$this->session->set_flashdata('Nama', form_error('Nama','<p class="text-danger col-md-auto">','</p>'));
				$this->session->set_flashdata('NIK', form_error('NIK','<p class="text-danger col-md-auto">','</p>'));
				$this->session->set_flashdata('NISN', form_error('NISN','<p class="text-danger col-md-auto">','</p>'));
				redirect('admin/a_siswa');
			}
			else{
			$this->session->set_flashdata('pesan','berhasil');
			$this->Model_siswa->insert();
			redirect('admin/a_siswa');
		}
	}
		public function hapusdata($id){
			$this->Model_siswa->hapus($id);
			$this->session->set_flashdata('pesan','hapus');
			redirect('admin/a_siswa');
		}

		public function update($id){
			$this->form_validation->set_rules($this->Model_siswa->rules());
			if($this->form_validation->run()==false){
				$this->session->set_flashdata('pesan','gagal');
				$this->session->set_flashdata('Nama', form_error('Nama','<p class="text-danger col-md-auto">','</p>'));
				$this->session->set_flashdata('NIK', form_error('NIK','<p class="text-danger col-md-auto">','</p>'));
				$this->session->set_flashdata('NISN', form_error('NISN','<p class="text-danger col-md-auto">','</p>'));
				redirect('admin/a_siswa');
			}
			else{
				$this->session->set_flashdata('pesan','berhasil');
				$this->Model_siswa->update($id);
				redirect('admin/a_siswa');
		}
	}
	}
?>