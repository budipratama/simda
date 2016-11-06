<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Pokok-Pokok Pikiran DPRD <small>entri data &amp; informasi detail</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('dashboard');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
                    <li>
						<a href="<?php echo site_url('usulan/dprd/hasil');?>">Pokok-Pokok Pikiran DPRD</a>
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
											<i class="fa fa-search"></i>Pencarian Pokok-Pokok Pikiran DPRD
										</div>
										<div class="tools">
											<a href="javascript:;" class="<?php echo (isset($formCari)?'expand':'collapse')?>" data-original-title="From Pencarian" title="From Pencarian"></a>
										</div>
									</div>
									<div class="portlet-body form" style="<?php echo (isset($formCari)?'display:none;':'')?>">
										<!-- BEGIN FORM-->
										<form action="<?php echo site_url('usulan/dprd/cari');?>" class="form-horizontal" method="post">
											<div class="form-body">
												<h3 class="form-section">Informasi Pencarian</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tahun <span class="required">*</span></label>
															<div class="col-md-9">
                                                            <!-- combobox('jenis=db,1d,2d', 'array', 'name', 'value', 'value_name', 'selected', 'js', 'label', 'script') -->
															<?php combobox('db', $tahun, 'tahun', 'tahun', 'tahun', $tahun_, '', 'Pilih Tahun Anggaran', 'class="select2_category form-control" tabindex="1" title="Silahkan Pilih Tahun Anggaran" required="required"'); ?>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">SKPD Pelaksana</label>
															<div class="col-md-9">
                                                            <?php if ($skpd_aktive == 'yes') { combobox('db', $skpd, 'skpd_kode', 'skpd_kode', 'skpd_nama', $skpd_, '', 'Semua SKPD Pelaksana', 'class="select2_category form-control" tabindex="1"'); 
															} else { 
															echo '<select class="select2_category form-control" name="skpd_kode" id="skpd_kode" data-placeholder="Pilih SKPD Pelaksana" tabindex="1" required="required">
															<option value="'.$skpd_kode.'" selected>'.$skpd_nama.'</option>
															</select>';
															} ?>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kecamatan</label>
															<div class="col-md-9">
															<?php if ($kecamatan_aktive == 'yes') { combobox('db', $kecamatan, 'kecamatan_kode', 'skpd_kd', 'skpd_nama', $kecamatan_, 'show_form_deskel_by_kecamatan();', 'Semua Kecamatan', 'class="select2_category form-control" tabindex="1"'); 
															} else {
															echo '<select class="select2_category form-control" name="kecamatan_kode" id="kecamatan_kode" data-placeholder="Pilih Kecamatan" tabindex="1" required="required">
															<option value="'.$kecamatan_kode.'" selected>'.$kecamatan_nama.'</option>
															</select>';
															} ?>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group" id="tampil_combobox_deskel_by_kecamatan">
															<label class="control-label col-md-3" for="deskel_kode">Desa/Kelurahan</label>
															<div class="col-md-9">
															<?php if ($deskel_ == 'deskel' || $deskel_ == ''){ ?>
																<select class="form-control select2_category" name="deskel_kode" id="deskel_kode">
																	<option value="">Semua Desa/Kelurahan</option>
																</select>
															<?php } else {
															combobox('db', $deskel, 'deskel_kode', 'skpd_kd', 'skpd_nama', $deskel_, '', 'Semua Desa/Kelurahan', 'class="select2_category form-control" tabindex="1"');
															} ?>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3" for="kegiatan">Nama Kegiatan</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="kegiatan" id="kegiatan" value="<?php echo $kegiatan_;?>" placeholder="Kegiatan...">
															</div>
														</div>
													</div>
													<!--/span-->
                                                    
												</div>
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-offset-1 col-md-12">
																<button type="submit" class="btn green"><i class="fa fa-check"></i>  Cari Pokok-Pokok Pikiran DPRD</button>
																<a href="<?php echo site_url('usulan/dprd');?>" class="btn default"> <i class="fa fa-times"></i> Bersihkan Hasil Pencarian</a>
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
            <div class="clearfix" id="hasil"></div>
			<?php if ($tahun_) { ?>
            <div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bars"></i>Daftar Pokok-Pokok Pikiran DPRD
							</div>
						</div>
						<script>
							var ajax_source_url = '<?php echo site_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/datatable/' . $this->uri->segment(4) . '/' . $this->uri->segment(5) . '/' . $this->uri->segment(6) . '/' . $this->uri->segment(7) . '/' . $this->uri->segment(8) . '/' . $this->uri->segment(9)); ?>';
							var ajax_source_field = [
										{ "data": "nomor" },
										{ "data": "kegiatan" },
										{ "data": "alamat" },
										{ "data": "skpd_nama" },
										{ "data": "admin_nama" },
										{ "data": "Actions" }
									];
						</script>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="tableUtama">
							<thead>
							<tr>
								<th style="width:20px">No</th>
								<th style="width:200px">Nama Kegiatan</th>
								<th style="width:200px">Lokasi</th>
								<th style="width:200px">SKPD Pelaksana</th>
								<th style="width:150px">Anggota DPRD</th>
								<th style="width:110px"> </th>
							</tr>
							</thead>
							<tbody>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<div class="row" style="height:200px;">
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- END CONTENT -->
	
	<a href="#successInsert" data-toggle="modal"></a>
	<div id="successInsert" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Success!</strong> Tambah Hasil Musrenbang</h4>
				</div>
				<div class="modal-body">
					 Data Pokok-Pokok Pikiran DPRD telah berhasil ditambahkan !
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#successUpdate" data-toggle="modal"></a>
	<div id="successUpdate" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Success!</strong> Ubah Hasil Musrenbang</h4>
				</div>
				<div class="modal-body">
					 Data Pokok-Pokok Pikiran DPRD telah berhasil diperbaharui !
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#successDelete" data-toggle="modal"></a>
	<div id="successDelete" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Success!</strong> Hapus Hasil Musrenbang</h4>
				</div>
				<div class="modal-body">
					 Data Pokok-Pokok Pikiran DPRD telah berhasil dihapus !
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#successTransfer" data-toggle="modal"></a>
	<div id="successTransfer" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Success!</strong> Transfer Pra Rencana Kerja</h4>
				</div>
				<div class="modal-body">
					 Data pra rencana kerja telah berhasil ditransfer ke rencana kerja!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#warningTransfer" data-toggle="modal"></a>
	<div id="warningTransfer" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Warning!</strong> Transfer Hasil Musrenbang</h4>
				</div>
				<div class="modal-body">
					Data Pokok-Pokok Pikiran DPRD sudah ditransfer ke rencana kerja!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn yellow" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#warningAPBD" data-toggle="modal"></a>
	<div id="warningAPBD" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Warning!</strong> APBD Kabupaten</h4>
				</div>
				<div class="modal-body">
					APBD Kabupaten tidak mencukupi! Silahkan hubungi administrator untuk informasi anggarannya.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn yellow" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#warningEntri" data-toggle="modal"></a>
	<div id="warningEntri" class="modal fade" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title"><strong>Warning!</strong> Waktu Entri Sudah Habis</h4>
				</div>
				<div class="modal-body">
					Proses entri data di tutup. Untuk informasi lebih lanjut hubungi administrator!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn yellow" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	function show_form_deskel_by_kecamatan(){
		var kecamatan_kode = $('select[name=kecamatan_kode]').val();
		load('usulan/dprd/tampil_combobox_deskel_by_kecamatan/'+kecamatan_kode, '#tampil_combobox_deskel_by_kecamatan');
	}
	</script>