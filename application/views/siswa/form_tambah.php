<div class="container center">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <div class="row">
        <div class="col-lg-9">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-left  text-gray-900 mb-4">Tambah Data</h1>
            </div>
            <div style="color: red;"><?php echo validation_errors(); ?></div>
            <?php echo form_open("siswa/tambah"); ?>
            <form class="user">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                  <div class="form-group">
                    <label for="username" class="text-info">NIS:</label><br>
                    <input type="text" class="form-control form-control-user" name="input_nis" value="<?php echo set_value('input_NIS'); ?>" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="username" class="text-info">Nama:</label><br>
                    <input type="text" class="form-control form-control-user" name="input_nama" value="<?php echo set_value('input_Nama'); ?>" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="username" class="text-info">Kelas:</label><br>
                    <input type="text" class="form-control form-control-user" name="input_kelas" value="<?php echo set_value('input_Kelas'); ?>" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="username" class="text-info">Jurusan:</label><br>
                    <input type="text" class="form-control form-control-user" name="input_jurusan" value="<?php echo set_value('input_Jurusan'); ?>" placeholder="">
                  </div>
                  <hr>
                  <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                  <a href="<?php echo base_url('siswa'); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
                  <!-- <?php echo form_close(); ?> -->
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </table>