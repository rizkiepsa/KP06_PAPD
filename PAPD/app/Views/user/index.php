<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800">User Profile
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="<?= base_url('user'); ?>/edit/<?= user()->id; ?>" class="btn btn-success active" aria-current="page">Edit</a>
        </div>
    </h2>

    <div class="card mb-3" style="max-width: 600px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="..." class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <table class="table table-none">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?= user()->email; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td><?= user()->fullname; ?></td>
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
    </div>
</div>
<?= $this->endSection(); ?>