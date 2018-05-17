<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Produk Olahan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <?php foreach ($query->tampil_produk_kiri() as $row){ ?>
                  <form action="root/proses.php?aksi=update_produk" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" placeholder="Title">
              </div>
              <div class="form-group">
                    <textarea  name="konten" class="form-control"><?php echo $row['konten'];?></textarea>
                    <input type="hidden" value="<?php echo $row['id'];?>" name="id">
              </div>
              <div class="form-group">
                    <button class="btn btn-primary" type="submit"> Update</button>
              </div>
                  </form>
                <?php } ?>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <?php foreach ($query->tampil_produk_kanan() as $row){ ?>
                  <form action="root/proses.php?aksi=update_produk" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" placeholder="Title">
              </div>
              <div class="form-group">
                    <textarea  name="konten" class="form-control"><?php echo $row['konten'];?></textarea>
                    <input type="hidden" value="<?php echo $row['id'];?>" name="id">

              </div>
              <div class="form-group">
                    <button class="btn btn-primary" type="submit"> Update</button>
              </div>
                  </form>
                <?php } ?>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>