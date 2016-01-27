<div class="container" style="margin-top: 50px;">
	<br>
	<div class="text-center">
		<h2><span style="color:#2489C5;"><b>OLFAR</b></span> 2016</h2>
		<hr>
		<div class="row">
			<div class="col-md-3 col-md-offset-3" >
				<table border="0" style="text-align: left; width: 100%;">
					<tr>
						<td width="52%">Waktu mulai</td>
						<td>: <?php if(isset($data['waktu'])) { echo indonesian_date( $data['waktu']->time_start, 'H:i' ); } else echo "-"; ?></td>
					</tr>
					<tr>
						<td>Waktu berakhir</td>
						<td>:  <?php if(isset($data['waktu'])) { echo indonesian_date( $data['waktu']->time_end, 'H:i' ); } else echo "-"; ?></td>
					</tr>
					<tr>
						<td>Masa Ujian</td>
						<td>: <?php if(isset($data['ujian'])) echo $data['ujian']->durasi_ujian; ?> Menit</td>
					</tr>
				</table>
			</div>
			<div class="col-md-3">
				<table border="0" style="text-align: left; width: 100%;">
					<tr>
						<td>Jumlah soal</td>
						<td>: <span id="n_soal"><?php if(isset($data['ujian'])) echo $data['ujian']->jumlah_soal; ?></span> butir</td>
					</tr>
					<tr>
						<td>Soal terjawab</td>
						<td>: <span id="n_terjawab">0</span> butir</td>
					</tr>
					<tr>
						<td>Belum terjawab</td>
						<td>: <span id="n_belum_terjawab">0</span> butir</td>
					</tr>
				</table>
			</div>
		</div>
		<hr>
	</div>

</div>