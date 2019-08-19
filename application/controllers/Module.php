<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Module extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Admin','mAdmin');
            if(!$this->session->userdata('is_logged')){
                redirect('/','refresh');
            }
        }

        public function getHeader(){
            $data['NamaUser'] = $this->mAdmin->getUserName($this->session->userdata('username'));
            $this->load->view('header',$data);
        }

        public function index(){
            $this->getHeader();
            $this->load->view('v_home');
            $this->load->view('footer');
        }

        public function mobil(){
            $data['mobil'] = $this->mAdmin->getDataMobil();
            $data['jenis'] = $this->mAdmin->getDataJenisMobil();
            $this->getHeader();
            $this->load->view('v_mobil',$data);
            $this->load->view('modal/modal_mobil',$data);
            $this->load->view('footer');
        }

        public function pelanggan(){
            $data['pelanggan'] = $this->mAdmin->getDataPelanggan();
            $this->getHeader();
            $this->load->view('v_pelanggan',$data);
            $this->load->view('footer');
        }

        public function transaksi(){
            $data['transaksi'] = $this->mAdmin->getDataTransaksi();
            $this->getHeader();
            $this->load->view('v_transaksi',$data);
            $this->load->view('modal/modal_transaksi',$data);
            $this->load->view('footer');
        }

        public function jenismobil(){
            $data['jenis'] = $this->mAdmin->getDataJenisMobil();
            $this->getHeader();
            $this->load->view('v_jenismobil',$data);
            $this->load->view('modal/modal_jenismobil',$data);
            $this->load->view('footer');
        }
    }
?>