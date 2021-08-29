<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- User Detail -->
    <h2 class="h3 mb-4 text-gray-800">User Profile
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="<?= base_url('user/edit'); ?>" class="btn btn-success active" aria-current="page">Edit</a>
        </div>
    </h2>

    <div class="card" style="width: auto;">
        <img style="width: 200px; height:auto; align:center; margin:auto;" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Contact</h5>
            <ul class="list-group list-group-flush">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 200px;">Nama</th>
                            <td><?= user()->fullname; ?> lorem</td>
                        </tr>
                        <tr>
                            <th scope="row">Nik</th>
                            <td><?= user()->nik; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Instansi</th>
                            <td><?= user()->instansi; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?= user()->email; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No Hp</th>
                            <td><?= user()->no_hp; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Approval Status</th>
                            <td><?= user()->approval_status; ?></td>
                        </tr>

                    </tbody>
                </table>
            </ul>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>