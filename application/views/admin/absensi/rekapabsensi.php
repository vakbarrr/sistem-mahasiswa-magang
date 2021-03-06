<div class="row">
	<div class="col-12">
		<form method="POST" id="myForm" action="<?= base_url('rekap-absensi-filter') ?>" enctype="multipart/form-data">
			<div class="col-sm-12">
				<h4><?= $bulan, ' ', $tahun ?></h4>
				<input type="month" name="date">
				<button type="submit" class="btn btn-primary mb-2">Filter Data</button>
			</div>
		</form>
		<div class="card m-b-30">
			<div class="card-body">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th>NIP</th>
							<th>Nama</th>
							<th>Hadir WFO</th>
							<th>Hadir WFH</th>
							<th>Izin</th>
							<th>Sakit</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$no = 1;
						foreach ($data as $data) {
							$jumlah = 0;
							$stotal = 0;
							$absen  = $this->absen->absenbulan($data->nim, $tahun, $bulan)->num_rows();
							$wfh  = $this->absen->absenwfh($data->nim, $tahun, $bulan)->num_rows();
							$sakit  = $this->absen->sakitbulan($data->nim, $tahun, $bulan)->num_rows();
							$izin   = $this->absen->izinbulan($data->nim, $tahun, $bulan)->num_rows();

							// $overtime   = $this->absen->overtimebulan($data->nip, $tahun, $bulan)->num_rows();
							//var_dump($cuti);
							//hitung hari cuti
						?>
							<tr>
								<td width="1%"><?= $no++ ?></td>
								<td><?= ucfirst($data->nim) ?></td>
								<td><?= ucfirst($data->nama) ?></td>
								<td><?= $absen ?></td>
								<td><?= $wfh ?></td>
								<td><?= $izin ?></td>
								<td><?= $sakit ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
