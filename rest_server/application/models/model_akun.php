<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class Model_Akun extends CI_Model{


       function daftar($data)
       {
            $this->db->insert('user',$data);
       }

  }
 