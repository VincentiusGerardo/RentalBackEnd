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
            $this->form_validation->set_rules('id','ID User','required|xss_clean|trim');
            $this->form_validation->set_rules('pass','Current Password','required|xss_clean|trim');
            $this->form_validation->set_rules('passN','New Password','required|xss_clean|trim');
            $this->form_validation->set_rules('passR','Repeat Password','required|xss_clean|trim');

            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('id');
                $p = $this->input->post('pass');
                $n = $this->input->post('passN');
                $r = $this->input->post('passR');

                $v = $this->mLogin->changePass($id,$p);
                if($v === true){
                    if($n !== $r){
                        $this->session->set_flashdata('alert', 'error');
                        $this->session->set_flashdata('msg', 'Password Mismatch!');
                        redirect($this->agent->referrer(),'refresh');
                    }else if($n === $p){
                        $this->session->set_flashdata('alert', 'error');
                        $this->session->set_flashdata('msg', 'New Password can not be the same as Old Password!');
                        redirect($this->agent->referrer(),'refresh');
                    }else{
                        $data = array('Password' => password_hash($n,PASSWORD_DEFAULT));
                        $r = $this->mLogin->updatePass($id,$data);
                        if($r){
                            $this->session->set_flashdata('alert', 'success');
                            $this->session->set_flashdata('msg', 'Password Changed!');
                            redirect($this->agent->referrer(),'refresh');
                        }else{
                            $this->session->set_flashdata('alert', 'error');
                            $this->session->set_flashdata('msg', 'Password Not Changed!');
                            redirect($this->agent->referrer(),'refresh');
                        }
                    }
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Wrong Password!');
                    redirect($this->agent->referrer(),'refresh');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Please input all the fields!');
                redirect('Admin/Module/');
            }
        }
    }
?>