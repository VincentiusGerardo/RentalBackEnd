<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class API extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Admin','mAdmin');
            header('Content-Type: application/json');
        }
        
        public function Register(){
            $json = file_get_contents('php://input');
            $obj = json_decode($json,true);
            $data = array(
                'NamaPelanggan' => $obj['n'],
                'JK' => $obj['j'],
                'NIK' => $obj['ni'],
                'Alamat' => $obj['a'],
                'TanggalLahir' => $obj['t'],
                'Email' => $obj['e'],
                'NomorHP' => $obj['tlp'],
            );
            $res = $this->mAdmin->insertUser($data);
            if($res == true){
                $data['message'] = array('status' => 1);
                print_r(json_encode($data));
            }else{
                $data['message'] = array('status' => 2);
                print_r(json_encode($data));
            }
        }
        
        public function Mobil(){
            $data['mobil'] = $this->mAdmin->getDataMobil();
            print_r(json_encode($data));
        }
        
        public function detailMobil($id){
            $data['mobil'] = $this->mAdmin->getDetailMobil($id);
            print_r(json_encode($data));
        }
        
        public function dataUser(){
            $json = file_get_contents('php://input');
            $obj = json_decode($json,true);
            $data['user'] = $this->mAdmin->getDataUser($obj['email']);
            print_r(json_encode($data));
        }
        
        public function namaUser(){
            $json = file_get_contents('php://input');
            $obj = json_decode($json,true);
            $data['nama'] = $this->mAdmin->getNamaUser($obj['email']);
            print_r(json_encode($data));
        }
        
        public function insertTransaksi(){
            $json = file_get_contents('php://input');
            $obj = json_decode($json,true);
            $data = array(
                'ID_Pelanggan' => $this->mAdmin->getID($obj['email']),
                'ID_Mobil' => $obj['idMobil'],
                'TanggalBooking' => $obj['tgl'],
                'WaktuAmbil' => $obj['wA'],
                'WaktuKembali' => $obj['wB'],
                'Biaya' => $obj['price']
            );
            $res = $this->mAdmin->insertT($data);
        }
        
        public function history(){
            $json = file_get_contents('php://input');
            $obj = json_decode($json,true);
            $data['history'] = $this->mAdmin->getHistory($obj['email']);
            print_r(json_encode($data));
        }
        
        public function uploadPembayaran(){
            
        }
    }
?>