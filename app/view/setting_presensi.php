<?php
	if(!isset($_SESSION['status'])){
header("Location: ".BASE_URL."login");
exit;
}
	include_once'app/module/setting_presensi/list.php';
	include_once'app/module/setting_presensi/action.php';
?>
<div class="main-content">
	<div class="header bg-primary pb-6">
		<div class="container-fluid">
			<div class="header-body">
				<div class="row align-items-center pt-6 pb-3">
					<div class="col-lg-6 col-7">
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mt--6">
		<!-- Table -->
		<div class="row">
			<div class="col">
				<div class="card">
					<!-- Card header -->
					<div class="card-header">
						<h3 class="mb-0">Setting Presensi</h3>
						<p class="text-sm mb-0">
							Halaman ini digunakan untuk mengatur presensi jam masuk dan jam pulang pegawai. <br>
						Apabila ingin merubah jam presensi ubah dalam form input dan klik tombol simpan.
						</p>
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="jamMasuk" class="form-control-label">Presensi Jam Masuk</label>
										<div class="row">
											<div class="col">
												<input class="form-control" type="time" name="jamMasuk1" id="jamMasuk" value="<?= $view_jam['jam_masuk1'] ?>">
											</div>
											<div class="col">
												<input class="form-control" type="time" name="jamMasuk2" id="jamMasuk" value="<?= $view_jam['jam_masuk2'] ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="jamPulang" class="form-control-label">Presensi Jam Pulang</label>
										<div class="row">
											<div class="col">
												<input class="form-control" type="time" name="jamPulang1" id="jamPulang"value="<?= $view_jam['jam_pulang1'] ?>">
											</div>
											<div class="col">
												<input class="form-control" type="time" name="jamPulang2" id="jamPulang" value="<?= $view_jam['jam_pulang2'] ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-warning mt-2 " style="float: right" onclick="confirm('Ubah jam presensi?')" name="editJam" >Simpan Jam Presensi</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>