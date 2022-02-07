<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-1">Change your Password for</h1>
                                    <h5 class="mb-3"><?= $this->session->userdata['reset_email']; ?></h5>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?= base_url('auth/changePassword') ?>">
                                    <div class="form-group">
                                        <input type="password" id="password1" name="password1" class="form-control form-control-user" placeholder="Enter new password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password2" name="password2" class="form-control form-control-user" placeholder="Retype password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button href="index.html" class="btn btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>