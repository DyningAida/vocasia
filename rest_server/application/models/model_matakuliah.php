<?php

class Model_Matakuliah extends CI_Model
{

	public function getDatamatakuliah($kode_matakuliah = null)
	{
		if($kode_matakuliah === null){
			$semua_data_matakuliah = $this->db->get('matakuliah')->result();
			return $semua_data_matakuliah;
		}else{
			$data_matakuliah_bykode_matakuliah = $this->db->get_where('matakuliah', ['kode_matakuliah'=>$kode_matakuliah])->result();
			return $data_matakuliah_bykode_matakuliah;
		}
	}

	public function tambahmatakuliah($data)
	{
		$this->db->insert('matakuliah', $data);
		return $this->db->affected_rows();
	}

	public function hapusmatakuliah($kode_matakuliah)
	{
		$this->db->delete('matakuliah', ['kode_matakuliah' => $kode_matakuliah]);
		return $this->db->affected_rows();
	}

	public function ubahmatakuliah($data, $kode_matakuliah)
	{
		$this->db->update('matakuliah', $data, ['kode_matakuliah' => $kode_matakuliah]);
		return $this->db->affected_rows();
	}
}
?>