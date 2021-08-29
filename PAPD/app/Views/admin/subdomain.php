<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-10">
                    <h6 class="m-0 font-weight-bold text-primary">Subdomain List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Subdomain</th>
                                    <th>Owner</th>
                                    <th>Tipe</th>
                                    <th>UPTD</th>
                                    <th>Lokasi Hosting</th>
                                    <th>IP Adress</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Status</th>
                                    <th>Fitur Aplikasi</th>
                                    <th>Bahasa Pemrograman</th>
                                    <th>Framework</th>
                                    <th>Database</th>
                                    <th>OS</th>
                                    <th>OS Server</th>
                                    <th>Tahun Dibuat</th>
                                    <th>PIC</th>
                                    <th>Keterangan</th>
                                    <th>Last Update</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>