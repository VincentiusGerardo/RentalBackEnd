<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Login','mLogin');
        }

        public function index(){
            if(!$this->session->userdata('is_logged')){
                $this->load->view('v_login');
            }else{
                redirect('Module/');
            }
        }

        public function doLogin(){
            $user = $this->input->post('username');
            $pass = $this->input->post('password');

            if($user != "" && $pass != ""){
                $result = $this->mLogin->login($user,$pass);
                
                if($result == true){
                    $data = array(
                        'username' => $user,
                        'is_logged' => true
                    );
                    $this->session->set_userdata($data);
                    redirect('Module/','refresh');
                }else{
                    redirect('/','refresh');
                }
            }else{
                redirect('/','refresh');
            }
        }

        public function doLogout(){
            $this->session->sess_destroy();
            redirect('/','refresh');
        }

        public function doChangePassword(){

        }
    }
?>