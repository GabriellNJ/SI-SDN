<?php

    class Model_siswa extends CI_model{
        function t_siswa(){
            $this->db->select('*');
            $this->db->from('tbl_siswa');
            $this->db->join('tbl_kelas', 'tbl_siswa.siswa_kelas_id = tbl_kelas.kelas_id');
            $query = $this->db->get();
            return $query->result_array();
        }
        function rules(){
            return array(
                array(  'field' => 'Nama',
                        'label' => 'Nama',
                        'rules' => "required|trim"),
        
                array(  'field' => 'NIK',
                        'label' => 'NIK',
                        'rules' => "'trim|required|numeric|min_length[16]|max_length[17]|is_unique[tbl_siswa.siswa_nik]"),
        
               
                array(  'field' => 'NISN',
                        'label' => 'NISN',
                        'rules' => "'trim|required|numeric|min_length[9]|max_length[10]|is_unique[tbl_siswa.siswa_nisn]"),
        
            );
        }
        function insert(){
            
            $data = [
                "siswa_nama" => $this->input->post("Nama",true),
                "siswa_jenkel" => $this->input->post("JK",true),
                "siswa_tgl_lahir" => $this->input->post("Tgl",true),
                "siswa_nama_ibu" => $this->input->post("Ibu",true),
                "siswa_nik" => $this->input->post("NIK",true),
                "siswa_nisn" => $this->input->post("NISN",true),
                "siswa_kelas_id" => $this->input->post("kelas",true),
            ];
            $this->db->insert('tbl_siswa',$data);
            $this->session->set_flashdata('pesan','berhasil');
        }

       
        function hapus($id){
            $this->db->where('siswa_id',$id);
            $this->db->delete('tbl_siswa');
            $this->session->set_flashdata('pesan','hapus');
        }

        function update($id){
           
                $data = [
                    "siswa_nama" => $this->input->post("Nama",true),
                    "siswa_jenkel" => $this->input->post("JK",true),
                    "siswa_tgl_lahir" => $this->input->post("Tgl",true),
                    "siswa_nama_ibu" => $this->input->post("Ibu",true),
                    "siswa_nik" => $this->input->post("NIK",true),
                    "siswa_nisn" => $this->input->post("NISN",true),
                    "siswa_kelas_id" => $this->input->post("kelas",true),
                ];
            $this->db->where('siswa_id',$id);
            $this->db->update('tbl_siswa',$data);
            $this->session->set_flashdata('pesan','update');
        }

        function get_tabel(){
            //konfigurasi pagination
           $config['base_url'] = site_url('Siswa/index'); //site url
           $config['total_rows'] = $this->db->count_all('tbl_siswa'); //total row
           $config['per_page'] = 12;  //show record per halaman
           $config["uri_segment"] = 3;  // uri parameter
           $choice = $config["total_rows"] / $config["per_page"];
           $config["num_links"] = floor($choice);

           // Membuat Style pagination untuk BootStrap v4
           $config['first_link']       = 'First';
           $config['last_link']        = 'Last';
           $config['next_link']        = 'Next';
           $config['prev_link']        = 'Prev';
           $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
           $config['full_tag_close']   = '</ul></nav></div>';
           $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
           $config['num_tag_close']    = '</span></li>';
           $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
           $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
           $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
           $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
           $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
           $config['prev_tagl_close']  = '</span>Next</li>';
           $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
           $config['first_tagl_close'] = '</span></li>';
           $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
           $config['last_tagl_close']  = '</span></li>';

           $this->pagination->initialize($config);
               
           $data = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           
           $this->db->select('*');
           $this->db->from('tbl_siswa');
           $this->db->join('tbl_kelas', 'tbl_siswa.siswa_kelas_id = tbl_kelas.kelas_id');
           $this->db->limit($config["per_page"], $data);
           $query = $this->db->order_by('siswa_nama', 'ASC');
           $query = $this->db->get();
           return $query;
        }
    }
?>