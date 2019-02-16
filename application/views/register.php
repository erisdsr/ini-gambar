<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?= $title_page ?></title>
  <link rel="icon" href="<?= base_url('assets/images/favicon1.png') ?>">
  <!-- Core stylesheet files. REQUIRED -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>">

  <!-- Font Awesome -->
  <!-- WARNING: Font Awesome doesn't work if you view the page via file:// -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.css') ?>">

  <!-- animate.css -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/animate.css/animate.css') ?>">
  <!-- END: core stylesheet files -->
  <!-- Theme main stlesheet files. REQUIRED -->
  <link rel="stylesheet" href="<?= base_url('assets/css/chl.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/theme-peter-river.css') ?>">
  <!-- END: theme main stylesheet files -->

  <style media="screen">
    .app {
      background-image: url("<?= base_url('assets/img/bg.svg') ?>");
      background-repeat: no-repeat;
      background-size: cover;
    }

  </style>
</head>

<body class="bg-clouds">
  <div class="app">
    <div class="app-login">
      <div class="text-center box shadow-20 animated fadeInLeft b-r-4 p-a-20">

      
        <img src="<?= base_url('assets/images/1.png') ?>" style="height:200px; width: 230px; margin:3% 25%">

        <h1>Kontributor</h1>
        <h5>Isi form dibawah untuk dapat bergabung sebagai kontributor</h5><br>

        <?php if($this->session->flashdata('info')){ ?>

        <div class="alert alert-success alert-dismissible show" role="alert">
            <?= $this->session->flashdata('info'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php } if($this->session->flashdata('danger')){ ?>

        <div class="alert alert-danger alert-dismissible show" role="alert">
            <?= $this->session->flashdata('danger'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php } ?>

        <?= form_open('register/insert'); ?>

        <div class="text-left" role="form">
            <div class="form-group has-feedback">
                <input class="form-control" placeholder="Username" type="text" autocomplete="off" name="username" required="">
                <span class="form-control-feedback">
                    <i class="fa fa-fw fa-user"></i>
                </span>
            </div>

            <div class="form-group has-feedback">
                <input class="form-control" placeholder="Password" type="password" name="password" required="">
                <span class="form-control-feedback">
                    <i class="fa fa-fw fa-lock"></i>
                </span>
            </div>

            <div class="form-group has-feedback">
                <input class="form-control" placeholder="Ulangi Password" type="password" name="ulangi_password" required="">
                <span class="form-control-feedback">
                    <i class="fa fa-fw fa-lock"></i>
                </span>
            </div>

          <input type="submit" class="btn btn-primary btn-rect btn-block m-b-15" value="Gabung" name="submit">
        </div>

        <?= form_close(); ?>

        <p>Sudah punya akun? Login <a href="<?= base_url('login') ?>">disini!</a></p>

      </div>
    </div>

  <!-- Core javascript files. REQUIRED -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.js') ?>"></script>

  <!-- Bootstrap -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.js') ?>"></script>
</body>
</html>
