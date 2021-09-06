<?php

require APPPATH . 'libraries/REST_Controller.php';

class Mahasiswa extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Mahasiswa', 'mhs');
	}

	public function index_get()
	{
		$this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.tanggal_lahir, mahasiswa.JK, mahasiswa.no_telp, mahasiswa.alamat, jurusan.kode_jurusan as kode_jurusan, jurusan.nama_jurusan as nama_jurusan, jurusan.kode_jenjang_jrs as kode_jenjang');
		#$this->db->from('mahasiswa');
		$this->db->join('jurusan', 'mahasiswa.kode_jurusan_mhs=jurusan.kode_jurusan');
		#$this->db->where('mahasiswa.NIM', $NIM);
		$NIM = $this->get('NIM');
		if ($NIM === null) {
			$data_mahasiswa = $this->mhs->getDataMahasiswa();
		} else {
			$data_mahasiswa = $this->mhs->getDataMahasiswa($NIM);
		}
		if ($data_mahasiswa) {
			$this->response(
				[
					'status' => true,
					'data_person' => $data_mahasiswa
				],
				REST_Controller::HTTP_OK
			);
		} else {
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
		$NIM = $this->post('NIM');
		$nama_mahasiswa = $this->post('nama_mahasiswa');
		$tanggal_lahir = $this->post('tanggal_lahir');
		$JK = $this->post('JK');
		$no_telp = $this->post('no_telp');
		$alamat = $this->post('alamat');
		$kode_jurusan_mhs = $this->post('kode_jurusan_mhs');

		$data = [
			'NIM' => $NIM,
			'nama_mahasiswa' => $nama_mahasiswa,
			'tanggal_lahir' => $tanggal_lahir,
			'JK' => $JK,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'kode_jurusan_mhs' => $kode_jurusan_mhs
		];

		if ($NIM === null || $nama_mahasiswa === null || $tanggal_lahir === null | $JK === null || $no_telp === null || $alamat === null || $kode_jurusan_mhs === null) {
			$this->response(
				[
					'status' => false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if ($this->mhs->tambahMahasiswa($data) > 0) {
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
					REST_Controller::HTTP_NOT_FOUND
				);
			}
		}
	}

	public function index_delete()
	{
		$NIM = $this->delete('NIM');
		if ($NIM === null) {
			$this->response(
				[
					'status' => false,
					'message' => 'NIM tidak boleh kosong'
				],
				REST_Controller::HTTP_NOT_FOUND
			);
		} else {
			if ($this->mhs->hapusMahasiswa($NIM) > 0) {
				$this->response(
					[
						'status' => true,
						'NIM' => $NIM,
						'message' => 'data mahasiswa dengan NIM :' . $NIM . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else {
				$this->response(
					[
						'status' => false,
						'message' => 'data Mahasiswa dengan NIM :' . $NIM . ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$NIM = $this->put('NIM');
		$datamhs = [
			'nama_mahasiswa' => $this->put('nama_mahasiswa'),
			'tanggal_lahir' => $this->put('tanggal_lahir'),
			'JK' => $this->put('JK'),
			'no_telp' => $this->put('no_telp'),
			'alamat' => $this->put('alamat'),
			'kode_jurusan_mhs' => $this->put('kode_jurusan_mhs')
		];
		if ($NIM === null) {
			$this->response(
				[
					'status' => false,
					'message' => 'NIM tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if ($this->mhs->ubahMahasiswa($datamhs, $NIM) > 0) {
				$this->response(
					[
						'status' => true,
						'message' => 'data Mahasiswa dengan NIM :' . $NIM . ' berhasil diupdate'
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
