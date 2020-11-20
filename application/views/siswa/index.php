<!-- <h1>&nbsp;JAMBU FIRE</h1>
<div class="card shadow mb-1">
  <a class="d-block card-header py-3" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
    <h6 class="m-0 font-weight-bold text-primary">Perubahan</h6>
  </a>
  <div class="collapse" id="collapseExample3">
    <div class="my-2"></div>&nbsp;&nbsp;&nbsp;&nbsp; -->
<!-- <a class="btn btn-warning btn-icon-split" href='<?php echo base_url('login/logout'); ?>'>
      <span class="icon text-white-50">
        <i class="fas fa-exclamation-triangle"></i>
      </span>
      <span class="m-0 font-weight-bold text-danger">LogOut</span>
    </a> -->

<!-- <h4><a class="m-0 font-weight-bold text-dark badge badge-danger" href='<?php echo base_url('login/logout'); ?>'>LogOut</a></h4>
  </div> -->
<!-- <div class="card card-body">
      <h4><a class="m-0 font-weight-bold text-dark badge badge-success" href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a></h4>
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;<a class="m-0 font-weight-bold text-dark badge badge-danger" href='<?php echo base_url('login/logout'); ?>'>LogOut</a></h4>
    </div>
  </div>
</div>
<div class="card mb-1 py-1 border-bottom-primary">
  <div class="card-body">
  </div>
</div>
<hr> -->

<div class="card shadow mb-4">
  <!-- <div class="card-header py-3">
    <h4><a class="m-0 font-weight-bold text-dark badge badge-success" href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a></h4>

  </div> -->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr style="text-align:center">
          <th> NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jurusan</th>

          <th colspan="2">Pengaturan</th>
        </tr>

        <?php
        if (!empty($siswa)) {
          foreach ($siswa as $data) {
            echo "<tr>
          <td>" . $data->NIS . "</td>
          <td>" . $data->Nama . "</td>
          <td>" . $data->Kelas . "</td>
          <td>" . $data->Jurusan . "</td>
          
          <td><a href='" . base_url("siswa/ubah/" . $data->NIS) . "'>Ubah</a></td>
          <td><a href='" . base_url("siswa/hapus/" . $data->NIS) . "'>Hapus</a></td>
          </tr>";
          }
        } else {
          echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
        }
        ?>

      </table>
    </div>
  </div>
</div>
</div>