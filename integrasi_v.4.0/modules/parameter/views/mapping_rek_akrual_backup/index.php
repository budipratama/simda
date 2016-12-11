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
                                	 <button type="button" class="close" id="tutup-browse" style="display: none;z-index: 9999;position: relative;">&times;</button>

							        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table-browse">
                                        <thead>
                                        <tr>
                                            <th style="text-align:center; width:100px;display: none">id</th>
                                            <th style="text-align:center; width:100px">Kd Rek 1</th>
                                            <th style="text-align:center; width:100px">Kd Rek 2</th>
                                            <th style="text-align:center; width:100px">Kd Rek 3</th>
                                            <th style="text-align:center; width:100px">Kd Rek 4</th>
                                            <th style="text-align:center; width:100px">Kd Rek 5</th>
                                            <th style="text-align:center; width:100px">D Rek 1</th>
                                            <th style="text-align:center; width:100px">D Rek 2</th>
                                            <th style="text-align:center; width:100px">D Rek 3</th>
                                            <th style="text-align:center; width:100px">D Rek 4</th>
                                            <th style="text-align:center; width:100px">D Rek 5</th>
                                            <th style="text-align:center; width:100px">K Rek 1</th>
                                            <th style="text-align:center; width:100px">K Rek 2</th>
                                            <th style="text-align:center; width:100px">K Rek 3</th>
                                            <th style="text-align:center; width:100px">K Rek 4</th>
                                            <th style="text-align:center; width:100px">K Rek 5</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($browse as $row):?>
                                                <tr <?= "onclick='pilih({$row->id})'"?>>
                                                    <td style="text-align:center;display: none"><?= $row->id;?></td>
                                                    <td style="text-align:center;"><?= $row->Kd_Rek_1;?></td>
                                                    <td style="text-align:center;"><?= $row->Kd_Rek_2;?></td>
                                                    <td style="text-align:center;"><?= $row->Kd_Rek_3;?></td>
                                                    <td style="text-align:center;"><?= $row->Kd_Rek_4;?></td>
                                                    <td style="text-align:center;"><?= $row->Kd_Rek_5;?></td>
                                                    <td style="text-align:center;"><?= $row->D_Rek_1;?></td>
                                                    <td style="text-align:center;"><?= $row->D_Rek_2;?></td>
                                                    <td style="text-align:center;"><?= $row->D_Rek_3;?></td>
                                                    <td style="text-align:center;"><?= $row->D_Rek_4;?></td>
                                                    <td style="text-align:center;"><?= $row->D_Rek_5;?></td>
                                                    <td style="text-align:center;"><?= $row->K_Rek_1;?></td>
                                                    <td style="text-align:center;"><?= $row->K_Rek_2;?></td>
                                                    <td style="text-align:center;"><?= $row->K_Rek_3;?></td>
                                                    <td style="text-align:center;"><?= $row->K_Rek_4;?></td>
                                                    <td style="text-align:center;"><?= $row->K_Rek_5;?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                	<form id="form-mapping-rek-akrual" name="mapping-rek-akrual" method="">
	                                	<div class="row">
		                                    <div id="rekening-permendagri-13">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Rek_1?>" min="2" name="mra_rek_permendagri_13_akun">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Rek_2?>" min="2" name="mra_rek_permendagri_13_kelompok">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Rek_3?>" min="2" name="mra_rek_permendagri_13_jenis">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Rek_4?>" min="2" name="mra_rek_permendagri_13_obyek">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Rek_5?>" min="2" name="mra_rek_permendagri_13_rincian">
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
						                    <div id="rekening-permendagri-64">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Akrual_1?>" name="Kd_Akrual_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Akrual_2?>" name="Kd_Akrual_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Akrual_3?>" name="Kd_Akrual_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Akrual_4?>" name="Kd_Akrual_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$data->Kd_Akrual_5?>" name="Kd_Akrual_5">
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
						                    <div id="mapping-1">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_1" value="<?=$data->Kd_AkrualD_1?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_2" value="<?=$data->Kd_AkrualD_2?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_3" value="<?=$data->Kd_AkrualD_3?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_4" value="<?=$data->Kd_AkrualD_4?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_5" value="<?=$data->Kd_AkrualD_5?>">
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
						                    <div id="mapping-2">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualK_1" value="<?=$data->Kd_AkrualK_1?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualK_2" value="<?=$data->Kd_AkrualK_2?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualK_3" value="<?=$data->Kd_AkrualK_3?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualK_4" value="<?=$data->Kd_AkrualK_4?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualK_5" value="<?=$data->Kd_AkrualK_5?>">
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
						                    <div id="rekening-kredit">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_1" value="<?=$data->Kd_AkrualD_1?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_2" value="<?=$data->Kd_AkrualD_2?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_3" value="<?=$data->Kd_AkrualD_3?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_4" value="<?=$data->Kd_AkrualD_4?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" name="Kd_AkrualD_5" value="<?=$data->Kd_Akrual_5?>">
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
   