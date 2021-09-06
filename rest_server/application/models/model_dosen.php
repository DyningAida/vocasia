<?php

class Model_Dosen extends CI_Model
{

	public function getDatadosen($NIP = null)
	{
		if($NIP === null){
			$semua_data_dosen = $this->db->get('dosen')->result();
			return $semua_data_dosen;
		}else{
			$data_dosen_byNIP = $this->db->get_where('dosen', ['NIP'=>$NIP])->result();
			return $data_dosen_byNIP;
		}
	}

	public function tambahdosen($data)
	{
		$this->db->insert('dosen', $data);
		return $this->db->affected_rows();
	}

	public function hapusdosen($NIP)
	{
		$this->db->delete('dosen', ['NIP' => $NIP]);
		return $this->db->affected_rows();
	}

	public function ubahdosen($data, $NIP)
	{
		$this->db->update('dosen', $data, ['NIP' => $NIP]);
		return $this->db->affected_rows();
	}
}
?>