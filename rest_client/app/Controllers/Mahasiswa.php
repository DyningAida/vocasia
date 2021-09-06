<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'data mahasiswa',
            'data' => $this->MahasiswaModel->getAllMahasiswa()
        ];
        return view('pages/mahasiswa', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'detail data mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getMahasiswaById($id)
        ];

        return view('pages/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'add data mahasiswa',
            'validation' => \Config\Services::validation(),
        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        $data = [
            'NIM' => $this->request->getVar('NIM'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'JK' => $this->request->getVar('JK'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'kode_jurusan_mhs' => $this->request->getVar('kode_jurusan_mhs'),
            'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862'
        ];
        $this->MahasiswaModel->postDataMahasiswa($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/mahasiswa');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'edit data mahasiswa',
            'validation' => \Config\Services::validation(),
            'mahasiswa' => $this->MahasiswaModel->getMahasiswaById($id)
        ];
        return view('pages/edit', $data);
    }
    public function update()
    {
        $data = [
            'NIM' => $this->request->getVar('NIM'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'JK' => $this->request->getVar('JK'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'kode_jurusan_mhs' => $this->request->getVar('kode_jurusan'),
            'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862'
        ];
        $this->MahasiswaModel->EditDataMahasiswa($data);
        session()->setFlashdata('pesan', 'Data Mahasiswa berhasil diupdate.');
        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $this->MahasiswaModel->hapusDataMahasiswa($id);
        session()->setFlashdata('pesan', 'Data Mahasiswa berhasil dihapus.');
        return redirect()->to('/mahasiswa');
    }
}
