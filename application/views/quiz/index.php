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
              <h4><i class="fa fa-table"></i> Data Kuis</h4>
            </header>
            <div class="box-body">
              <div class="table-responsive">
                <table data-plugin="datatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Gambar</th>
                      <th>Jawaban</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>