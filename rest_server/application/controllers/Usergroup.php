<?php

require APPPATH . 'libraries/REST_Controller.php';

class Usergroup extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usergroup', 'usergroup');
	}

	public function index_get()
	{
		$id_usergroup = $this->get('id_usergroup');
		if($id_usergroup === null){
			$data_usergroup = $this->usergroup->getDatausergroup();
		}else{
			$data_usergroup=$this->usergroup->getDatausergroup($id_usergroup);
		}
		if($data_usergroup){
			$this->response(
				[
					'status' => true,
					'data_person' => $data_usergroup
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
		$id_usergroup = $this->post('id_usergroup');
		$nama_usergroup = $this->post('nama_usergroup');
		
		$data = [
			'id_usergroup' => $id_usergroup,
			'nama_usergroup' => $nama_usergroup
		];

		if($id_usergroup === null || $nama_usergroup === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->usergroup->tambahusergroup($data)>0){
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
		$id_usergroup = $this->delete('id_usergroup');
		if($id_usergroup === null){
			$this->response(
				[
					'status' => false,
					'message' => 'npm tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->usergroup->hapususergroup($id_usergroup)>0){
				$this->response(
					[
						'status'=>true,
						'id_usergroup'=>$id_usergroup,
						'message'=>'data usergroup dengan id usergroup :' . $id_usergroup . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data usergroup dengan id usergroup :' .$id_usergroup. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$id_usergroup = $this->put('id_usergroup');
		$datausergroup = [
			'id_usergroup' => $this->put('id_usergroup'),
			'nama_usergroup' => $this->put('nama_usergroup')
		];
		if($id_usergroup === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id usergroup tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->usergroup->ubahusergroup($datausergroup, $id_usergroup) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data usergroup dengan id usergroup :' .$id_usergroup. ' berhasil diupdate'
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