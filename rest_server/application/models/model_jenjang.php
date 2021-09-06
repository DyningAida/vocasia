<?php

class Model_Jenjang extends CI_Model
{

	public function getDatajenjang($kode_jenjang = null)
	{
		if($kode_jenjang === null){
			$semua_data_jenjang = $this->db->get('jenjang')->result();
			return $semua_data_jenjang;
		}else{
			$data_jenjang_bykode_jenjang = $this->db->get_where('jenjang', ['kode_jenjang'=>$kode_jenjang])->result();
			return $data_jenjang_bykode_jenjang;
		}
	}

	public function tambahjenjang($data)
	{
		$this->db->insert('jenjang', $data);
		return $this->db->affected_rows();
	}

	public function hapusjenjang($kode_jenjang)
	{
		$this->db->delete('jenjang', ['kode_jenjang' => $kode_jenjang]);
		return $this->db->affected_rows();
	}

	public function ubahjenjang($data, $kode_jenjang)
	{
		$this->db->update('jenjang', $data, ['kode_jenjang' => $kode_jenjang]);
		return $this->db->affected_rows();
	}
}
?>