<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Control Panel <small>pengaturan &amp; keamanan</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('dashboard');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Control Panel</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
            
          <div class="alert alert-warning fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <i class="fa-lg fa fa-warning"></i> Diharapkan untuk berhati-hati dalam merubah data yang ada dipengaturan ini, karna akan berdampak pada sistem secara keseluruhan.</div>
			
			<!-- BEGIN FORM -->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gears"></i>Pengaturan Sistem Informasi Musrenbang &amp; RKPD Online
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title=""></a>
								<a href="javascript:;" class="remove" data-original-title="" title=""></a>
							</div>
						</div>
						<div class="portlet-body" style="display: block;">
                        	<h4>Pengaturan SKPD &amp; Kecamatan</h4>
                            
                            <a href="<?php echo site_url('pengaturan/skpd');?>" class="icon-btn">
                                <i class="fa fa-institution"></i>
                                <div>SKPD</div>
							</a>
                            
							<a href="<?php echo site_url('pengaturan/kecamatan');?>" class="icon-btn">
								<i class="fa fa-building"></i>
								<div>Kecamatan</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/deskel');?>" class="icon-btn">
								<i class="fa fa-building-o"></i>
								<div>Deskel</div>
							</a>
                            
                            <h4>Pengaturan Pengguna &amp; Hak Akses</h4>
                            
                            <a href="<?php echo site_url('pengaturan/tahun-anggaran');?>" class="icon-btn">
                                <i class="fa fa-th-list"></i>
                                <div>Tahun Anggaran</div>
							</a>
							
							<a href="<?php echo site_url('pengaturan/waktu-entri');?>" class="icon-btn">
                                <i class="fa fa-calendar"></i>
                                <div>Waktu Entri</div>
							</a>
                            
							<a href="<?php echo site_url('pengaturan/pengguna');?>" class="icon-btn">
								<i class="fa fa-user"></i>
								<div>Pengguna</div>
								<!-- <span class="badge badge-danger"> 2 </span> -->
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/kelompok-pengguna');?>" class="icon-btn">
								<i class="fa fa-group"></i>
								<div>Kelompok</div>
								<!-- <span class="badge badge-danger"> 2 </span> -->
							</a>
							
                        	<a href="<?php echo site_url('pengaturan/hak-akses');?>" class="icon-btn">
                                <i class="fa fa-eye"></i>
                                <div>Hak Akses</div>
                                <!-- <span class="badge badge-success"> 4</span> -->
							</a>
								
                            <a href="<?php echo site_url('pengaturan/akses-bidang');?>" class="icon-btn">
                                <i class="fa fa-sitemap"></i>
                                <div>Akses Bidang</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/menu');?>" class="icon-btn">
                                <i class="fa fa-navicon"></i>
                                <div>Menu</div>
							</a>
                            
                            <h4>Pengaturan Khusus</h4>
                            
                            <a href="<?php echo site_url('pengaturan/visi');?>" class="icon-btn">
                                <i class="fa fa-bullhorn"></i>
                                <div>Visi</div>
							</a>
                            
							<a href="<?php echo site_url('pengaturan/misi');?>" class="icon-btn">
								<i class="fa fa-bullseye"></i>
								<div>Misi</div>
								<!-- <span class="badge badge-danger"> 2 </span> -->
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/prioritas');?>" class="icon-btn">
								<i class="fa fa-check-square"></i>
								<div>Prioritas</div>
								<!-- <span class="badge badge-danger"> 2 </span> -->
							</a>
							
                        	<a href="<?php echo site_url('pengaturan/tujuan');?>" class="icon-btn">
                                <i class="fa fa-paper-plane"></i>
                                <div>Tujuan</div>
                                <!-- <span class="badge badge-success"> 4</span> -->
							</a>
								
                            <a href="<?php echo site_url('pengaturan/sasaran');?>" class="icon-btn">
                                <i class="fa fa-search"></i>
                                <div>Sasaran</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/indikator');?>" class="icon-btn">
                                <i class="fa fa-puzzle-piece"></i>
                                <div>Indikator</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/urusan');?>" class="icon-btn">
                                <i class="fa fa-life-ring"></i>
                                <div>Urusan</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/program');?>" class="icon-btn">
                                <i class="fa fa-joomla"></i>
                                <div>Program</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/program-kegiatan');?>" class="icon-btn">
                                <i class="fa fa-certificate"></i>
                                <div>Kegitan</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/program-rutin');?>" class="icon-btn">
                                <i class="fa fa-barcode"></i>
                                <div>Anggaran Rutin</div>
							</a>
                            
                            <a href="<?php echo site_url('pengaturan/indikator-skpd');?>" class="icon-btn">
                                <i class="fa fa-tags"></i>
                                <div>Indikator SKPD</div>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->