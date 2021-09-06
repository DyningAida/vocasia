<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 

 
 class Simple_login {
 
     var $CI = NULL;

     public function __construct() {
         $this->CI =& get_instance();
     }
 
     public function login($username, $password) {
         
         
         $query = $this->CI->db->get_where('user',array('username'=>$username,'password' => $password));
 
         if($query->num_rows() == 1) {
         
             $row  = $this->CI->db->query('SELECT id_user FROM user where username = "'.$username.'"');
             $admin     = $row->row();
             $id   = $admin->id_user;
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id', $id);
             

             redirect(site_url('dashboard'));
         }else{
 
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
             redirect(site_url('login'));
         }
          return false;
      }
 
     public function cek_login() {
 
         if($this->CI->session->userdata('username') == '') {
        
             $this->CI->session->set_flashdata('sukses','Anda belum login');
 
             redirect(site_url('login'));
         }
     }
 
     public function logout() {
         $this->CI->session->unset_userdata('username');

         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect(site_url('login'));
     }
 }