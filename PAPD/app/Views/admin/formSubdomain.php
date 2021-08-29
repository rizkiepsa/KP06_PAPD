<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Subdomain</h1>

    <form>
        <div class="form-group row">
            <label for="inputSubDomain" class="col-sm-10 col-form-label">Sub Domain</label>
            <div class="col-sm-10">
                <input type="subDomain" class="form-control" id="inputSubDomain">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOwner" class="col-sm-10 col-form-label">Owner</label>
            <div class="col-sm-10">
                <input type="owner" class="form-control" id="inputOwner">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTipe" class="col-sm-10 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="tipe" class="form-control" id="inputTipe">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputUnitKerja" class="col-sm-10 col-form-label">Unit Kerja / UPTD</label>
            <div class="col-sm-10">
                <input type="unitKerja" class="form-control" id="inputUnitKerja">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLokasiHosting" class="col-sm-10 col-form-label">Lokasi Hosting / Collocation</label>
            <div class="col-sm-10">
                <input type="lokasiHosting" class="form-control" id="inputLokasiHosting">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIpAddress" class="col-sm-10 col-form-label">IP Address</label>
            <div class="col-sm-10">
                <input type="ipAdress" class="form-control" id="inputIpAddress">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPenanggungJawab" class="col-sm-10 col-form-label">Penanggung Jawab</label>
            <div class="col-sm-10">
                <input type="penanggungJawab" class="form-control" id="inputpPenanggungJawab">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-10 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="status" class="form-control" id="inputStatus">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFiturAplikasi" class="col-sm-10 col-form-label">Deskripsi / Fitur Aplikasi</label>
            <div class="col-sm-10">
                <input type="fiturAplikasi" class="form-control" id="inputFiturAplikasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBahasaPemrograman" class="col-sm-10 col-form-label">Bahasa Pemrograman</label>
            <div class="col-sm-10">
                <input type="bahasaPemrograman" class="form-control" id="inputBahasaPemrograman">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFramework" class="col-sm-10 col-form-label">Framework / CMS</label>
            <div class="col-sm-10">
                <input type="framework" class="form-control" id="inputFramework">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDatabase" class="col-sm-10 col-form-label">Database</label>
            <div class="col-sm-10">
                <input type="database" class="form-control" id="inputDatabase">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOperationgSystem" class="col-sm-10 col-form-label">Operating System</label>
            <div class="col-sm-10">
                <input type="operatingSystem" class="form-control" id="inputOperatingSystem">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOperatingSystemServer" class="col-sm-10 col-form-label">Operating System Server</label>
            <div class="col-sm-10">
                <input type="operatingSystemServer" class="form-control" id="inputOperatingSystemServer">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTahunDibuat" class="col-sm-10 col-form-label">Tahun Dibuat</label>
            <div class="col-sm-10">
                <input type="tahunDibuat" class="form-control" id="inputTahunDibuat">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPIC" class="col-sm-10 col-form-label">PIC</label>
            <div class="col-sm-10">
                <input type="pic" class="form-control" id="inputPIC">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKeterangan" class="col-sm-10 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="keterangan" class="form-control" id="inputKeterangan">
            </div>
        </div>
    </form>
    <div class="btn-group">
        <a href="" class="btn btn-primary active" aria-current="page">Submit</a>
    </div>
</div>
<?= $this->endSection(); ?>