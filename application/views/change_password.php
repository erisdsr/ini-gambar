<!-- begin .app-main -->
<div class="app-main">
<!-- begin .main-heading -->
<header class="main-heading shadow-2dp">
  <!-- begin dashhead -->
  <div class="dashhead bg-white">
    <div class="dashhead-titles">
      <h1 class="dashhead-title"><?= $title_page ?></h1>
    </div>

    <div class="dashhead-toolbar">
      <div class="dashhead-toolbar-item">
        <a href="<?= base_url() ?>">Dashboard</a>
        / <?= $title_page ?>
      </div>
    </div>
  </div>
  <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->

<!-- begin .main-content -->
<div class="main-content bg-clouds">

  <!-- begin .container-fluid -->
  <div class="container-fluid p-t-15">

    <?php if($this->session->flashdata('info')){ ?>

    <div class="alert alert-success"><?= $this->session->flashdata('info') ?></div>

    <?php } else if($this->session->flashdata('danger')){ ?>

    <div class="alert alert-danger"><?= $this->session->flashdata('danger') ?></div>

    <?php } ?>

    <div class="box">
      
      <header class="bg-orange">
        <h4><i class="fa fa-lock"></i> Ganti Password</h4>
      </header>

      <div class="box-body">

        <?= form_open('change_password/update') ?>

        <div class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password baru">
            </div>
          </div>

          <hr class="b-s-dashed">

          <div class="form-group">
            <label class="col-sm-2 control-label">Ulangi Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="ulangi_password" placeholder="Ulangi password">
            </div>
          </div>

          <hr class="b-s-dashed">

          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <input type="submit" class="btn btn-rect btn-success" name="save" value="Perbarui Password">
            </div>
          </div>

        </div>

        <?= form_close() ?>

      </div>
    </div>

  </div>
  <!-- END: .container-fluid -->
</div>
<!-- END: .main-content -->

