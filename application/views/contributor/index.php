<div class="app-main">
  <header class="main-heading shadow-2dp">
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
  </header>
  <div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">

      

      <?php if($this->session->flashdata('info')){ ?>

      <div class="alert alert-success btn-rect alert-dismissible show" role="alert">
          <?= $this->session->flashdata('info'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <?php } if($this->session->flashdata('danger')){ ?>

      <div class="alert alert-danger btn-rect alert-dismissible show" role="alert">
          <?= $this->session->flashdata('danger'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <?php } ?>

      <?php
      if(empty($this->uri->segment(3))){
        include "add.php";
      } else {
        include "edit.php";
      }
      ?>

      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <header class="bg-alizarin">   
              <h4><i class="fa fa-table"></i> Data Kontributor</h4>
            </header>
            <div class="box-body">
              <div class="table-responsive">
                <table data-plugin="datatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th> tulis
                      <th>ID</th>
                      <th>Username</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $no = 0; foreach($get as $data){ $no++ ?>

                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data->id ?></td>
                      <td><?= $data->username ?></td>
                      <td>
                        <a href="<?= base_url('contributor/edit/'.$data->id) ?>" class="btn btn-rect btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?= base_url('contributor/delete/'.$data->id) ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-rect btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>