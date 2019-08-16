<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Login extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function login($user, $pass){
            $query = $this->db->get_where('ms_admin', array('ID_Admin' => $user));
            if($query->num_rows() > 0){
                $x = $query->row();
                $stored = $x->Password;
            }
            if(password_verify($pass,$stored)){
                return true;
            }else{
                return false;
            }
        }

        public function checkPass($user){
            
        }
    }
?>