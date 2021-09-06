<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('Model_Akun'); //call model
    }

    public function index()
    {


        $this->form_validation->set_rules('username', 'USERNAME', 'required');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required');
        $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
        $this->form_validation->set_rules('id_usergroup', 'id_usergroup', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('akun/View_register');
        } else {

            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['id_usergroup'] = $this->input->post('id_usergroup');

            $this->Model_Akun->daftar($data);

            $pesan['message'] = "Pendaftaran berhasil";

            $this->load->view('akun/view_sukses', $pesan);
        }
    }
}
