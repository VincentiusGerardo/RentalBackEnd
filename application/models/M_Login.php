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

        public function changePass($user,$pass){
            $q = $this->db->get_where('ms_admin',array('ID_Admin' => $user));
            if($q->num_rows() > 0){
                $row = $q->row();
                if(password_verify($pass,$row->Password)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function updatePass($id,$data){
            $q = $this->db->update('ms_admin',$data,array('ID_Admin' => $id));
            if($q) return true; else return false;
        }
    }
?>