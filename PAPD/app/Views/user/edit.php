<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <!-- Form -->
    <h2 class="h3 mb-4 text-gray-800">Form Edit User</h2>

    <div class="row">
        <div class="col-lg-8">

            <form action="<?= base_url(); ?>/user/update/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= user()->id; ?>">
                <input type="hidden" name="fotoLama" value="<?= user()->user_image; ?>">
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" autofocus value="<?= (old('fullname')) ? old('fullname') : $user->fullname ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= user()->username; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?= (old('nik')) ? old('nik') : $user->nik ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('instansi')) ? 'is-invalid' : ''; ?>" id="instansi" name="instansi" aria-label="multiple select example">
                            <option selected value="<?= (old('instansi')) ? old('instansi') : $user->instansi ?>">-Pilih Instansi-</option>
                            <option value="1">Biro Pemerintahan dan Kerjasama</option>
                            <option value="2">Biro Hukum dan Hak Asasi Manusia</option>
                            <option value="3">Biro Pelayanan dan Pengembangan Sosial</option>
                            <option value="4">Biro Badan Usaha Milik Daerah dan Investasi</option>
                            <option value="5">Biro Perekonomian</option>
                            <option value="6">Biro Pengadaan Barang/Jasa</option>
                            <option value="7">Biro Organisasi</option>
                            <option value="8">Biro Umum</option>
                            <option value="9">Sekretaris Dewan Perwakilan Rakyat Daerah</option>
                            <option value="10">Inspektorat</option>
                            <option value="11">Dinas Pendidikan</option>
                            <option value="12">Dinas Kesehatan</option>
                            <option value="13">Dinas Bina Marga dan Penataan Ruang</option>
                            <option value="14">Dinas Sumber Daya Air</option>
                            <option value="15">Dinas Perumahan dan Permukiman</option>
                            <option value="16">Satuan Polisi Pamong Praja</option>
                            <option value="17">Dinas Sosial</option>
                            <option value="18">Dinas Pemberdayaan Perempuan, Perlindungan Anak, dan Keluarga Berencana</option>
                            <option value="19">Dinas Lingkungan Hidup</option>
                            <option value="20">Dinas Pemberdayaan Masyarakat dan Desa</option>
                            <option value="21">Dinas Perhubungan</option>
                            <option value="22">Dinas Komunikasi dan Informatika</option>
                            <option value="23">Dinas Koperasi dan Usaha Kecil</option>
                            <option value="24">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                            <option value="25">Dinas Pemuda dan Olahraga</option>
                            <option value="26">Dinas Perpustakaan dan Kearsipan Daerah</option>
                            <option value="27">Dinas Tenaga Kerja dan Transmigrasi</option>
                            <option value="28">Dinas Ketahanan Pangan dan Peternakan</option>
                            <option value="29">Dinas Pariwisata dan Kebudayaan</option>
                            <option value="30">Dinas Kelautan dan Perikanan</option>
                            <option value="31">Dinas Tanaman Pangan dan Holtikultura</option>
                            <option value="32">Dinas Perkebunan</option>
                            <option value="33">Dinas Kehutanan</option>
                            <option value="34">Dinas Energi dan Sumber Daya Mineral</option>
                            <option value="35">Dinas Perindustrian dan Perdagangan</option>
                            <option value="36">Dinas Kependudukan dan Pencatatan Sipil</option>
                            <option value="37">Badan Perencanaan Pembangunan Daerah</option>
                            <option value="38">Badan Kepegawaian Daerah</option>
                            <option value="39">Badan Pengembangan Sumber Daya Manusia</option>
                            <option value="40">Badan Penelitian dan Pengembangan Daerah</option>
                            <option value="41">Badan Pengelolaan Keuangan dan Aset Daerah</option>
                            <option value="42">Badan Pendapatan Daerah</option>
                            <option value="43">Badan Penghubung</option>
                            <option value="44">Badan Kesatuan Bangsa dan Politik</option>
                            <option value="45">Badan Penanggulangan Bencana Daerah</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= user()->email; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="nohp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" value="<?= (old('no_hp')) ? old('no_hp') : $user->no_hp ?>">
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>/img/<?= $user->user_image; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="Foto"><?= $user->user_image; ?></label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<?= $this->endSection(); ?>