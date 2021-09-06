<?php

require APPPATH . 'libraries/REST_Controller.php';

class Dosen extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Dosen', 'dosen');
	}

	public function index_get()
	{
		$NIP = $this->get('NIP');
		if($NIP === null){
			$data_Dosen = $this->dosen->getDataDosen();
		}else{
			$data_Dosen=$this->dosen->getDataDosen($NIP);
		}
		if($data_Dosen){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_Dosen
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
		$nip = $this->post('NIP');
		$nama_dosen = $this->post('nama_dosen');
		$tanggal_lahir = $this->post('tanggal_lahir');
		$JK = $this->post('JK');
		$no_telp = $this->post('no_telp');
		$alamat = $this->post('alamat');

		$data = [
			'NIP' => $nip,
			'nama_dosen' => $nama_dosen,
			'tanggal_lahir' => $tanggal_lahir,
			'JK' => $JK,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
		];

		if($nip === null || $nama_dosen === null || $tanggal_lahir === null| $JK === null || $no_telp === null || $alamat === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->dosen->tambahDosen($data)>0){
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
		$nip = $this->delete('NIP');
		if($nip === null){
			$this->response(
				[
					'status' => false,
					'message' => 'NIP tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->dosen->hapusDosen($nip)>0){
				$this->response(
					[
						'status'=>true,
						'NIP'=>$nip,
						'message'=>'data Dosen dengan NIP :' . $nip . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data Dosen dengan nip :' .$nip. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$nip = $this->put('NIP');
		$datadosen = [
			'nama_dosen' => $this->put('nama_dosen'),
			'tanggal_lahir' => $this->put('tanggal_lahir'),
			'JK' => $this->put('JK'),
			'no_telp' => $this->put('no_telp'),
			'alamat' => $this->put('alamat'),
		];
		if($nip === null){
			$this->response(
				[
					'status' => false,
					'message' => 'nip tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->dosen->ubahDosen($datadosen, $nip) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data Dosen dengan nip :' .$nip. ' berhasil diupdate'
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