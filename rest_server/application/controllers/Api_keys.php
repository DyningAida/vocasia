<?php

require APPPATH . 'libraries/REST_Controller.php';

class Api_keys extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Apikey', 'Api');
	}

	public function index_get()
	{
		$id = $this->get('id');
		if($id === null){
			$data_Api = $this->Api->getDataApikey();
		}else{
			$data_Api=$this->Api->getDataApikey($id);
		}
		if($data_Api){
			$this->response(
				[
					'status' => true,
					'data_Api' => $data_Api
				],
				REST_Controller::HTTP_OK
			);
		} else{
			$this->response(
				[
					'status' => false,
					'message' => "Data Api tidak ditemukan"
				],
				REST_Controller::HTTP_NOT_FOUND
			);
		}
	}

	public function index_post()
	{
		$id = $this->post('id');
		$user_id = $this->post('user_id');
		$key = $this->post('key');
		$ip_addresses = $this->post('ip_addresses');

		$data = [
			'id' => $id,
			'user_id' => $user_id,
			'key' => $key,
			'ip_addresses' => $ip_addresses
		];

		if($id === null || $user_id === null || $key === null|| $ip_addresses === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->Api->tambahApikey($data)>0){
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
		$id = $this->delete('id');
		if($id === null){
			$this->response(
				[
					'status' => false,
					'message' => 'Api key tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->Api->hapusApikey($id)>0){
				$this->response(
					[
						'status'=>true,
						'id'=>$id,
						'message'=>'data Api dengan id :' . $id . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data Api dengan id Api :' .$id. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$id = $this->put('id');
		$dataApi = [
			'user_id' => $this->put('user_id'),
			'key' => $this->put('key'),
			'ip_addresses' => $this->put('ip_addresses')
		];
		if($id === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->Api->ubahApikey($dataApi, $id) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data Api key dengan id :' .$id. ' berhasil diupdate'
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