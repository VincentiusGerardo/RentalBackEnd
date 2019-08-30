<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Action extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Admin','mAdmin');
            if(!$this->session->userdata('is_logged')){
                redirect('/','refresh');
            }
        }

        /* Mobil */
        public function doInsertMobil(){
            $this->form_validation->set_rules('namaM', 'Nama Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('plat', 'Plat Nomor Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hargaM', 'Harga', 'trim|required|xss_clean');
            $this->form_validation->set_rules('kap', 'Kapasitas', 'trim|required|xss_clean');
            $this->form_validation->set_rules('bag', 'Bagasi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('thn', 'Tahun Keluaran', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tarif', 'Tarif Driver', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jenis', 'Jenis Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('warna', 'Warna', 'trim|required|xss_clean');
            $this->form_validation->set_rules('trans', 'Transmisi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('bbm', 'Bahan Bakar', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar Mobil', 'trim|required|xss_clean');
            }

            if($this->form_validation->run() == TRUE){
                $x = $this->mAdmin->check($this->input->post('plat'));
                if($x == true){
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Plat Nomor ini sudah ada!');
                    redirect('Module/Mobil/','refresh');
                }else{
                    $n = $this->mAdmin->getIDMobil();
                    
                    $config['upload_path']          = './media/mobil/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['file_name']            = $n+1 . "_" . $this->input->post('namaM');
    
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('gambar')){
                        $data = array(
                            'NamaMobil' => $this->input->post('namaM'),
                            'PlatNomor' => $this->input->post('plat'),
                            'Harga' => $this->input->post('hargaM'),
                            'Kapasitas' => $this->input->post('kap'),
                            'Bagasi' => $this->input->post('bag'),
                            'TahunKeluaran' => $this->input->post('thn'),
                            'TarifDriver' => $this->input->post('tarif'),
                            'ID_JenisMobil' => $this->input->post('jenis'),
                            'Warna' => $this->input->post('warna'),
                            'PhotoURL' => $this->upload->data('file_name'),
                            'Transmisi' => $this->input->post('trans'),
                            'BahanBakar' => $this->input->post('bbm'),
                            'ID_Pengentri' => $this->session->userdata('username'),
                            'TanggalEntri' => date('Y-m-d H:i:s')
                        );
                        $res = $this->mAdmin->addMobil($data);
                        if($res == TRUE){
                            $this->session->set_flashdata('alert', 'success');
                            $this->session->set_flashdata('msg', 'Data Inserted!');
                            redirect('Module/Mobil/','refresh');
                        }else{
                            $this->session->set_flashdata('alert', 'error');
                            $this->session->set_flashdata('msg', 'Data Not Inserted!');
                            redirect('Module/Mobil/','refresh');
                        }
                    }else{
                        $this->session->set_flashdata('alert', 'error');
                        $this->session->set_flashdata('msg', $this->upload->display_errors());
                        redirect('Module/Mobil/','refresh');
                    }
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/Mobil/','refresh');
            }
        }
        
        public function doUpdateMobil(){
            $this->form_validation->set_rules('ide', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('namaME', 'Nama Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('platE', 'Plat Nomor Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hargaME', 'Harga', 'trim|required|xss_clean');
            $this->form_validation->set_rules('kapE', 'Kapasitas', 'trim|required|xss_clean');
            $this->form_validation->set_rules('bagE', 'Bagasi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('thnE', 'Tahun Keluaran', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tarifE', 'Tarif Driver', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jenisE', 'Jenis Mobil', 'trim|required|xss_clean');
            $this->form_validation->set_rules('warnaE', 'Warna', 'trim|required|xss_clean');
            $this->form_validation->set_rules('transE', 'Transmisi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('bbmE', 'Bahan Bakar', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'NamaMobil' => $this->input->post('namaME'),
                    'PlatNomor' => $this->input->post('platE'),
                    'Harga' => $this->input->post('hargaME'),
                    'Kapasitas' => $this->input->post('kapE'),
                    'Bagasi' => $this->input->post('bagE'),
                    'TahunKeluaran' => $this->input->post('thnE'),
                    'TarifDriver' => $this->input->post('tarifE'),
                    'ID_JenisMobil' => $this->input->post('jenisE'),
                    'Warna' => $this->input->post('warnaE'),
                    'Transmisi' => $this->input->post('transE'),
                    'BahanBakar' => $this->input->post('bbmE')
                );
                $res = $this->mAdmin->editMobil($this->input->post('ide'),$data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Module/Mobil/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Module/Mobil/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/Mobil/','refresh');
            }
        }

        public function doUploadImageMobil(){
            $this->form_validation->set_rules('ide', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nama', 'Nama Mobil', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar Mobil', 'trim|required|xss_clean');
            }

            if($this->form_validation->run() == TRUE){
                $idnya = $this->input->post('ide');
                $namanya = $this->input->post('nama');
                $change = pathinfo($namanya, PATHINFO_FILENAME) . "_" . date('d_m_Y_H:i:s');
                
                $config['upload_path']          = './media/mobil/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = TRUE;
                $config['file_name']            = $change;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('gambar')){
                    $data = array(
                        'PhotoURL' => $this->upload->data('file_name'),
                        'LastUpdate' => date('Y-m-d H:i:s')
                    );

                    $res = $this->mAdmin->editMobil($idnya,$data);
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Image Uploaded!');
                    redirect('Module/Mobil/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('Module/Mobil/','refresh');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Image!');
                redirect('Module/Mobil/','refresh');
            }
        }

        public function doDeleteMobil(){
            $this->form_validation->set_rules('idd', 'ID', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $res = $this->mAdmin->deleteMobil($this->input->post('idd'));
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Module/Mobil/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Module/Mobil/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/Mobil/','refresh');
            }
        }

        /* Jenis Mobil */
        public function doInsertJenisMobil(){
            $this->form_validation->set_rules('jenisM', 'Jenis Mobil', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'JenisMobil' => $this->input->post('jenisM'),
                    'ID_Pengentri' => $this->session->userdata('username'),
                    'TanggalEntri' => date('Y-m-d H:i:s')
                );
                $res = $this->mAdmin->addJenisMobil($data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Module/JenisMobil/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect('Module/JenisMobil/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/JenisMobil/','refresh');
            }
        }

        public function doUpdateJenisMobil(){
            $this->form_validation->set_rules('ide', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jenisMe', 'Jenis Mobil', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $data = array('JenisMobil' => $this->input->post('jenisMe'));
                $res = $this->mAdmin->editJenisMobil($this->input->post('ide'),$data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Module/JenisMobil/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Module/JenisMobil/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/JenisMobil/','refresh');
            }
        }

        public function doDeleteJenisMobil(){
            $this->form_validation->set_rules('idd', 'ID', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $res = $this->mAdmin->deleteJenisMobil($this->input->post('idd'));
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Module/JenisMobil/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Module/JenisMobil/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect($this->agent->referrer(),'refresh');
            }
        }

        public function doValidasi(){
            $this->form_validation->set_rules('id', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jawaban', 'Validasi', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $jwb = $this->input->post('jawaban');
                if($jwb == "Y"){
                    $data = array(
                        'StatusPembayaran' => 'Y',
                        'ValidasiOleh' => $this->session->userdata('username')
                    );
                }else{
                    $data = array(
                        'StatusPembayaran' => 'D',
                        'ValidasiOleh' => $this->session->userdata('username')
                    );
                }
                $res = $this->mAdmin->ubahStatus($this->input->post('id'), $data);

                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Status Updated!');
                    redirect('Module/Transaksi/','refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Status Not Updated!');
                    redirect('Module/Transaksi/','refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect('Module/Transaksi/','refresh');
            }
        }
    }
