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
            $this->getHeader();
            $this->load->view('v_mobil');
            $this->load->view('footer');
        }

        public function pelanggan(){
            $this->getHeader();
            $this->load->view('v_pelanggan');
            $this->load->view('footer');
        }

        public function transaksi(){
            $this->getHeader();
            $this->load->view('v_transaksi');
            $this->load->view('footer');
        }
    }
?>