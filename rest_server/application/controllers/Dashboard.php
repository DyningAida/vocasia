<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Model_Login', 'login');
     }

     public function index() {
     	$id = $this->session->userdata('id');
        $dataAll = $this->login->apikey_byid($id);
        if ($dataAll) {
            $data['apikey'] = $dataAll[0]->key;
        } else {
            $data['apikey'] = "";
        }
         $this->load->view('akun/view_dashboard', $data);
     }


    public function tambahApikey($data)
    {
        $this->db->insert('api_keys', $data);
        return $this->db->affected_rows();
    }

    public function generate()
    {
        $this->load->helper(array('url','string','html'));
        $key = random_string('sha1',20);
        
        $data['user_id'] = $this->session->userdata('id');
        $data['key'] = $key;
        $data['level'] = 1;
        $data['ignore_limits'] = 0;
        $data['is_private_key'] = 0;
      
        $data['ip_addresses'] = $this->get_client_ip();
        $data_apikey = $this->login->tambahApikey($data);
        if ($data_apikey) {
            $this->index();
        } else {
            echo "data tidak ditemukan";
        }
    }


    public function get_client_ip()
    {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


 }
?>