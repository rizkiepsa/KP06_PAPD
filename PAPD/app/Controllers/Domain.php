<?php

namespace App\Controllers;

use App\Models\DomainModel;

class Domain extends BaseController
{
    protected $db, $builder, $builderDomain, $domainModel;

    public function __construct()
    {
        $this->domainModel = new DomainModel();

        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->builderDomain = $this->db->table('list_subdomain');
    }

    public function index()
    {

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();

        $this->builderDomain->select('owner, COUNT("owner") AS jumlah');
        $this->builderDomain->groupBy('owner');
        $queryPemilikDomain = $this->builderDomain->get();

        $data = [
            'title' => 'Daftar Domain',
            'needapproval' => $countneedapproval,
            'pemilikDomain' => $queryPemilikDomain->getResult(),
            'domain' => $this->domainModel->getDomain()
        ];

        return view('domain/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Domain',
            'domain' => $this->domainModel->getDomain($slug)
        ];

        // jika komik tidak ada di tabel
        if (empty($data['domain'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Domain ' . $slug . ' tidak ditemukan.');
        }

        return view('domain/detail', $data);
    }

    public function create()
    {

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();

        // session();
        $data = [
            'title' => 'Form Tambah Data Domain',
            'needapproval' => $countneedapproval,
            'validation' => \Config\Services::validation()
        ];

        return view('domain/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'sub_domain' => [
                'rules' => 'required|is_unique[list_subdomain.sub_domain]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/domain/create')->withInput();
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('foto');
        // apakah tidak ada gambar yang diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default_domainpic.png';
        } else {
            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();
            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        $slug = url_title($this->request->getVar('sub_domain'), '-', true);
        $no_registrasi = '';
        $this->domainModel->save([
            'no_registrasi' => $no_registrasi,
            'sub_domain' => $this->request->getVar('sub_domain'),
            'slug'                      => $slug,
            'owner'                     => $this->request->getVar('owner'),
            'tipe'                      => $this->request->getVar('tipe'),
            // 'unitkerja_uptd'            => $this->request->getVar('unitkerja_uptd'),
            // 'lokasi_hosting'            => $this->request->getVar('lokasi_hosting'),
            // 'ip_address'                => $this->request->getVar('ip_address'),
            // 'penanggung_jawab'          => $this->request->getVar('penanggung_jawab'),
            // 'status'                    => $this->request->getVar('status'),
            // 'deskripsi_fituraplikasi'   => $this->request->getVar('deskripsi_fituraplikasi'),
            // 'bahasa_pemograman'         => $this->request->getVar('bahasa_pemograman'),
            // 'framework_cms'             => $this->request->getVar('framework_cms'),
            // 'database'                  => $this->request->getVar('database'),
            // 'type_operating_system'     => $this->request->getVar('type_operating_system'),
            // 'operating_system_server'   => $this->request->getVar('operating_system_server'),
            // 'tahun_dibuat'              => $this->request->getVar('tahun_dibuat'),
            'pic'                          => $namaSampul
            // 'keterangan'                => $this->request->getVar('sub_domain')
        ]);

        session()->setFlashdata('pesan', 'Data Domain baru berhasil ditambahkan.');

        return redirect()->to('/domain');
    }

    // public function delete($id)
    // {
    //     // cari gambar berdasarkan id
    //     $komik = $this->komikModel->find($id);

    //     // cek jika file gambarnya default.png
    //     if ($komik['sampul'] != 'default.png') {
    //         // hapus gambar
    //         unlink('img/' . $komik['sampul']);
    //     }

    //     $this->komikModel->delete($id);
    //     session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    //     return redirect()->to('/komik');
    // }

    // public function edit($slug)
    // {
    //     $data = [
    //         'title' => 'Form Ubah Data Komik',
    //         'validation' => \Config\Services::validation(),
    //         'komik' => $this->komikModel->getKomik($slug)
    //     ];

    //     return view('komik/edit', $data);
    // }

    // public function update($id)
    // {
    //     // cek judul
    //     $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    //     if ($komikLama['judul'] == $this->request->getVar('judul')) {
    //         $rule_judul = 'required';
    //     } else {
    //         $rule_judul = 'required|is_unique[komik.judul]';
    //     }

    //     if (!$this->validate([
    //         'judul' => [
    //             'rules' => $rule_judul,
    //             'errors' => [
    //                 'required' => '{field} komik harus diisi.',
    //                 'is_unique' => '{field} komik sudah terdaftar.'
    //             ]
    //         ],
    //         'sampul' => [
    //             'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
    //             'errors' => [
    //                 'max_size' => 'Ukuran gambar terlalu besar',
    //                 'is_image' => 'Yang anda pilih bukan gambar',
    //                 'mime_in' => 'Yang anda pilih bukan gambar'
    //             ]
    //         ]
    //     ])) {
    //         return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
    //     }

    //     $fileSampul = $this->request->getFile('sampul');

    //     // cek gambar, apakah tetap gambar lama
    //     if ($fileSampul->getError() == 4) {
    //         $namaSampul = $this->request->getVar('sampulLama');
    //     } else {
    //         // generate nama file random
    //         $namaSampul = $fileSampul->getRandomName();
    //         // pindakhan gambar
    //         $fileSampul->move('img', $namaSampul);
    //         // hapus file yang lama
    //         unlink('img/' . $this->request->getVar('sampulLama'));
    //     }

    //     $slug = url_title($this->request->getVar('judul'), '-', true);
    //     $this->komikModel->save([
    //         'id' => $id,
    //         'judul' => $this->request->getVar('judul'),
    //         'slug' => $slug,
    //         'penulis' => $this->request->getVar('penulis'),
    //         'penerbit' => $this->request->getVar('penerbit'),
    //         'sampul' => $namaSampul
    //     ]);

    //     session()->setFlashdata('pesan', 'Data berhasil diubah.');

    //     return redirect()->to('/komik');
    // }
}
