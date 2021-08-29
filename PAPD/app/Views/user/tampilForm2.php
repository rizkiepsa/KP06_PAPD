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
                    <h5 class="card-title" style="text-align: center;">BLOK UMUM APLIKASI PERANGKAT DAERAH</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 25%;">Nama sistem elektronik</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Deskripsi singkat sistem elektronik</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Dasar Hukum Operasionalisasi Layanan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Standar Prosedur Operasionalisasi Layanan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Status Pemanfaatan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Sumber Pendanaan (pembangunan dan pengelolaan)</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Tahun Pengembangan Terakhir</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Peran Pemerintah Provinsi Jawa Barat dalam sistem elektronik</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Kategori urusan (UU No. 23 Tahun 2014 tentang Pemerintahan Daerah)</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis data elektronik strategis (Peraturan Pemerintah No. 71 Tahun 2019 tentang Penyelenggaraan Sistem dan Transaksi Elektronik)</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Ruang Lingkup (UU No. 25 Tahun 2009 tentang Pelayanan Publik)</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis layanan yang diberikan (jika merupakan pelayanan publik)</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Pengguna layanan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Lingkup wilayah pelayanan</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Pihak Pengembang Aplikasi</th>
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