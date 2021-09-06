<?php

class Model_Jadwal extends CI_Model
{

	public function getDatajadwal($id_jadwal = null)
	{
		if($id_jadwal === null){
			$semua_data_jadwal = $this->db->get('jadwal')->result();
			return $semua_data_jadwal;
		}else{
			$data_jadwal_byid_jadwal = $this->db->get_where('jadwal', ['id_jadwal'=>$id_jadwal])->result();
			return $data_jadwal_byid_jadwal;
		}
	}

	public function tambahjadwal($data)
	{
		$this->db->insert('jadwal', $data);
		return $this->db->affected_rows();
	}

	public function hapusjadwal($id_jadwal)
	{
		$this->db->delete('jadwal', ['id_jadwal' => $id_jadwal]);
		return $this->db->affected_rows();
	}

	public function ubahjadwal($data, $id_jadwal)
	{
		$this->db->update('jadwal', $data, ['id_jadwal' => $id_jadwal]);
		return $this->db->affected_rows();
	}
}
?>