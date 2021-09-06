<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }
    public function index()
    {
        //$buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getBuku()
        ];

        // // koneksi database tanpa model
        // $db = \Config\Database::connect();
        // $buku = $db->query("SELECT*FROM buku");
        // foreach ($buku->getResultArray() as $row) {
        //     var_dump($row);
        // }
        return view('buku/index', $data);
    }
    public function detail($slug)
    {
        //$buku = $this->bukuModel->getBuku($slug);
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Buku' . $slug . 'tidak ada.');
        }
        return view('buku/detail', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Form tambah data buku',
            'validation' => \Config\Services::validation()
        ];
        return view('buku/create', $data);
    }
    public function save()
    {
        //validasi input
        if (!$this->validate([
            // 'judul' => 'required|is_unique[buku.judul]'
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/buku/create')->withInput()->with('validation', $validation);
        }
        //$this->request->getVar('judul');
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('buku');
    }
    public function delete($id)
    {
        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/buku');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Form ubah data buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('buku/edit', $data);
    }
    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/buku');
    }
}
