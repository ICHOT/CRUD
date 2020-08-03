<h1>&nbsp;JAMBU FIRE</h1>
<hr>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="m-0 font-weight-bold text-primary" href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a><br><br>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr style="text-align:center">
          <th> NIS</th>
          <th>Nama</th>
          <th>Kelas Kelamin</th>
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