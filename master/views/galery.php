<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Gallery</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <?php foreach ($query->tampil_gallery_kiri() as $row){ ?>
                  <form action="root/proses.php?aksi=update_gallery" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <img src="root/images/<?php echo $row['gambar'];?>" width="50%">
              </div>
              <div class="form-group">
                    <input type="file" accept="image/jpg" name="photo">
              </div>
              <div class="form-group">
                    <input type="text" name="caption" value="<?php echo $row['caption'];?>" placeholder="caption">
              </div>
              <div class="form-group">
                    <input type="text" name="link" value="<?php echo $row['link'];?>" placeholder="link">
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
                <?php foreach ($query->tampil_gallery_kanan() as $row){ ?>
                  <form action="root/proses.php?aksi=update_gallery" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <img src="root/images/<?php echo $row['gambar'];?>" width="50%">
              </div>
              <div class="form-group">
                    <input type="file" accept="image/jpg" name="photo">
              </div>
              <div class="form-group">
                    <input type="text" name="caption" value="<?php echo $row['caption'];?>" placeholder="caption">
              </div>
              <div class="form-group">
                    <input type="text" name="link" value="<?php echo $row['link'];?>" placeholder="link">
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