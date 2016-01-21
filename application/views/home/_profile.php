          <h3>Profile anda</h3>
          <table class="table table-bordered" style="margin-bottom: 30px">
            <tr>
              <td width="40%" class="info">Nama </td>
              <td class="warning"><?php if(isset($data)) echo $data->username ?></td>
            </tr>
            <tr>
              <td class="info">Email </td>
              <td class="warning"><?php if(isset($data)) echo $data->email ?></td>
            </tr>
            <tr>
              <td class="info">Asal sekolah </td>
              <td class="warning"><?php if(isset($data)) echo $data->sekolah_asal ?></td>
            </tr>
          </table>

          <h3>Jadwal anda</h3>
          <table class="table table-bordered" style="margin-bottom: 30px">
            <tr class="info">
              <td>Mulai ujian</td>
              <td>Selesai ujian</td>
              <td>Pengumuman hasil</td>
            </tr>
            <tr class="warning">
              <td>12 Januari 2015 08:00 PM</td>
              <td>12 Januari 2015 08:00 PM</td>
              <td>12 Januari 2015 08:00 PM</td>
            </tr>
          </table>