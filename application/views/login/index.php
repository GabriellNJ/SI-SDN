<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | SDN 2 Sidorejo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('asset/')?>front/img/uploads/favicon1.png">

    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>asset/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() ?>asset/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() ?>asset/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary" style="background-color:red;">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Selamat Datang !</h5>
                                        <p>Halaman Login SDN 2 Sidorejo</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?= base_url() ?>asset/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="card-body pt-0">
                                    <div class="mb-4"></div>
                            <div class="p-2">
                                <div id="login_alert" class="mb-50"></div>
                                <form action="" method="post">
                                <?= form_error('UN','<small class="text-danger pl-3">','</small>');?>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="UN" <?= set_value('UN');?>>
                                    </div>
                                    <?= form_error('PW','<small class="text-danger pl-3">','</small>');?>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="PW" <?= set_value('PW');?>>
                                    </div>

    

                                    

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary glow w-100 position-relative"
                                            type="submit">Log
                                            In</button>
                                    </div>
                                </form>

                              

                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->

    <script>
    const BASEURL = '<?= base_url() ?>'
    const csrf = {
        token_name: '<?= $this->security->get_csrf_token_name() ?>',
        hash: '<?= $this->security->get_csrf_hash() ?>'
    }
    </script>
    <script src="<?= base_url() ?>asset/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>asset/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>asset/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>asset/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>asset/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>asset/js/app.js"></script>

    <?php include('index_js.php') ?>
</body>

</html>