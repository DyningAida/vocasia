<?php

require APPPATH . 'libraries/REST_Controller.php';

class Nilai extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Nilai', 'nilaii');
	}

	public function index_get()
	{
		$this->db->select('nilai.id_nilai, nilai.NIM_nilai, mahasiswa.nama_mahasiswa, jurusan.nama_jurusan, nilai.kode_matakuliah_nilai as kode_matakuliah, matakuliah.nama_matakuliah, matakuliah.SKS, nilai.nilai');
		#$this->db->from('nilai');
		$this->db->join('mahasiswa', 'mahasiswa.NIM=nilai.NIM_nilai');
		$this->db->join('jurusan', 'mahasiswa.kode_jurusan_mhs=jurusan.kode_jurusan');
		$this->db->join('matakuliah','matakuliah.kode_matakuliah = nilai.kode_matakuliah_nilai');
		$id_nilai = $this->get('id_nilai');
		if($id_nilai === null){
			$data_nilai = $this->nilaii->getDatanilai();
		}else{
			$data_nilai=$this->nilaii->getDatanilai($id_nilai);
		}
		if($data_nilai){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_nilai
				],
				REST_Controller::HTTP_OK
			);
		} else{
			$this->response(
				[
					'status' => false,
					'message' => "Data tidak ditemukan"
				],
				REST_Controller::HTTP_NOT_FOUND
			);
		}
	}

	public function index_post()
	{
		$id_nilai = $this->post('id_nilai');
		$NIM_nilai = $this->post('NIM_nilai');
		$kode_matakuliah_nilai = $this->post('kode_matakuliah_nilai');
		$nilai = $this->post('nilai');

		$data = [
			'id_nilai' => $id_nilai,
			'NIM_nilai' => $NIM_nilai,
			'kode_matakuliah_nilai' => $kode_matakuliah_nilai,
			'nilai' => $nilai
		];

		if($id_nilai === null || $NIM_nilai === null || $kode_matakuliah_nilai === null| $nilai === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->nilaii->tambahnilai($data)>0){
				$this->response(
					[
						'status' => true,
						'message' => 'data berhasil ditambahkan'
					],
					REST_Controller::HTTP_CREATED
				);
			} else {
				$this->response(
					[
						'status' => false,
						'message' => 'Gagal Menambahkan Data'
					],
					REST_Controller
				);
			}
		}
	}

	public function index_delete()
	{
		$id_nilai = $this->delete('id_nilai');
		if($id_nilai === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id_nilai tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->nilaii->hapusnilai($id_nilai)>0){
				$this->response(
					[
						'status'=>true,
						'id_nilai'=>$id_nilai,
						'message'=>'data nilai dengan id nilai :' . $id_nilai . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data nilai dengan id nilai :' .$id_nilai. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$id_nilai = $this->put('id_nilai');
		$datanilaii = [
			'NIM_nilai' => $this->put('NIM_nilai'),
			'kode_matakuliah_nilai' => $this->put('kode_matakuliah_nilai'),
			'nilai' => $this->put('nilai'),
		];
		if($id_nilai === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id nilai tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->nilaii->ubahnilai($datanilaii, $id_nilai) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data nilai dengan id nilai :' .$id_nilai. ' berhasil diupdate'
					],
					REST_Controller::HTTP_CREATED
				);
			} else {
				$this->response(
					[
						'status' => false,
						'message' => 'data tidak ada yang diupdate'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}
}

?>