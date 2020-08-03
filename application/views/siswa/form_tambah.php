<div class="container center">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <div class="row">
        <div class="col-lg-9">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
            </div>
            <div style="color: red;"><?php echo validation_errors(); ?></div>
            <?php echo form_open("siswa/tambah"); ?>
            <form class="user">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="input_nis" value="<?php echo set_value('input_NIS'); ?>" placeholder="Isikan NIS">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="input_nama" value="<?php echo set_value('input_Nama'); ?>" placeholder="Isikan Nama">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="input_kelas" value="<?php echo set_value('input_Kelas'); ?>" placeholder="Isikan Kelas">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="input_jurusan" value="<?php echo set_value('input_Jurusan'); ?>" placeholder="Isikan Jurusan">
                  </div>
                  <hr>
                  <input type="submit" name="submit" value="Simpan">
                  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
                  <?php echo form_close(); ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </table>