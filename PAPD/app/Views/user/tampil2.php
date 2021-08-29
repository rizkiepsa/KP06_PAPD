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
                    <h5 class="card-title" style="text-align: center;">Profil Aplikasi Perangkat Daerah</h5>
                </div>
                <ul class="list-group list-group-flush">

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 25%;">Perangkat Daerah</th>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, exercitationem repudiandae sapiente, reiciendis optio vel, deleniti ut totam modi eaque atque dolore corporis harum voluptatem quo illum minus doloremque reprehenderit!</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Pejabat Penanggung Jawab</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan Pejabat Penanggung Jawab</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">No. HP Pejabat Penanggung Jawab</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat e-Mail Pejabat Penanggung Jawab</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Penanggung Jawab Teknis</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">No. HP Penanggung Jawab Teknis</th>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat e-Mail Penanggung Jawab Teknis</th>
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