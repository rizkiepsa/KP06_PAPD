<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- User Detail -->
    <h2 class="h3 mb-4 text-gray-800">Data Form
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="<?= base_url('user/tampil2'); ?>" class="btn btn-danger active" aria-current="page">Form 1</a>
            <a href="<?= base_url('user/tampilForm2'); ?>" class="btn btn-warning active" aria-current="page">Form 2</a>
            <a href="<?= base_url('user/tampilForm3'); ?>" class="btn btn-success active" aria-current="page">Form 3</a>
        </div>
    </h2>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">TEKNIS APLIKASI PERANGKAT DAERAH</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 25%;">Bentuk sistem elektronik</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Sistem Pengamanan Pendukung Aplikasi</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Sertifikasi Aplikasi</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Kategori akses</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Kepemilikan server aplikasi</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat penyimpanan server</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Perangkat masukan tambahan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Estimasi jumlah pengakses/pengunjung terbanyak dalam satu waktu</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Spesifikasi server (virtual machine) yang dibutuhkan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Kapasitas storage yang dibutuhkan</th>
                                <td>tes</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">PERANGKAT LUNAK PENDUKUNG</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 25%;">Bahasa Pemrograman</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Framework/CMS</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sistem Database</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Web Server</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sistem Operasi</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ketersediaan dokumen teknis aplikasi</th>
                                    <td>tes</td>
                                </tr>
                                <tr>
                                    <th scope="row">ABSTRAKSI</th>
                                    <td>tes</td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>