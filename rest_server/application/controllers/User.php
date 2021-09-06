<?php

require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_User', 'user');
	}

	public function index_get()
	{
		$id_user = $this->get('id_user');
		if($id_user === null){
			$data_user = $this->user->getDatauser();
		}else{
			$data_user=$this->user->getDatauser($id_user);
		}
		if($data_user){
			$this->response(
				[
					'status' => true,
					'data_user' => $data_user
				],
				REST_Controller::HTTP_OK
			);
		} else{
			$this->response(
				[
					'status' => false,
					'message' => "Data user tidak ditemukan"
				],
				REST_Controller::HTTP_NOT_FOUND
			);
		}
	}

	public function index_post()
	{
		$id_user = $this->post('id_user');
		$id_usergroup_user = $this->post('id_usergroup_user');
		$username = $this->post('username');
		$password = $this->post('password');
		$foto = $this->post('foto');

		$data = [
			'id_user' => $id_user,
			'id_usergroup_user' => $id_usergroup_user,
			'username' => $username,
			'password' => $password,
			'foto' => $foto
		];

		if($id_user === null || $id_usergroup_user === null || $username === null|| $password === null || $foto === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->user->tambahuser($data)>0){
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
		$id_user = $this->delete('id_user');
		if($id_user === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id user tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->user->hapususer($id_user)>0){
				$this->response(
					[
						'status'=>true,
						'id_user'=>$id_user,
						'message'=>'data user dengan id user :' . $id_user . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data user dengan id user :' .$id_user. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$id_user = $this->put('id_user');
		$datauser = [
			'id_usergroup_user' => $this->put('id_usergroup_user'),
			'username' => $this->put('username'),
			'password' => $this->put('password'),
			'foto' => $this->put('foto')
		];
		if($id_user === null){
			$this->response(
				[
					'status' => false,
					'message' => 'id_user tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->user->ubahuser($datauser, $id_user) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data user dengan id_user :' .$id_user. ' berhasil diupdate'
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