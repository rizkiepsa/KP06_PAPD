<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <!-- User List Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $approveduser ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin'); ?>" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="text">User List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Need Approval List Card -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-<?= ($needapproval > 0) ? 'warning' : 'primary'; ?> shadow h-100 py-2 tombol-aktif">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-<?= ($needapproval > 0) ? 'warning' : 'primary'; ?> text-uppercase mb-1">
                                Pending Approval</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $needapproval; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-white-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin List Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $admin; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin'); ?>/adminlist" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="text">Admin List</span>
                            </a>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center btn-idx-admin">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- pending approval user -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Approved User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nik</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status Approval</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <?php if ($user->approval_status != 'approved') : ?>
                                        <tr>
                                            <th><?= $i++; ?></th>
                                            <th><?= $user->nik; ?></th>
                                            <td><?= $user->fullname; ?></td>
                                            <td><?= $user->email; ?></td>
                                            <td>pending</td>
                                            <td>
                                                <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">detail</a>
                                                <form action="/admin/approve" method="post" enctype="multipart/form-data" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" id="userid" class="userid" name="userid" value="<?= $user->userid; ?>">
                                                    <button type="submit" class="btn btn-primary">Approve</button>
                                                </form>
                                                <form action="/admin/deleteuserapproval" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" id="userid" class="userid" name="userid" value="<?= $user->userid; ?>">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                                </form>
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