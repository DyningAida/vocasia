<?php

class Model_User extends CI_Model
{

	public function getDatauser($id_user = null)
	{
		if($id_user === null){
			$semua_data_user = $this->db->get('user')->result();
			return $semua_data_user;
		}else{
			$data_user_byid_user = $this->db->get_where('user', ['id_user'=>$id_user])->result();
			return $data_user_byid_user;
		}
	}

	public function tambahuser($data)
	{
		$this->db->insert('user', $data);
		return $this->db->affected_rows();
	}

	public function hapususer($id_user)
	{
		$this->db->delete('user', ['id_user' => $id_user]);
		return $this->db->affected_rows();
	}

	public function ubahuser($data, $id_user)
	{
		$this->db->update('user', $data, ['id_user' => $id_user]);
		return $this->db->affected_rows();
	}
}
?>