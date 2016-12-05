<!-- Main Content -->
   <section class="content">
		<h2>Parameter<small> <?=$title?></small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/mapping_rek_sap');?>"> <?=$title?></a></li>
					<li class="active"> Urusan</li>
				</ol>
			</div>
            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	
                    <div class="card">
	                    <div class="header bg-light-green">
						    <h2>Unit <?=$title?><small>Data Urusan</small></h2>
	                        <ul class="header-dropdown m-r--5">
	                            <li class="dropdown">
	                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                                    <i class="material-icons">more_vert</i>
	                                </a>
	                                <ul class="dropdown-menu pull-right">                                        
	                                    <li><a title="Kembali" href="<?php echo base_url('parameter'); ?>"><i class="material-icons">reply</i> Kembali</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                	<form id="form-mapping-rek-akrual" name="form-korolari" method="">
	                                	<div class="row">
		                                    <div id="mapping-rek-akrual">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_13_akun')!=''?$this->session->userdata('mra_rek_permendagri_13_akun'):''?>" min="2" name="mra_rek_permendagri_13_akun">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_13_kelompok')!=''?$this->session->userdata('mra_rek_permendagri_13_kelompok'):''?>" min="2" name="mra_rek_permendagri_13_kelompok">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_13_jenis')!=''?$this->session->userdata('mra_rek_permendagri_13_jenis'):''?>" min="2" name="mra_rek_permendagri_13_jenis">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_13_obyek')!=''?$this->session->userdata('mra_rek_permendagri_13_obyek'):''?>" min="2" name="mra_rek_permendagri_13_obyek">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_13_rincian')!=''?$this->session->userdata('mra_rek_permendagri_13_rincian'):''?>" min="2" name="mra_rek_permendagri_13_rincian">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/mra-rek-permendagri-13/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['permendagri_13'])) {?>
						                  		<div class="row">
							                    	<div class="col-md-12">
							                    		<?php 
							                    			$data = $content['dataset']['permendagri_13'];
							                    			echo $data->rincian_nama;
							                    		?>
							                    	</div>
							                    </div>
						                <?php }?>
					                    <div class="row">
						                    <div id="rekening-debit">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_64_akun')!=''?$this->session->userdata('mra_rek_permendagri_64_akun'):''?>" name="mra_rek_permendagri_64_akun">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_64_kelompok')!=''?$this->session->userdata('mra_rek_permendagri_64_kelompok'):''?>" name="mra_rek_permendagri_64_kelompok">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_64_jenis')!=''?$this->session->userdata('mra_rek_permendagri_64_jenis'):''?>" name="mra_rek_permendagri_64_jenis">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_64_obyek')!=''?$this->session->userdata('mra_rek_permendagri_64_obyek'):''?>" name="mra_rek_permendagri_64_obyek">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('mra_rek_permendagri_64_rincian')!=''?$this->session->userdata('mra_rek_permendagri_64_rincian'):''?>" name="mra_rek_permendagri_64_rincian">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/mra-rek-permendagri-64/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['permendagri_64'])) {?>
						                  		<div class="row">
							                    	<div class="col-md-12">
							                    		<?php 
							                    			$data = $content['dataset']['permendagri_64'];
							                    			echo $data->rincian_nama;
							                    		?>
							                    	</div>
							                    </div>
						                <?php }?>
					                    <div class="row">
						                    <div id="rekening-kredit">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="kredit_kd_rek_1" value="<?=$this->session->userdata('kd_rek_1_kredit')!=''?$this->session->userdata('kd_rek_1_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="kredit_kd_rek_2" value="<?=$this->session->userdata('kd_rek_2_kredit')!=''?$this->session->userdata('kd_rek_2_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="kredit_kd_rek_3" value="<?=$this->session->userdata('kd_rek_3_kredit')!=''?$this->session->userdata('kd_rek_3_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="kredit_kd_rek_4" value="<?=$this->session->userdata('kd_rek_4_kredit')!=''?$this->session->userdata('kd_rek_4_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="kredit_kd_rek_5" value="<?=$this->session->userdata('kd_rek_5_kredit')!=''?$this->session->userdata('kd_rek_5_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-rekening-kredit/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['kredit'])) {?>
					                  		<div class="row">
						                    	<div class="col-md-12">
						                    		<?php 
						                    			$data = $content['dataset']['kredit'];
						                    			echo $data->Nm_Rek_5;
						                    		?>
						                    	</div>
						                    </div>
					                    <?php }?>
					                    <div class="row">
					                    	<div class="col-md-12">
												<button type="button" class="btn btn-primary">Tambah</button>
												<button type="button" class="btn btn-success" onclick="openReadOnly()">Ubah</button>
												<button type="button" class="btn btn-info">Hapus</button>
												<button type="button" class="btn btn-warning">Cetak</button>
												<button type="button" class="btn btn-danger">Browse</button>
					                    	</div>
							        	</div>
							        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>
    <?php if ($enable_readonly == true) {?>
    <script type="text/javascript">
   		var f = document.forms['form-korolari'];
		for(var i=0,fLen=f.length;i<fLen;i++){
		  	f.elements[i].readOnly = true;
		}
		function openReadOnly(){
			for(var i=0,fLen=f.length;i<fLen;i++){
			  f.elements[i].readOnly = false;
			}	
			link = document.getElementsByClassName('link-search');
			for(var i=0,fLen=link.length;i<fLen;i++){
				link[i].removeEventListener('click',disableLink);
			}
		}
		link = document.getElementsByClassName('link-search');
		for(var i=0,fLen=link.length;i<fLen;i++){
			link[i].addEventListener('click',disableLink);
		}
		function disableLink(e)
		{	
			e.preventDefault();
		}
   </script> 	
    <?php }?>
   