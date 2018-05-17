<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Slider 1</th>
                  <th>Slider 2</th>
                  <th>Slider 3</th>
                  
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <?php foreach ($query->tampil_slider() as $row) { ?>
                  <form action="root/proses.php?aksi=update_slider" method="post" enctype="multipart/form-data">
                  <td>
                  <img src="root/images/<?php echo $row['gambar'];?>" width="300" height="100">
                  <br>
                  <input type="file" name="photo" accept="image/*" width="20px">
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>" width="20px">
                  <button type="submit" class"btn btn-primary">Update</button>
                  </td>             
                  </form>
                  <?php }?>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
