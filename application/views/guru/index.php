<div class="card shadow mb-4">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr style="text-align:center">
          <th>KODE GURU</th>
          <th>Nama</th>
          <th>Pelajaran</th>


          <th colspan="2">Pengaturan</th>
        </tr>

        <?php
        if (!empty($guru)) {
          foreach ($guru as $data) {
            echo "<tr>
          <td>" . $data->KdGuru . "</td>
          <td>" . $data->Nama . "</td>
          <td>" . $data->Pelajaran . "</td>
        
          <td><a href='" . base_url("guru/ubah/" . $data->KdGuru) . "'>Ubah</a></td>
          <td><a href='" . base_url("guru/hapus/" . $data->KdGuru) . "'>Hapus</a>
          
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
<!-- <td><a href='" . base_url("siswa/ubah/" . $data->NIS) . "'>Ubah</a></td>
          <td><a href='" . base_url("siswa/hapus/" . $data->NIS) . "'>Hapus</a></td> -->