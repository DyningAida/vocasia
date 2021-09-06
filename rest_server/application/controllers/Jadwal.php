<?php

require APPPATH . 'libraries/REST_Controller.php';

class Jadwal extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Jadwal', 'jadwal');
	}

	public function index_get()
	{
		$this->db->select('jadwal.id_jadwal, jadwal.kode_matakuliah_jadwal as kode_matakuliah, matakuliah.nama_matakuliah, matakuliah.SKS, dosen.NIP, dosen.nama_dosen, ruangan.kode_ruangan, ruangan.nama_ruangan, jurusan.kode_jurusan, jurusan.nama_jurusan');
		#$this->db->from('jadwal');
		$this->db->join('matakuliah','matakuliah.kode_matakuliah = jadwal.kode_matakuliah_jadwal');
		$this->db->join('dosen', 'jadwal.NIP_jadwal=dosen.NIP');
		$this->db->join('ruangan', 'jadwal.kode_ruangan_jadwal = ruangan.kode_ruangan');
		$this->db->join('jurusan','jurusan.kode_jurusan = jadwal.kode_jurusan_jadwal');
		$id_jadwal = $this->get('id_jadwal');
		if($id_jadwal === null){
			$data_jadwal = $this->jadwal->getDatajadwal();
		}else{
			$data_jadwal=$this->jadwal->getDatajadwal($id_jadwal);
		}
		if($data_jadwal){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_jadwal
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
		$id_jadwal = $this->post('id_jadwal');
		$kode_matakuliah_jadwal = $this->post('kode_matakuliah_jadwal');
		$NIP_jadwal = $this->post('NIP_jadwal');
		$kode_ruangan_jadwal = $this->post('kode_ruangan_jadwal');
		$kode_jurusan_jadwal = $this->post('kode_jurusan_jadwal');
		$hari = $this->post('hari');
		$jam = $this->post('jam');

		$data = [
			'id_jadwal' => $id_jadwal,
			'kode_matakuliah_jadwal' => $kode_matakuliah_jadwal,
			'NIP_jadwal' => $NIP_jadwal,
			'kode_ruangan_jadwal' => $kode_ruangan_jadwal,
			'kode_jurusan_jadwal' => $kode_jurusan_jadwal,
			'hari' => $hari,
			'jam' => $jam
		];

		if($id_jadwal === null || $kode_matakuliah_jadwal === null || $NIP_jadwal === null || $kode_ruangan_jadwal === null || $kode_jurusan_jadwal === null || $hari === null || $jam === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->jadwal->tambahjadwal($data)>0){
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
		$id_jadwal = $this->delete('id_jadwal');
		if($id_jadwal === null){
			$this->response(
				[
					'status' => false,
					'message' => 'npm tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->jadwal->hapusjadwal($id_jadwal)>0){
				$this->response(
					[
						'status'=>true,
						'id_jadwal'=>$id_jadwal,
						'message'=>'data jadwal dengan id jadwal :' . $id_jadwal . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data jadwal dengan id jadwal :' .$id_jadwal. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$id_jadwal = $this->put('id_jadwal');
		$datajadwal = [
			'id_jadwal' => $this->put('id_jadwal'),
			'kode_matakuliah_jadwal' => $this->put('kode_matakuliah_jadwal'),
			'NIP_jadwal' => $this->put('NIP_jadwal'),
			'kode_ruangan_jadwal' => $this->put('kode_ruangan_jadwal'),
			'kode_jurusan_jadwal' => $this->put('kode_jurusan_jadwal'),
			'hari' =>$this->put('hari'),
			'jam' =>$this->put('jam')
		];
		if($id_jadwal === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id jadwal tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->jadwal->ubahjadwal($datajadwal, $id_jadwal) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data jadwal dengan id jadwal :' .$id_jadwal. ' berhasil diupdate'
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