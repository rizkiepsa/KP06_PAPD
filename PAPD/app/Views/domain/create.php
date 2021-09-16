<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Subdomain</h1>

    <form action="/domain/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <!-- <div class="form-group row">
            <label for="inputNoRegistrasi" class="col-sm-10 col-form-label">No Registrasi</label>
            <div class="col-sm-10">
                <input type="noregistrasi" class="form-control" id="inputNoRegistrasi">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="inputNamaSubdomain" class="col-sm-10 col-form-label">Nama Subdomain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('sub_domain')) ? 'is-invalid' : ''; ?>" id="sub_domain" name="sub_domain" autofocus value="<?= old('sub_domain'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sub_domain'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOwner" class="col-sm-10 col-form-label">Owner</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="owner" name="owner" autofocus value="<?= old('owner'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTipe" class="col-sm-10 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tipe" name="tipe" autofocus value="<?= old('tipe'); ?>">
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="inputUnitKerja" class="col-sm-10 col-form-label">Unit Kerja</label>
            <div class="col-sm-10">
                <input type="unitkerja" class="form-control" id="inputUnitKerja">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLokasiHosting" class="col-sm-10 col-form-label">Lokasi Hosting</label>
            <div class="col-sm-10">
                <input type="lokasihosting" class="form-control" id="inputLokasiHosting">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIpAddress" class="col-sm-10 col-form-label">IP Address</label>
            <div class="col-sm-10">
                <input type="ippaddress" class="form-control" id="inputIpAddress">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPenanggungJawab" class="col-sm-10 col-form-label">Penanggung Jawab</label>
            <div class="col-sm-10">
                <input type="penanggungjawab" class="form-control" id="inputPenanggungJawab">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-10 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="status" class="form-control" id="inputStatus">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDeskripsiFiturAplikasi" class="col-sm-10 col-form-label">Deskripsi Fitur Aplikasi</label>
            <div class="col-sm-10">
                <input type="deskripsifituraplikasi" class="form-control" id="inputDeskripsiFiturAplikasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBahasaPemrograman" class="col-sm-10 col-form-label">Bahasa Pemrograman</label>
            <div class="col-sm-10">
                <input type="bahasapemrograman" class="form-control" id="inputBahasaPemrograman">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFrameworkCMS" class="col-sm-10 col-form-label">Framework CMS</label>
            <div class="col-sm-10">
                <input type="frameworkcms" class="form-control" id="inputFrameworkCMS">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDatabase" class="col-sm-10 col-form-label">Database</label>
            <div class="col-sm-10">
                <input type="database" class="form-control" id="inputDatabase">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTipeOperatingSystem" class="col-sm-10 col-form-label">Tipe Operating System</label>
            <div class="col-sm-10">
                <input type="tipeoperatingsystem" class="form-control" id="inputTipeOperatingSystem">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOperatingSystemServer" class=" col-sm-10 col-form-label">Operating System Server</label>
            <div class="col-sm-10">
                <input type="operatingsystemserver" class="form-control" id="inputOperatingSystemServer">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTahunDibuat" class="col-sm-10 col-form-label">Tahun Dibuat</label>
            <div class="col-sm-10">
                <input type="tahundibuat" class="form-control" id="inputTahunDibuat">
            </div>
        </div> -->
        <!-- <div class="form-group row">
            <label for="inputKeterangan" class="col-sm-10 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="keterangan" class="form-control" id="inputKeterangan">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="foto" class="col-sm-10 col-form-label">Sampul</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="/img/default_domainpic.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="Foto">Pilih gambar..</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>