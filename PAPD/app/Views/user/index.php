<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800">User Profile
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="<?= base_url('user'); ?>/edit/<?= user()->id; ?>" class="btn btn-success active" aria-current="page">Edit</a>
        </div>
    </h2>

    <div class="row">
        <div class="col-sm-4">
            <div class="row g-0">
                <div class="col-md-2">
                    <img style="width: 200px; height:auto;" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="...">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?= user()->fullname; ?></li>
                    <li class="list-group-item">Nik : <?= user()->nik; ?></li>
                    <li class="list-group-item">Instansi : <?= user()->instansi; ?></li>
                    <li class="list-group-item">Email : <?= user()->email; ?></li>
                    <li class="list-group-item">No Hp :<?= user()->no_hp; ?></li>
                    <li class="list-group-item">Approval Status :<?= user()->approval_status; ?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form</h5>
                    <p class="card-text"><?= user()->addres; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <div id="map">

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>