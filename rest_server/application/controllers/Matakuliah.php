<?php

require APPPATH . 'libraries/REST_Controller.php';

class Matakuliah extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_matakuliah', 'matakuliah');
	}

	public function index_get()
	{
		$kode_matakuliah = $this->get('kode_matakuliah');
		if($kode_matakuliah === null){
			$data_matakuliah = $this->matakuliah->getDatamatakuliah();
		}else{
			$data_matakuliah=$this->matakuliah->getDatamatakuliah($kode_matakuliah);
		}
		if($data_matakuliah){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_matakuliah
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
		$kode_matakuliah = $this->post('kode_matakuliah');
		$nama_matakuliah = $this->post('nama_matakuliah');
		$SKS = $this->post('SKS');

		$data = [
			'kode_matakuliah' => $kode_matakuliah,
			'nama_matakuliah' => $nama_matakuliah,
			'SKS' => $SKS
		];

		if($kode_matakuliah === null || $nama_matakuliah === null || $SKS === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->matakuliah->tambahmatakuliah($data)>0){
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
		$kode_matakuliah = $this->delete('kode_matakuliah');
		if($kode_matakuliah === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_matakuliah tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->matakuliah->hapusmatakuliah($kode_matakuliah)>0){
				$this->response(
					[
						'status'=>true,
						'kode_matakuliah'=>$kode_matakuliah,
						'message'=>'data matakuliah dengan kode matakuliah :' . $kode_matakuliah . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data matakuliah dengan kode matakuliah :' .$kode_matakuliah. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$kode_matakuliah = $this->put('kode_matakuliah');
		$datamatakuliah = [
			'nama_matakuliah' => $this->put('nama_matakuliah'),
			'SKS' => $this->put('SKS')
		];
		if($kode_matakuliah === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_matakuliah tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->matakuliah->ubahmatakuliah($datamatakuliah, $kode_matakuliah) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data matakuliah dengan kode_matakuliah :' .$kode_matakuliah. ' berhasil diupdate'
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