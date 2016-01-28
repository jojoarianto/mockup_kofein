          <h3>Profile anda</h3>
          <table class="table table-bordered shadow" style="margin-bottom: 30px">
            <tr>
              <td width="40%" class="info">Nama </td>
              <td class="warning"><?php if(isset($data['user'])) echo $data['user']->username ?></td>
            </tr>
            <tr>
              <td class="info">Email </td>
              <td class="warning"><?php if(isset($data['user'])) echo $data['user']->email ?></td>
            </tr>
            <tr>
              <td class="info">Asal sekolah </td>
              <td class="warning"><?php if(isset($data['user'])) echo $data['user']->sekolah_asal ?></td>
            </tr>
          </table>

          <h3>Jadwal anda</h3>
          <table class="table table-bordered shadow" style="margin-bottom: 30px">
            <tr class="info">
              <td>Mulai ujian</td>
              <td>Selesai ujian</td>
              <td>Pengumuman hasil</td>
            </tr>
            <tr class="warning">
              <td><?php if(isset($data['waktu'])) { echo 'Pukul : ' . indonesian_date( $data['waktu']->time_start, 'H:i' )  . '<br>' . indonesian_date( $data['waktu']->time_start, 'l, j F Y', '' );      } else echo "-"; ?></td>
              <td><?php if(isset($data['waktu'])) echo indonesian_date_custom( $data['waktu']->time_end, 'l, j F Y' );        else echo "-"; ?></td>
              <td><?php if(isset($data['pengumuman'])) echo indonesian_date_custom( $data['pengumuman']->time_pengumuman, 'l, j F Y'); else echo "-"; ?></td>
            </tr>
          </table>