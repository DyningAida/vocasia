<?php

class Model_Login extends CI_Model
{

	//fungsi untuk menyimpan data user yang melakukan register
	public function simpan_data_register($data){
		return $this->db->insert('user', $data);
	}

	//fungsi untuk cek data saat login
	public function cek_login($username, $password){

		$this->db->select('user_id');
		$this->db->from('user');
		$this->db->where('username', $username);
		$data = $this->db->get('user');
		$user =$data->row();

		//untuk cek password
		if(!empty($username)){
			if(password_verify($password, $user->password)){
				return $data->result();
			}else{
				return false;
				echo "password yang anda masukkan tidak sesuai, silakan cek kembali password yang anda masukkan";
			}
		} else{
			return false;
			echo "cek kembali username Anda";
		}
		return var_dump($user);
	}
    public function apikey_byid($id)
    {
        $data_apikey = $this->db->get_where('api_keys', ['user_id' => $id])->result();
        return $data_apikey;
    }
    public function tambahApikey($data)
    {
        $this->db->insert('api_keys', $data);
        return $this->db->affected_rows();
    }

	/*
    function generate($data)
    {
        $this->load->helper(array('url','string','html'));
        $this->db->where('user_id', $data['user_id']);
        $result = $this->db->get('api_keys')->result();
        if (count($result) != 1) {
            $api_key = random_string('sha1',20);
            $insert = [
                'user_id' => $data['user_id'],
                'key' => $api_key,
                'level' => 1,
                'ignore_limits' => 1,
                'is_private_key' => 1,
                'ip_addresses' => $this->get_client_ip(),
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('api_keys',$insert);
            $this->session->userdata['key'] = $api_key;

        } else {
            $api_key = random_string('sha1',20);
            $update=[
                'key' => $api_key,
                'ip_addresses' => $this->get_client_ip(),
                'date_created' => date('Y-m-d')
            ];
            $this->db->where('user_id',$data['user_id']);
            $this->db->update('key', $update);
            $this->session->userdata['api_keys'] = $api_key;
        }
        redirect('dashboard');
    }
    */

    
    function get_client_ip() {
       
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    
    }





}
?>