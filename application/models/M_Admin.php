<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Admin extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getUserName($uname){
            $c = array('ID_Admin' => $uname);
            $query = $this->db->get_where('ms_admin',$c);
            if($query->num_rows() > 0){
                $res = $query->row();
                return $res->Nama;
            }
        }

        public function getDataMobil(){
            $q = $this->db->get_where('ms_mobil', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function getDataPelanggan(){

        }

        public function getDataTransaksi(){

        }

        public function getJenisMobil(){
            
        }

        public function addMobil(){

        }

        public function editMobil(){

        }
        
        public function deleteMobil(){

        }

        public function ubahStatus(){

        }
    }
?>