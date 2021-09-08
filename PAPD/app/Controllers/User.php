<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->table_npd = $this->db->table('nama_perangkat_daerah');
    }
    public function index()
    {

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();
        $data['needapproval'] = $countneedapproval;

        // $this->builder->select('nama');
        // $this->builder->join('nama_perangkat_daerah', 'nama_perangkat_daerah.npd_id = users.npd_id');
        // $query = $this->builder->get();
        // $data['users'] = $query->getResult();

        $data['title'] = 'User Profile';
        return view('user/index', $data);
    }

    // public function profileaplikasi()
    // {

    //     $this->builder->where('approval_status', null);
    //     $countneedapproval = $this->builder->countAllResults();
    //     $data['needapproval'] = $countneedapproval;

    //     $data['title'] = 'Edit Aplication Profile';
    //     return view('user/profileaplikasi', $data);
    // }

    // public function edit()
    // {

    //     $this->builder->where('approval_status', null);
    //     $countneedapproval = $this->builder->countAllResults();
    //     $data['needapproval'] = $countneedapproval;

    //     $data['title'] = 'User Profile';
    //     return view('user/edit', $data);
    // }

    public function edit($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();

        $this->table_npd->select('*');
        $query = $this->table_npd->get();

        $data = [
            'title'  => 'Edit Profile',
            'needapproval' => $countneedapproval,
            'validation' => \Config\Services::validation(),
            'user' => $users->getUser($id),
            'npds' => $query->getResult()
        ];
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        // cek fullname
        $userLama = $users->getUser($this->request->getVar('id'));
        if ($userLama->fullname == $this->request->getVar('fullname')) {
            $rule_fullname = 'required';
        } else {
            $rule_fullname = 'required|is_unique[users.fullname]';
        }

        if (!$this->validate([
            'fullname' => [
                'rules' => $rule_fullname,
                'errors' => [
                    'required' => '{field} Nama lengkat harus diisi.',
                    'is_unique' => '{field} Nama lengkap sudah terdaftar.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,5000]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/user/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            // generate nama file random
            $namaFoto = $fileFoto->getRandomName();
            // pindakhan gambar
            $fileFoto->move('img', $namaFoto);
            // hapus file yang lama
            if ($this->request->getVar('fotoLama') != 'default.svg') {
                unlink('img/' . $this->request->getVar('fotoLama'));
            }
        }

        $slug = url_title($this->request->getVar('fullname'), '-', true);
        $users->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'slug' => $slug,
            'nik' => $this->request->getVar('nik'),
            'no_hp' => $this->request->getVar('no_hp'),
            'instansi' => $this->request->getVar('instansi'),
            'user_image' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/user/index');
    }
}
