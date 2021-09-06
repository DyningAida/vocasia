<?php

class Model_Nilai extends CI_Model
{

	public function getDatanilai($id_nilai = null)
	{
		if($id_nilai === null){
			$semua_data_nilai = $this->db->get('nilai')->result();
			return $semua_data_nilai;
		}else{
			$data_nilai_byid_nilai = $this->db->get_where('nilai', ['id_nilai'=>$id_nilai])->result();
			return $data_nilai_byid_nilai;
		}
	}

	public function tambahnilai($data)
	{
		$this->db->insert('nilai', $data);
		return $this->db->affected_rows();
	}

	public function hapusnilai($id_nilai)
	{
		$this->db->delete('nilai', ['id_nilai' => $id_nilai]);
		return $this->db->affected_rows();
	}

	public function ubahnilai($data, $id_nilai)
	{
		$this->db->update('nilai', $data, ['id_nilai' => $id_nilai]);
		return $this->db->affected_rows();
	}
}
?>