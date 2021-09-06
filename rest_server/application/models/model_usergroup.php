<?php

class Model_Usergroup extends CI_Model
{

	public function getDatausergroup($id_usergroup = null)
	{
		if($id_usergroup === null){
			$semua_data_usergroup = $this->db->get('usergroup')->result();
			return $semua_data_usergroup;
		}else{
			$data_usergroup_byid_usergroup = $this->db->get_where('usergroup', ['id_usergroup'=>$id_usergroup])->result();
			return $data_usergroup_byid_usergroup;
		}
	}

	public function tambahusergroup($data)
	{
		$this->db->insert('usergroup', $data);
		return $this->db->affected_rows();
	}

	public function hapususergroup($id_usergroup)
	{
		$this->db->delete('usergroup', ['id_usergroup' => $id_usergroup]);
		return $this->db->affected_rows();
	}

	public function ubahusergroup($data, $id_usergroup)
	{
		$this->db->update('usergroup', $data, ['id_usergroup' => $id_usergroup]);
		return $this->db->affected_rows();
	}
}
?>