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
            $this->form_validation->set_rules('', '', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $data = array(
                    '' => $this->input->post(''),
                    'ID_Pengentri' => $this->session->userdata('username'),
                    'TanggalEntri' => date('Y-m-d')
                );
                $res = $this->mAdmin->addMobil($data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect($this->agent->referrer(),'refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect($this->agent->referrer(),'refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect($this->agent->referrer(),'refresh');
            }
        }
        
        public function doUpdateMobil(){

        }

        public function doUploadImageMobil(){

        }

        public function doDeleteMobil(){

        }

        /* Jenis Mobil */
        public function doInsertJenisMobil(){
            $this->form_validation->set_rules('jenisM', 'Jenis Mobil', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'Jenis' => $this->input->post('jenisM'),
                    'ID_Pengentri' => $this->session->userdata('username'),
                    'TanggalEntri' => date('Y-m-d')
                );
                $res = $this->mAdmin->addJenisMobil($data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect($this->agent->referrer(),'refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect($this->agent->referrer(),'refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect($this->agent->referrer(),'refresh');
            }
        }

        public function doUpdateJenisMobil(){
            $this->form_validation->set_rules('ide', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jenisMe', 'Jenis Mobil', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $data = array('Jenis' => $this->input->post('jenisMe'));
                $res = $this->mAdmin->editJenisMobil($this->input->post('ide'),$data);
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect($this->agent->referrer(),'refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Bot Updated!');
                    redirect($this->agent->referrer(),'refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect($this->agent->referrer(),'refresh');
            }
        }

        public function doDeleteJenisMobil(){
            $this->form_validation->set_rules('idd', 'ID', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $res = $this->mAdmin->deleteJenisMobil($this->input->post('idd'));
                if($res == TRUE){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect($this->agent->referrer(),'refresh');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Bot Deleted!');
                    redirect($this->agent->referrer(),'refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'There is an Empty Input!');
                redirect($this->agent->referrer(),'refresh');
            }
        }
    }
