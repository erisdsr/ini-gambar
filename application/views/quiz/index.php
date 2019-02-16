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

        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <header class="bg-orange">
                        <h4><i class="fa fa-plus"></i> Tambahkan Kuis</h4>
                    </header>
                    <div class="box-body">

                        <form class="form-horizontal" method="post" action="<?php echo base_url('quiz/add'); ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="text1" class="col-sm-2 control-label">Pilih Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="soal" required>
                                </div>
                            </div>

                            <hr class="b-s-dashed">

                            <div class="form-group">
                                <label for="text1" class="col-sm-2 control-label">Jawaban</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jawaban" required>
                                </div>
                            </div>

                            <hr class="b-s-dashed">

                            <div class="form-group">
                                <label for="text1" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-rect btn-success"><i class="fa fa-plus"></i> Tambahkan Kuis</button>
                                    <a href="#" class="btn btn-rect btn-danger">Batal</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <header class="bg-alizarin">   
              <h4><i class="fa fa-table"></i> Data Kuis</h4>
            </header>
            <div class="box-body">

                <div class="container-fluid p-t-15">
                    <div class="row" data-plugin="lightgallery" data-selector=".thumbnail" data-thumbnail=true>
                        <?php foreach ($quiz_data as $quiz): ?>
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail" style="border-radius: 0; margin-bottom: 0;" data-src="<?php echo base_url('soal/').$quiz->image; ?>" data-sub-html="<h4><?php echo strtoupper($quiz->answer); ?></h4>">
                                    <img src="<?php echo base_url('soal/').$quiz->image; ?>" alt="<?php echo strtoupper($quiz->answer); ?>" data-toggle="tooltip" title="click for show">
                                    <div class="caption text-center">
                                        <h4><?php echo strtoupper($quiz->answer); ?></h4>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('quiz/delete/').$quiz->image; ?>">
                                    <button style="border-radius: 0" class="btn btn-block btn-danger"><i class="fa fa-trash"></i> HAPUS KUIS</button>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>