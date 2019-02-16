<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <header class="bg-orange">
                <h4><i class="fa fa-edit"></i> Edit Kontributor</h4>
            </header>
            <div class="box-body">
                
                <form class="form-horizontal" method="POST" action="<?= base_url('contributor/update/'.$this->uri->segment(3)) ?>">
                    
                    <input type="hidden" name="id" value="<?= $edit->id ?>">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" autocomplete="off" value="<?= $edit->username ?>">
                        </div>
                    </div>

                    <hr class="b-s-dashed">      
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <hr class="b-s-dashed">      
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ulangi Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="ulangi_password">
                        </div> 
                    </div>

                    <hr class="b-s-dashed">              
                    
                    <div class="form-group">
                        <label for="text1" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-rect btn-success"><i class="fa fa-save"></i> Simpan Perubahan</button>
                            <a href="<?= base_url('contributor') ?>" class="btn btn-rect btn-danger">Batal</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>