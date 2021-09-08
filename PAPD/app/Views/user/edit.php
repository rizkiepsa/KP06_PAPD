<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <!-- Form -->
    <h2 class="h3 mb-4 text-gray-800">Form Edit User</h2>

    <div class="row">
        <div class="col-lg-8">

            <form action="<?= base_url(); ?>/user/update/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= user()->id; ?>">
                <input type="hidden" name="fotoLama" value="<?= user()->user_image; ?>">
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" autofocus value="<?= (old('fullname')) ? old('fullname') : $user->fullname ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= user()->username; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?= (old('nik')) ? old('nik') : $user->nik ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                        <select class="form-control <?= ($validation->hasError('instansi')) ? 'is-invalid' : ''; ?>" id="instansi" name="instansi" aria-label="multiple select example">
                            <option selected value="<?= (old('instansi')) ? old('instansi') : $user->instansi ?>">-Pilih Instansi-</option>
                            <?php foreach ($npds as $npd) : ?>
                                <option value="<?= $npd->nama; ?>"><?= $npd->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= user()->email; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="nohp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" value="<?= (old('no_hp')) ? old('no_hp') : $user->no_hp ?>">
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>/img/<?= $user->user_image; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="Foto"><?= $user->user_image; ?></label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<?= $this->endSection(); ?>