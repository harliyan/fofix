<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col">
			<div class="card text-white bg-danger mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<center><small><p class="card-title font-weight-bold">PEKALONGAN BARAT</p></small></center>
					<center><small><h1 class="card-text"><?php echo $get_barat_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-success mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<center><small><p class="card-title font-weight-bold">PEKALONGAN UTARA</p></small></center>
					<center><small><h1 class="card-text"><?php echo $get_utara_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-info mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<center><small><p class="card-title font-weight-bold">PEKALONGAN TIMUR</p></small></center>
					<center><small><h1 class="card-text"><?php echo $get_timur_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-warning mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<center><small><p class="card-title font-weight-bold">PEKALONGAN SELATAN</p></small></center>
					<center><small><h1 class="card-text"><?php echo $get_selatan_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<center><small><p class="card-title font-weight-bold">DATA PEKALONGAN</p></small></center>
					<center><small><h1 class="card-text"><?php echo $get_all_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
	</div>

	<!-- row kedua -->
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<div class="card border-left-danger shadow mb-3">
				<div class="card-body">
					<center><p class="card-title font-weight-bold">CLUSTER</p></center>
					<center><small><h1 class="card-text"><?php echo $get_cluster_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="card border-left-primary shadow mb-3">
				<div class="card-body">
					<center><p class="card-title font-weight-bold">JOINTING</p></center>
					<center><small><h1 class="card-text"><?php echo $get_jointing_count[0]->count; ?></h1><span>Data</span></small></center>
				</div>
			</div>
		</div>
	</div>
	<!-- end row kedua -->
	
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Data Kondisi</p>
						<div id="piechart2" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Data masuk pada sistem</p>
						<div id="piechart" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Jenis Konverter</p>
						<div id="piechart3" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of Main Content -->



