<!-- Main Content -->
	<?php
	// echo "nilai ".$this->session->userdata('KAR_Kd_Rek_1');
	// print_r($data);
	// echo $data->Kd_Rek_1;
	// echo $data->Kd_Rek_1;die();
	?>
	
   <section class="content">
		<h2>Parameter<small> rekening korolari</small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/korolari');?>"> Korolari</a></li>
					<li class="active"> Urusan</li>
				</ol>
			</div>
			<?php if($this->session->flashdata('errors')) : ?>
			    <div class="alert alert-danger">
			        <button type="button" class="close" data-dismiss="alert">&times;</button>
			        <?php echo $this->session->flashdata('errors'); ?>
			    </div>
			<?php endif; ?>
			<?php if($this->session->flashdata('success')) : ?>
			    <div class="alert alert-success">
			        <button type="button" class="close" data-dismiss="alert">&times;</button>
			        <?php echo $this->session->flashdata('success'); ?>
			    </div>
			<?php endif; ?>
            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	
                    <div class="card">
	                    <div class="header bg-light-green">
						    <h2>Unit Korolari<small>Data Urusan</small></h2>
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
                                	<form id="form-korolari-atas-rekening" name="form-korolari" method="POST" action="<?=site_url("parameter/korolari/save")?>">
	                                	<div class="row">
	                                		<div class="col-md-12">Korolari Atas Rekening</div>
	                                	</div>
	                                	<div class="row">
		                                    <div id="korolari-atas-rekening">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_1')!=''?$this->session->userdata('KAR_Kd_Rek_1'):''?>" min="1" name="Kd_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_2')!=''?$this->session->userdata('KAR_Kd_Rek_2'):''?>" min="1" name="Kd_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_3')!=''?$this->session->userdata('KAR_Kd_Rek_3'):''?>" min="1" name="Kd_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_4')!=''?$this->session->userdata('KAR_Kd_Rek_4'):''?>" min="1" name="Kd_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_5')!=''?$this->session->userdata('KAR_Kd_Rek_5'):''?>" min="1" name="Kd_Rek_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-atas-rekening/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['rekening'])) {?>
						                  		<div class="row">
							                    	<div class="col-md-12">
							                    		<?php 
							                    			$data = $content['dataset']['rekening'];
							                    			echo $data->Nm_Rek_5;
							                    		?>
							                    	</div>
							                    </div>
						                <?php }?>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Debit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-debit">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_1_debit')!=''?$this->session->userdata('KRD_Kd_Rek_1_debit'):''?>" name="D_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_2_debit')!=''?$this->session->userdata('KRD_Kd_Rek_2_debit'):''?>" name="D_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_3_debit')!=''?$this->session->userdata('KRD_Kd_Rek_3_debit'):''?>" name="D_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_4_debit')!=''?$this->session->userdata('KRD_Kd_Rek_4_debit'):''?>" name="D_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_5_debit')!=''?$this->session->userdata('KRD_Kd_Rek_5_debit'):''?>" name="D_Rek_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-rekening-debit/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['debit'])) {?>
						                  		<div class="row">
							                    	<div class="col-md-12">
							                    		<?php 
							                    			$data = $content['dataset']['debit'];
							                    			echo $data->Nm_Rek_5;
							                    		?>
							                    	</div>
							                    </div>
						                <?php }?>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Kredit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-kredit">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="K_Rek_1" value="<?=$this->session->userdata('KRK_Kd_Rek_1_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_1_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="K_Rek_2" value="<?=$this->session->userdata('KRK_Kd_Rek_2_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_2_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="K_Rek_3" value="<?=$this->session->userdata('KRK_Kd_Rek_3_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_3_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="K_Rek_4" value="<?=$this->session->userdata('KRK_Kd_Rek_4_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_4_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="K_Rek_5" value="<?=$this->session->userdata('KRK_Kd_Rek_5_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_5_kredit'):''?>">
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
												
												<?= ($enable_readonly == true)?'<button type="button" class="btn btn-primary" id="Korolari_tambah">Tambah</button>':'<button type="submit" class="btn btn-primary" id="Korolari_simpan">Simpan</button>'?>
												<!-- <button type="submit" class="btn btn-primary" id="Korolari_simpan">Simpan</button> -->
												<button type="button" class="btn btn-danger" id="cancel">Cancel</button>
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
    <?php
    	echo '<script type="text/javascript">';
    	echo 'var cancel = document.getElementById("cancel");cancel.addEventListener("click",function(){window.location.href=\''.base_url('parameter/korolari/destroy').'\'});';
    	echo '</script>';
    ?>
   
    