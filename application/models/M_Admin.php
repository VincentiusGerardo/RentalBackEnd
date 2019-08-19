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
            $this->db->select('a.*, b.JenisMobil');
            $this->db->from('ms_mobil a');
            $this->db->join('ms_jenismobil b', 'a.ID_JenisMobil = b.ID_JenisMobil','inner');
            $this->db->where('a.FlagActive','Y');
            $this->db->order_by('a.ID_Mobil', 'ASC');
            $q = $this->db->get();
            return $q->result();
        }

        public function getDataPelanggan(){
            $q = $this->db->get_where('ms_pelanggan', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function getDataTransaksi(){
            $q = $this->db->query('select a.*,b.NamaPelanggan, c.NamaMobil from tr_rental a, ms_pelanggan b, ms_mobil c where a.ID_Pelanggan = b.ID_Pelanggan and a.ID_Mobil = c.ID_Mobil order by a.ID_Rental asc ');
            return $q->result();
        }

        public function getDataJenisMobil(){
            $q = $this->db->get_where('ms_jenismobil', array('FlagActive' => 'Y'));
            return $q->result();
        }

        /* Mobil */

        public function getIDMobil(){
            $this->db->select('ID_Mobil');
            $this->db->order_by('ID_Mobil','DESC');
            $this->db->limit(1);
            $q = $this->db->get('ms_mobil');
            if($q->num_rows() > 0){
                $num = $q->row();
                return $num->ID_Mobil;
            }
        }

        public function addMobil($data){
            $q = $this->db->insert('ms_mobil',$data);
            if($q) return true; else return false;
        }

        public function editMobil($id,$data){
            $cond = array('ID_Mobil' => $id);
            $q = $this->db->update('ms_mobil',$data, $cond);
            if($q) return true; else return false;
        }
        
        public function deleteMobil($id){
            $cond = array('ID_Mobil' => $id);
            $status = array('FlagActive' => 'N');
            $q = $this->db->update('ms_mobil',$status, $cond);
            if($q) return true; else return false;
        }

        /* Jenis Mobil */

        public function addJenisMobil($data){
            $q = $this->db->insert('ms_jenismobil',$data);
            if($q) return true; else return false;
        }

        public function editJenisMobil($id,$data){
            $cond = array('ID_JenisMobil' => $id);
            $q = $this->db->update('ms_jenismobil',$data, $cond);
            if($q) return true; else return false;
        }

        public function deleteJenisMobil($id){
            $cond = array('ID_JenisMobil' => $id);
            $status = array('FlagActive' => 'N');
            $q = $this->db->update('ms_jenismobil',$status, $cond);
            if($q) return true; else return false;
        }

        /* Transaksi */
        public function ubahStatus($id,$data){
            $cond = array('ID_Rental' => $id);
            $q = $this->db->update('tr_rental',$data, $cond);
            if($q) return true; else return false;
        }
    }
?>