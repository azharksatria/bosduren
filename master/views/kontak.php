<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Kontak</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <?php foreach ($query->tampil_kontak() as $row){ ?>
                  <form action="root/proses.php?aksi=update_kontak" method="post" >
              <div class="form-group">
                <span><h4>Jalan</h4></span>
                    <input type="text" class="form-control" name="jalan" value="<?php echo $row['jalan'];?>">
              </div>
              <div class="form-group">
                <span><h4>Kota/Provinsi</h4></span>
                    <input type="text" class="form-control" name="kota" value="<?php echo $row['kota'];?>">
              </div>
              <div class="form-group">
                <span><h4>Call</h4></span>
                    <input type="text" class="form-control" name="hp" value="<?php echo $row['hp'];?>">
              </div>
              <div class="form-group">
                <span><h4>WhatsApp</h4></span>
                    <input type="text" class="form-control" name="whatsapp" value="<?php echo $row['whatsapp'];?>">
              </div>
              <div class="form-group">
                <span><h4>Email 1</h4></span>
                    <input type="text" class="form-control" name="email1" value="<?php echo $row['email1'];?>">
              </div>
              <div class="form-group">
                <span><h4>Email 2</h4></span>
                    <input type="text" class="form-control" name="email2" value="<?php echo $row['email2'];?>">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
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