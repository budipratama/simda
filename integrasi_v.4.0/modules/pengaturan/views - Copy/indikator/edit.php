<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Ubah Indikator
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('dashboard');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
                    <li>
						<a href="<?php echo site_url('pengaturan');?>">Control Panel</a>
						<i class="fa fa-angle-right"></i>
					</li>
                    <li>
						<a href="<?php echo site_url('pengaturan/indikator');?>">Indikator</a>
						<i class="fa fa-angle-right"></i>
					</li>
                     <li>
						<a href="#">Ubah</a>
					</li>
				</ul>
			</div>
			
            <div class="note note-warning">
				<p>
					NOTE: Silahkan isi form Indikator ini dengan data-data yang valid!. Sesuai dengan arahan dari BAPPEDA Kabupaten Bekasi.
				</p>
			</div>
			<?php echo validation_errors(); ?>
            <!-- END PAGE HEADER-->
			<!-- BEGIN FORM -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-pencil"></i>Ubah Indikator
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo site_url('pengaturan/indikator/update/'.$kode);?>" class="horizontal-form" method="post">							
								<input type="hidden" name="kode" value="<?php echo $kode; ?>" />
								<div class="form-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label" for="tujuan_kode">Tujuan<span class="required">*</span> :</label>
												<?php combobox('db', $tujuan, 'tujuan_kode', 'kode', 'tujuan', $tujuan_kode, 'show_form_sasaran_by_tujuan();', 'Pilih Tujuan', 'class="select2_category form-control" tabindex="1" required="required"'); ?>
											</div>
										</div>
									</div>
									<?php if ($sasaran_kode){?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group" id="tampil_combobox_sasaran">
												<label class="control-label" for="sasaran_kode">Sasaran<span class="required">*</span> :</label>
												<?php combobox('db', $sasaran, 'sasaran_kode', 'kode', 'sasaran', $sasaran_kode, '', 'Pilih Sasaran', 'class="select2_category form-control" required="required"'); ?>
											</div>
										</div>
									</div>
									<?php } else { ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group" id="tampil_combobox_sasaran">
												<label class="control-label" for="sasaran_kode">Sasaran<span class="required">*</span> :</label>
												<select class="select2_category form-control" name="sasaran_kode" id="sasaran_kode" data-placeholder="Pilih Sasaran" required="required">
												</select>
											</div>
										</div>
									</div>
									<?php } ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label" for="indikator">Indikator<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="indikator" id="indikator" value="<?php echo $indikator; ?>" placeholder="" required="required">
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Anggaran Murni</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="tahun2013">Tahun 2013 :</label>
												<input type="text" class="form-control" name="tahun2013" id="tahun2013" value="<?php echo $tahun2013; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="tahun2014">Tahun 2014 :</label>
												<input type="text" class="form-control" name="tahun2014" id="tahun2014" value="<?php echo $tahun2014; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="tahun2015">Tahun 2015 :</label>
												<input type="text" class="form-control" name="tahun2015" id="tahun2015" value="<?php echo $tahun2015; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="tahun2016">Tahun 2016 :</label>
												<input type="text" class="form-control" name="tahun2016" id="tahun2016" value="<?php echo $tahun2016; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="tahun2017">Tahun 2017 :</label>
												<input type="text" class="form-control" name="tahun2017" id="tahun2017" value="<?php echo $tahun2017; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Anggaran Perubahan</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="retahun2013">Tahun 2013 :</label>
												<input type="text" class="form-control" name="retahun2013" id="retahun2013" value="<?php echo $retahun2013; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="retahun2014">Tahun 2014 :</label>
												<input type="text" class="form-control" name="retahun2014" id="retahun2014" value="<?php echo $retahun2014; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="retahun2015">Tahun 2015 :</label>
												<input type="text" class="form-control" name="retahun2015" id="retahun2015" value="<?php echo $retahun2015; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="retahun2016">Tahun 2016 :</label>
												<input type="text" class="form-control" name="retahun2016" id="retahun2016" value="<?php echo $retahun2016; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="retahun2017">Tahun 2017 :</label>
												<input type="text" class="form-control" name="retahun2017" id="retahun2017" value="<?php echo $retahun2017; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="0">
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-actions">
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" class="btn green"><i class="fa fa-check"></i> Simpan Data</button>
													<a href="<?php echo site_url('pengaturan/indikator');?>" class="btn default"><i class="fa fa-times"></i> Batal</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
										</div>
									</div>
								</div>
								
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
     
		</div>
		
	</div>
	<script>
	function show_form_sasaran_by_tujuan(){
		var tujuan_kode = $('select[name=tujuan_kode]').val();
		load('pengaturan/indikator/tampil_combobox_sasaran/'+tujuan_kode, '#tampil_combobox_sasaran');
	}
	
	</script>