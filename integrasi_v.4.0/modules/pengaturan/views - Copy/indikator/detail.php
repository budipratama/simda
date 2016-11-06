<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Detail Indikator
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
						<a href="#">Detail</a>
					</li>
				</ul>
			</div>
			
            <!-- END PAGE HEADER-->
			<!-- BEGIN FORM -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-pencil"></i>Data Detail Indikator
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form class="form-horizontal" role="form">							
								<div class="form-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="tujuan_nama">Tujuan :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tujuan_nama;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="sasaran_nama">Sasaran :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $sasaran_nama;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="indikator">Indikator :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $indikator;?></p>
                                                </div>
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Anggaran Murni</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="tahun2013">Tahun 2013 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tahun2013;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="tahun2014">Tahun 2014 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tahun2014;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="tahun2015">Tahun 2015 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tahun2015;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="tahun2016">Tahun 2016 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tahun2016;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="tahun2017">Tahun 2017 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $tahun2017;?></p>
                                                </div>
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Anggaran Perubahan</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="retahun2013">Tahun 2013 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $retahun2013;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="retahun2014">Tahun 2014 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $retahun2014;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="retahun2015">Tahun 2015 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $retahun2015;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="retahun2016">Tahun 2016 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $retahun2016;?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-2" for="retahun2017">Tahun 2017 :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $retahun2017;?></p>
                                                </div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<a href="<?php echo site_url('pengaturan/indikator/edit/'.$kode);?>" class="btn green"><i class="fa fa-pencil"></i> Ubah Data</a>
													<a href="<?php echo site_url('pengaturan/indikator');?>" class="btn default"><i class="fa fa-reply"></i> Kembali</a>
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