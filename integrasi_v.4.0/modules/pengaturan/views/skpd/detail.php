<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Detail Satuan Kerja Perangkat Daerah (SKPD)
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
						<a href="<?php echo site_url('pengaturan/skpd');?>">Satuan Kerja Perangkat Daerah (SKPD)</a>
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
								<i class="fa fa-pencil"></i>Data Detail: <?php echo $skpd_nama; ?>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form class="form-horizontal" role="form">							
								<div class="form-body">
                                    <h3 class="form-section">Identitas </h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="urusan_kode">Urusan :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $urusan_nama;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_nomor">Nomor :</label>
                                                <div class="col-md-6">
                                                	<p class="form-control-static"><?php echo $skpd_nomor; ?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<label class="control-label col-md-3" for="skpd_nama">Nama :</label>
                                                <div class="col-md-9">
                                                	<p class="form-control-static"><?php echo $skpd_nama; ?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="skpd_kewenangan">Kewenangan :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $skpd_kewenangan;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="skpd_pimpinan">Pimpinan :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $skpd_pimpinan;?></p>
                                                </div>
											</div>
										</div>
									</div>
									
									<h3 class="form-section">Informasi Kontak</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="skpd_alamat">Alamat :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $skpd_alamat;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_telepon">Telepon :</label>
												<div class="col-md-6">
                                                	<p class="form-control-static"><?php echo $skpd_telepon; ?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_fax">Fax :</label>
												<div class="col-md-6">
                                                	<p class="form-control-static"><?php echo $skpd_fax; ?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label class="control-label col-md-4" for="skpd_email">Email :</label>
												<div class="col-md-8">
                                                	<p class="form-control-static"><?php echo $skpd_email;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-2" for="skpd_website">Website :</label>
												<div class="col-md-10">
                                                	<p class="form-control-static"><?php echo $skpd_website;?></p>
                                                </div>
											</div>
										</div>
									</div>
									<h3 class="form-section">Informasi Status</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_aktif">Tahun Aktifasi :</label>
                                                <div class="col-md-6">
                                                	<p class="form-control-static"><?php echo $skpd_aktif; ?></p>
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_entri">Entri Data :</label>
												<div class="col-md-6">
                                                	<input type="checkbox" name="skpd_entri" id="skpd_entri" <?php echo $skpd_entri;?> class="make-switch" data-on-text="&nbsp;YES&nbsp;" data-off-text="&nbsp;NO&nbsp;" data-on-color="primary" data-off-color="default" readonly="readonly">
                                                </div>
											</div>
										</div>
                                    </div>
                                    <div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_kegiatan">Kegiatan Lainnya :</label>
												<div class="col-md-6">
                                                	<input type="checkbox" name="skpd_kegiatan" readonly="readonly" id="skpd_kegiatan" <?php echo $skpd_kegiatan;?> class="make-switch" data-on-text="&nbsp;ON&nbsp;" data-off-text="&nbsp;OFF&nbsp;" data-on-color="success" data-off-color="default">
                                                </div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label col-md-6" for="skpd_lokasi">Lokasi Kegiatan :</label>
												<div class="col-md-6">
                                                	<input type="checkbox" readonly="readonly" name="skpd_lokasi" id="skpd_lokasi" <?php echo $skpd_lokasi;?> class="make-switch" data-on-text="&nbsp;ENABLE&nbsp;" data-off-text="&nbsp;DISABLE&nbsp;" data-on-color="danger" data-off-color="default">
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
													<a href="<?php echo site_url('pengaturan/skpd/edit/'.$skpd_kode);?>" class="btn green"><i class="fa fa-pencil"></i> Ubah Data</a>
													<a href="<?php echo site_url('pengaturan/skpd');?>" class="btn default"><i class="fa fa-reply"></i> Kembali</a>
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