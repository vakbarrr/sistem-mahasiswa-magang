	<div class="navbar-custom">
		<div class="container-fluid">

			<div id="navigation">

				<!-- Navigation Menu-->
				<ul class="navigation-menu">

					<li class="has-submenu">
						<a href="/"><i class="icon-accelerator"></i> Dashboard</a>
					</li>

					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Master Data <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('data-mahasiswa'); ?>">Data Mahasiswa</a></li>
									<li><a href="<?= base_url('data-magang'); ?>">Data Magang</a></li>
									<li><a href="<?= base_url('data-nilai'); ?>">Data Nilai</a></li>
									<li><a href="<?= base_url('data-kontrak'); ?>">Data Kontrak</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Master Absensi <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('data-absensi'); ?>">Data Absensi</a></li>
									<li><a href="<?= base_url('data-cuti'); ?>">Data Izin</a></li>
									<li><a href="<?= base_url('rekap-absensi'); ?>">Rekap Absensi</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<!-- End navigation menu -->
			</div>
			<!-- end #navigation -->
		</div>
		<!-- end container -->
	</div>
