<div class="card shadow mb-4">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr style="text-align:center">
          <th>SENIN</th>
          <th>SELASA</th>
          <th>RABU</th>
          <th>KAMIS</th>
          <th>JUM'AT</th>

          <!-- <th colspan="2">Pengaturan</th> -->
        </tr>

        <?php
        if (!empty($jadwal)) {
          foreach ($jadwal as $data) {
            echo "<tr>
          <td>" . $data->Senin . "</td>
          <td>" . $data->Selasa . "</td>
          <td>" . $data->Rabu . "</td>
          <td>" . $data->Kamis . "</td>
          <td>" . $data->Jumat . "</td>
          
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