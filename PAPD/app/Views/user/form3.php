<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form 3</h1>

    <!-- Form -->
    <!-- <h2 class="h3 mb-4 text-gray-800">Form Edit User</h2> -->


    <form>

        <div class="form-group row">
            <label for="inputNamaPD" class="col-sm-10 col-form-label">Bentuk sistem elektronik (pilihan boleh lebih dari satu) *</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Situs Web informasional : kumpulan informasi pada halaman web yang dapat diakses melalui internet.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sistem Informasi berbasis desktop: sistem yang menghasilkan informasi yang diakses melalui aplikasi yang diinstall secara khusus di PC pengguna.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sistem Informasi berbasis web: sistem yang menghasilkan informasi yang diakses melalui browser
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sistem Informasi berbasis mobile: sistem yang menghasilkan informasi yang diakses melalui aplikasi yang diinstal pada perangkat mobile (android/iOS)
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSPPA" class="col-sm-10 col-form-label">Sistem Pengamanan Pendukung Aplikasi *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Tidak ada</option>
                    <option value="2">Yang lain:</option>
                </select>
                <input type="sppa" class="form-control" id="inputSPPA" placeholder='Contoh: HTTPS / Akses via VPN / menggunakan username dan password. Apabila ada, mohon sebutkan sistem pengamanan yang digunakan pada pilihan "Yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSertifikasiAplikasi" class="col-sm-10 col-form-label">Sertifikasi Aplikasi *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Tidak ada</option>
                    <option value="2">Yang lain:</option>
                </select>
                <input type="sertifikasiaplikasi" class="form-control" id="inputSertifikasiAplikasi" placeholder='Apabila ada, mohon sebutkan sertifikasi pada pilihan "Yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputKategoriAkses" class="col-sm-10 col-form-label">Kategori akses *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Offline : transaksi data eksternal dilakukan secara manual tanpa memerlukan koneksi data langsung</option>
                    <option value="2">Yang lain:</option>
                </select>
                <input type="kategoriakses" class="form-control" id="inputKategoriAkses" placeholder='Apabila dapat diakses secara online, MOHON SEBUTKAN ALAMAT URL pada pilihan "Yang lain/Other"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputKepemilikanSA" class="col-sm-10 col-form-label">Kepemilikan server aplikasi *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Milik sendiri</option>
                    <option value="2">Hosting di Diskominfo Provinsi Jawa Barat</option>
                    <option value="3">Yang lain:</option>
                </select>
                <input type="kepemilikansa" class="form-control" id="inputKepemilikanSA" placeholder='Apabila sewa di pihak ketiga, mohon sebutkan nama penyedia pada pilihan "Yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputTPS" class="col-sm-10 col-form-label">Tempat penyimpanan server *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Di lokasi fasilitas Perangkat Daerah sendiri</option>
                    <option value="2">Data Center Diskominfo Provinsi Jawa Barat</option>
                    <option value="3">Yang lain:</option>
                </select>
                <input type="tps" class="form-control" id="inputTPS" placeholder='Apabila disimpan di pihak ketiga, mohon sebutkan nama penyedia pada pilihan "Yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputNamaPD" class="col-sm-10 col-form-label">Perangkat masukan tambahan (pilihan dapat lebih dari satu) *</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tidak ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Biometric
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        RFID Reader
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Camera
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sensor IoT
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Yang lain:
                    </label>
                </div>
                <input type="tps" class="form-control" id="inputTPS" placeholder='Apabila memilih opsi "yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEstimasi" class="col-sm-10 col-form-label">Estimasi jumlah pengakses/pengunjung terbanyak dalam satu waktu *</label>
            <div class="col-sm-10">
                <input type="estimasi" class="form-control" id="inputEstimasi">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSpesifikasi" class="col-sm-10 col-form-label">Spesifikasi server (virtual machine) yang dibutuhkan *</label>
            <div class="col-sm-10">
                <input type="spesifikasi" class="form-control" id="inputSpesifikasi">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputKapasitasStorage" class="col-sm-10 col-form-label">Kapasitas storage yang dibutuhkan *</label>
            <div class="col-sm-10">
                <input type="kapasitasstorage" class="form-control" id="inputKapasitasStorage">
            </div>
        </div>

        <h5>PERANGKAT LUNAK PENDUKUNG</h5>

        <div class="form-group row">
            <label for="inputBahasaP" class="col-sm-10 col-form-label">Bahasa Pemrograman *</label>
            <div class="col-sm-10">
                <input type="bahasap" class="form-control" id="inputBahasaP" placeholder="Contoh: PHP / JavaScript / Phyton">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputFramework" class="col-sm-10 col-form-label">Framework/CMS *</label>
            <div class="col-sm-10">
                <input type="framework" class="form-control" id="inputFramework" placeholder="Contoh: CodeIgniter / Laravel / Wordpress">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputDatabase" class="col-sm-10 col-form-label">Sistem Database *</label>
            <div class="col-sm-10">
                <input type="database" class="form-control" id="inputDatabase" placeholder="Contoh: Oracle / MySQL / PostGre">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputWebServer" class="col-sm-10 col-form-label">Web Server *</label>
            <div class="col-sm-10">
                <input type="webserver" class="form-control" id="inputWebServer" placeholder="Contoh: Apache / Nginx / NodeJS">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputOS" class="col-sm-10 col-form-label">Sistem Operasi *</label>
            <div class="col-sm-10">
                <input type="os" class="form-control" id="inputOS" placeholder="Contoh: Centos / Ubuntu / BSD / Windows">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputNamaPD" class="col-sm-10 col-form-label">Perangkat masukan tambahan (Pilihan dapat lebih dari satu. Mohon untuk MENGIRIM SCAN dokumen tersebut ke aptika@jabarprov.go.id) *</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tidak ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumentasi aplikasi (proses bisnis, struktur, modul)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen SOP (Standar Operasional Prosedur)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumentasi database (termasuk perancangan)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen manual bagi administrator;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen manual bagi pengguna;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen manual instalasi;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen manual penanganan masalah (troubleshoting)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Dokumen konfigurasi akhir
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Source code
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Yang lain:
                    </label>
                </div>
                <input type="tps" class="form-control" id="inputTPS" placeholder='Apabila memilih opsi "yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputAbstraksi" class="col-sm-10 col-form-label">ABSTRAKSI</label>
            <div class="col-sm-10">
                <input type="abstraksi" class="form-control" id="inputAbstraksi">
            </div>
        </div>

    </form>
    <div class="btn-group">
        <a href="<?= base_url('user/form2'); ?>" class="btn btn-warning active" aria-current="page">Back</a>
        <a href="<?= base_url('user'); ?>" class="btn btn-primary active" aria-current="page">Submit</a>
    </div>
</div>
<?= $this->endSection(); ?>