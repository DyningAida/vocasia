<?php

require APPPATH . 'libraries/REST_Controller.php';

class Jenjang extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Jenjang', 'jenjang');
	}

	public function index_get()
	{
		$kode_jenjang = $this->get('kode_jenjang');
		if($kode_jenjang === null){
			$data_jenjang = $this->jenjang->getDatajenjang();
		}else{
			$data_jenjang=$this->jenjang->getDatajenjang($kode_jenjang);
		}
		if($data_jenjang){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_jenjang
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
		$kode_jenjang= $this->post('kode_jenjang');
		$nama_jenjang = $this->post('nama_jenjang');
		
		$data = [
			'kode_jenjang' => $kode_jenjang,
			'nama_jenjang' => $nama_jenjang
		];

		if($kode_jenjang === null || $nama_jenjang === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->jenjang->tambahjenjang($data)>0){
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
		$kode_jenjang = $this->delete('kode_jenjang');
		if($kode_jenjang === null){
			$this->response(
				[
					'status' => false,
					'message' => 'Kode janjang tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->jenjang->hapusjenjang($kode_jenjang)>0){
				$this->response(
					[
						'status'=>true,
						'kode_jenjang'=>$kode_jenjang,
						'message'=>'data jenjang dengan kode jenjang :' . $kode_jenjang . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data jenjang dengan kode jenjang :' .$kode_jenjang. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$kode_jenjang = $this->put('kode_jenjang');
		$datajenjang = [
			'kode_jenjang' => $this->put('kode_jenjang'),
			'nama_jenjang' => $this->put('nama_jenjang')
		];
		if($kode_jenjang === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode jenjang tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->jenjang->ubahjenjang($datajenjang, $kode_jenjang) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data jenjang dengan kode jenjang :' .$kode_jenjang. ' berhasil diupdate'
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