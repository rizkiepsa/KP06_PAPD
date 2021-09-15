<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-10">
                    <h6 class="m-0 font-weight-bold text-primary">Unapproved User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Status Approval</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <?php if ($user->approval_status == 'approved') : ?>
                                        <tr>
                                            <th><?= $i++; ?></th>
                                            <td><?= $user->username; ?></td>
                                            <td><?= $user->email; ?></td>
                                            <td><?= $user->approval_status; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">detail</a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection(); ?>