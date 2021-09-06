<?php

class Model_Apikey extends CI_Model
{

	public function getDataapikey($id = null)
	{
		if($id === null){
			$semua_data_apikey = $this->db->get('api_keys')->result();
			return $semua_data_apikey;
		}else{
			$data_apikey_byid = $this->db->get_where('api_keys', ['id'=>$id])->result();
			return $data_apikey_byid;
		}
	}

	public function tambahapikey($data)
	{
		$this->db->insert('api_keys', $data);
		return $this->db->affected_rows();
	}

	public function hapusapikey($id)
	{
		$this->db->delete('api_keys', ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function ubahapikey($data, $id)
	{
		$this->db->update('api_keys', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}
}
?>