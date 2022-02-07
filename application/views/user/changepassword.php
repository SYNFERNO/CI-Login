        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <form action="<?= base_url('user/changepassword') ?>" method="post">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control mb-2" name="current_password" id="current_password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control mb-2" name="new_password1" id="new_password1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Repeat Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control mb-2" name="new_password2" id="new_password2">
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->