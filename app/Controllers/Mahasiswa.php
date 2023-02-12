<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Mahasiswa'
        ];

        return view('mahasiswa/tambah', $data);
    }

    public function simpan()
    {
        $this->mahasiswaModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'fakultas' => $this->request->getVar('fakultas'),
            'jurusan' => $this->request->getVar('jurusan'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        return redirect()->to('/');
    }

    public function hapus($id)
    {
        $this->mahasiswaModel->delete($id);
        return redirect()->to('/');
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Ubah Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->where(['id' => $id])->first()
        ];

        return view('mahasiswa/ubah', $data);
    }

    public function update($id)
    {
        $this->mahasiswaModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'fakultas' => $this->request->getVar('fakultas'),
            'jurusan' => $this->request->getVar('jurusan'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        return redirect()->to('/');
    }
}
