<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Anggaran Urusan Rutin <small>entri data &amp; informasi detail</small>
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
						<a href="#">Anggaran Urusan Rutin</a>
					</li>
				</ul>
			</div>
            <!-- END PAGE HEADER-->
			<?php if ($this->session->flashdata('success')) { echo $this->session->flashdata('success');} ?>
            <?php echo validation_errors(); ?>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-pencil"></i>Anggaran Urusan Rutin
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo site_url('pengaturan/program_rutin/update/'.$kode);?>" class="horizontal-form" method="post">							
								<input type="hidden" name="kode" value="<?php echo $kode; ?>" />
								<div class="form-body">
									<h3 class="form-section">Anggaran Murni</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="anggaran2013">Tahun 2013<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="anggaran2013" id="anggaran2013" value="<?php echo $anggaran2013; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="" required="required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="anggaran2014">Tahun 2014<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="anggaran2014" id="anggaran2014" value="<?php echo $anggaran2014; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="" required="required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="anggaran2015">Tahun 2015<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="anggaran2015" id="anggaran2015" value="<?php echo $anggaran2015; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="" required="required">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="anggaran2016">Tahun 2016<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="anggaran2016" id="anggaran2016" value="<?php echo $anggaran2016; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="" required="required">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="anggaran2017">Tahun 2017<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="anggaran2017" id="anggaran2017" value="<?php echo $anggaran2017; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="" required="required">
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Anggaran Perubahan</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="reanggaran2013">Tahun 2013<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="reanggaran2013" id="reanggaran2013" value="<?php echo $reanggaran2013; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="reanggaran2014">Tahun 2014<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="reanggaran2014" id="reanggaran2014" value="<?php echo $reanggaran2014; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="reanggaran2015">Tahun 2015<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="reanggaran2015" id="reanggaran2015" value="<?php echo $reanggaran2015; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="reanggaran2016">Tahun 2016<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="reanggaran2016" id="reanggaran2016" value="<?php echo $reanggaran2016; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="reanggaran2017">Tahun 2017<span class="required">*</span> :</label>
												<input type="text" class="form-control" name="reanggaran2017" id="reanggaran2017" value="<?php echo $reanggaran2017; ?>" onkeypress="return isNumber(event)" style="text-align:right;" placeholder="">
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
													<a href="<?php echo site_url('pengaturan/program_rutin');?>" class="btn default"><i class="fa fa-times"></i> Batal</a>
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