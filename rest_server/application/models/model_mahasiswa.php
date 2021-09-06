<?php

class Model_Mahasiswa extends CI_Model
{

	public function getDataMahasiswa($NIM = null)
	{
		if($NIM === null){
			$semua_data_mahasiswa = $this->db->get('mahasiswa')->result();
			return $semua_data_mahasiswa;
		}else{
			$data_mahasiswa_byNIM = $this->db->get_where('mahasiswa', ['NIM'=>$NIM])->result();
			return $data_mahasiswa_byNIM;
		}
	}

	public function tambahMahasiswa($data)
	{
		$this->db->insert('mahasiswa', $data);
		return $this->db->affected_rows();
	}

	public function hapusMahasiswa($NIM)
	{
		$this->db->delete('mahasiswa', ['NIM'=>$NIM]);
		return $this->db->affected_rows();
	}

	public function ubahMahasiswa($data, $NIM)
	{
		$this->db->update('mahasiswa', $data, ['NIM'=>$NIM]);
		return $this->db->affected_rows();
	}
}
?>