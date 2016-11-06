<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Laporan <small>rekap kegiatan & data statistik</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('dashboard');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Laporan</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			
			<!-- BEGIN FORM -->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gears"></i>Laporan Sistem Informasi Musrenbang &amp; RKPD Online
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title=""></a>
								<a href="javascript:;" class="remove" data-original-title="" title=""></a>
							</div>
						</div>
						<div class="portlet-body" style="display: block;">
							<?php 
							if ($admin_log['level_kode'] == 4) { 
							?>
							<h4>Hasil Musrenbang Tingkat Desa dan Kelurahan</h4>
							<a href="<?php echo site_url('laporan/musrenbang-desa');?>" class="icon-btn">
                                <i class="fa fa-thumb-tack"></i>
                                <div>MUSRENBANG DESA</div>
							</a>
							<a href="<?php echo site_url('laporan/musrenbang-kelurahan');?>" class="icon-btn">
                                <i class="fa fa-tag"></i>
                                <div>MUSRENBANG KELURAHAN</div>
							</a>
							<h4>Hasil Musrenbang Kecamatan dan Pra Rencana Kerja</h4>
							<a href="<?php echo site_url('laporan/musrenbang-kecamatan');?>" class="icon-btn">
                                <i class="fa fa-envelope"></i>
                                <div>MUSRENBANG KECAMATAN</div>
							</a>
							<a href="<?php echo site_url('laporan/pra-rencana-kerja');?>" class="icon-btn">
                                <i class="fa fa-pencil-square"></i>
                                <div>PRA RENCANA KERJA</div>
							</a>
							
							<h4>Rencana Kerja, Hasil Musrenbang Kabupaten, RKPD dan KUA &amp; PPAS</h4>
							<a href="<?php echo site_url('laporan/rencana-kerja');?>" class="icon-btn">
                                <i class="fa fa-book"></i>
                                <div>RENCANA KERJA</div>
							</a>
							<a href="<?php echo site_url('laporan/musrenbang-kabupaten');?>" class="icon-btn">
                                <i class="fa fa-shopping-cart"></i>
                                <div>MUSRENBANG KABUPATEN</div>
							</a>
							<a href="<?php echo site_url('laporan/rkpd');?>" class="icon-btn">
                                <i class="fa fa-dropbox"></i>
                                <div>RKPD</div>
							</a>
							<a href="<?php echo site_url('laporan/kua-ppas');?>" class="icon-btn">
                                <i class="fa fa-gift"></i>
                                <div>KUA & PPAS</div>
							</a>
							<a href="<?php echo site_url('laporan/pra-apbd');?>" class="icon-btn">
                                <i class="fa fa-suitcase"></i>
                                <div>PRA APBD KABUPATEN</div>
							</a>
							<?php
							} else if ($admin_log['level_kode'] == 14) { 
							?>
							<h4>Hasil Musrenbang Tingkat Desa</h4>
							<a href="<?php echo site_url('laporan/musrenbang-desa');?>" class="icon-btn">
                                <i class="fa fa-thumb-tack"></i>
                                <div>MUSRENBANG DESA</div>
							</a>
							<?php
							} else if ($admin_log['level_kode'] == 15) { 
							?>
							<h4>Hasil Musrenbang Tingkat Kelurahan</h4>
							<a href="<?php echo site_url('laporan/musrenbang-kelurahan');?>" class="icon-btn">
                                <i class="fa fa-tag"></i>
                                <div>MUSRENBANG KELURAHAN</div>
							</a>
							<?php
							} else {
							?>
							<h4>Hasil Musrenbang Tingkat Desa dan Kelurahan</h4>
							<a href="<?php echo site_url('laporan/musrenbang-desa');?>" class="icon-btn">
                                <i class="fa fa-thumb-tack"></i>
                                <div>MUSRENBANG DESA</div>
							</a>
							<a href="<?php echo site_url('laporan/musrenbang-kelurahan');?>" class="icon-btn">
                                <i class="fa fa-tag"></i>
                                <div>MUSRENBANG KELURAHAN</div>
							</a>
							<h4>Hasil Usulan Masyarakat, Pokok-Pokok Pikiran DPRD, Musrenbang Kecamatan dan Pra Rencana Kerja</h4>
							<a href="<?php echo site_url('laporan/usulan-masyarakat');?>" class="icon-btn">
                                <i class="fa fa-comments"></i>
                                <div>USULAN MASYARAKAT</div>
							</a>
							<a href="<?php echo site_url('laporan/pokpir-dprd');?>" class="icon-btn">
                                <i class="fa fa-comment"></i>
                                <div>POKOK PIKIRAN DPRD</div>
							</a>
							<a href="<?php echo site_url('laporan/musrenbang-kecamatan');?>" class="icon-btn">
                                <i class="fa fa-envelope"></i>
                                <div>MUSRENBANG KECAMATAN</div>
							</a>
							<a href="<?php echo site_url('laporan/pra-rencana-kerja');?>" class="icon-btn">
                                <i class="fa fa-pencil-square"></i>
                                <div>PRA RENCANA KERJA</div>
							</a>
							
							<h4>Rencana Kerja, Hasil Musrenbang Kabupaten, RKPD dan KUA &amp; PPAS</h4>
							<a href="<?php echo site_url('laporan/rencana-kerja');?>" class="icon-btn">
                                <i class="fa fa-book"></i>
                                <div>RENCANA KERJA</div>
							</a>
							<a href="<?php echo site_url('laporan/musrenbang-kabupaten');?>" class="icon-btn">
                                <i class="fa fa-shopping-cart"></i>
                                <div>MUSRENBANG KABUPATEN</div>
							</a>
							<a href="<?php echo site_url('laporan/rkpd');?>" class="icon-btn">
                                <i class="fa fa-dropbox"></i>
                                <div>RKPD</div>
							</a>
							<a href="<?php echo site_url('laporan/kua-ppas');?>" class="icon-btn">
                                <i class="fa fa-gift"></i>
                                <div>KUA & PPAS</div>
							</a>
							<a href="<?php echo site_url('laporan/pra-apbd');?>" class="icon-btn">
                                <i class="fa fa-suitcase"></i>
                                <div>PRA APBD KABUPATEN</div>
							</a>
							<?php
							}
							?>
							<?php if ($admin_log['level_kode'] == 1) { ?>
							<h4>Rekap Laporan Berdasarkan Kategori </h4>
							<a href="<?php echo site_url('laporan/skpd');?>" class="icon-btn">
                                <i class="fa fa-institution"></i>
                                <div>SKPD PELAKSANA</div>
							</a>
							<a href="<?php echo site_url('laporan/urusan');?>" class="icon-btn">
                                <i class="fa fa-life-ring"></i>
                                <div>URUSAN</div>
							</a>
							<a href="<?php echo site_url('laporan/program');?>" class="icon-btn">
                                <i class="fa fa-joomla"></i>
                                <div>PROGRAM</div>
							</a>
							<a href="<?php echo site_url('laporan/indikator');?>" class="icon-btn">
                                <i class="fa fa-tags"></i>
                                <div>INDIKATOR SASARAN</div>
							</a>
							<a href="<?php echo site_url('laporan/indikator-belum-terpakai');?>" class="icon-btn">
                                <i class="fa fa-tags"></i>
                                <div>INDIKATOR BELUM TERPAKAI</div>
							</a>
							<?php } ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->