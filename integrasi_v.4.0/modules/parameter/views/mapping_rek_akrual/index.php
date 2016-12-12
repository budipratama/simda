<!-- Main Content -->
<?php
	
    $this->load->model('parameter/Mapping_rek_akrual_model');
?>
   <section class="content">
		<h2>Parameter<small> rekening korolari</small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/mapping-rek-akrual');?>"> Mapping Rekening Akrual</a></li>
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
						    <h2>Unit Mapping Rekening Akrual<small>Data Urusan</small></h2>
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
	                    <?php
	                    	// print_r($browse);
	                    	// die();
	                    ?>
	                    <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                                <!-- <div class="alert"> -->
								        <!-- <button type="button" id="tutup-browse" style="display: none;float: right;">&times;</button> -->
								        <button type="button" class="close" id="tutup-browse" style="display: none;z-index: 9999;position: relative;">&times;</button>

								        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table-browse">
	                                        <thead>
	                                        <tr>
	                                            <th style="text-align:center; width:100px;display: none">id</th>
	                                            <th style="text-align:center; width:100px">Kd Rek</th>
	                                            <th style="text-align:center; width:100px">Uraian Rekening</th>
	                                            <th style="text-align:center; width:100px">Kd Rek</th>
	                                            <th style="text-align:center; width:100px">Uraian Rekening</th>
	                                            <th style="text-align:center; width:100px">Kd Rek</th>
	                                            <th style="text-align:center; width:100px">Nama AkrualD_5 </th>
	                                            <th style="text-align:center; width:100px">Kd Rek</th>
	                                            <th style="text-align:center; width:100px">Nama AkrualK_5 </th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php foreach($browse as $row):?>
	                                            	<?php
														$kdRek4Permendagri13 = strlen((string)$row->Kd_Rek_4)==1?"0".$row->Kd_Rek_4:$row->Kd_Rek_4;
	                                            		$kdRek5Permendagri13 = strlen((string)$row->Kd_Rek_5)==1?"0".$row->Kd_Rek_5:$row->Kd_Rek_5;
	                                            		
	                                            		$kdRek4Permendagri64 = strlen((string)$row->Kd_Akrual_4)==1?"0".$row->Kd_Akrual_4:$row->Kd_Akrual_4;
	                                            		$kdRek5Permendagri64 = strlen((string)$row->Kd_Akrual_5)==1?"0".$row->Kd_Akrual_5:$row->Kd_Akrual_5;
	                                            		
	                                            		$kdRek4Mapping1 = strlen((string)$row->Kd_AkrualD_4)==1?"0".$row->Kd_AkrualD_4:$row->Kd_AkrualD_4;
	                                            		$kdRek5Mapping1 = strlen((string)$row->Kd_AkrualD_5)==1?"0".$row->Kd_AkrualD_5:$row->Kd_AkrualD_5;

	                                            		$kdRek4Mapping2 = strlen((string)$row->Kd_AkrualK_4)==1?"0".$row->Kd_AkrualK_4:$row->Kd_AkrualK_4;
	                                            		$kdRek5Mapping2 = strlen((string)$row->Kd_AkrualK_5)==1?"0".$row->Kd_AkrualK_5:$row->Kd_AkrualK_5;
	                                            	?>
	                                                <tr <?= "onclick='pilih({$row->id})'"?>>
	                                                    <td style="text-align:center;display: none"><?= $row->id;?></td>
	                                                    <td style="text-align:center;"><?= $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3.".".$kdRek4Permendagri13.".".$kdRek5Permendagri13?></td>
	                                                    <td style="text-align:center;"><?= $this->Mapping_rek_akrual_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5)->Nm_Rek_5;?></td>

	                                                    <td style="text-align:center;"><?= $row->Kd_Akrual_1.".".$row->Kd_Akrual_2.".".$row->Kd_Akrual_3.".".$kdRek4Permendagri64.".".$kdRek5Permendagri64?></td>
	                                                    <td style="text-align:center;"><?= $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_Akrual_1,$row->Kd_Akrual_2,$row->Kd_Akrual_3,$row->Kd_Akrual_4,$row->Kd_Akrual_5)->Nm_Akrual_5;?></td>
	                                                    
	                                                    <td style="text-align:center;"><?= $row->Kd_AkrualD_1.".".$row->Kd_AkrualD_2.".".$row->Kd_AkrualD_3.".".$kdRek4Mapping1.".".$kdRek5Mapping1?></td>
	                                                    <td style="text-align:center;"><?= $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_AkrualD_1,$row->Kd_AkrualD_2,$row->Kd_AkrualD_3,$row->Kd_AkrualD_4,$row->Kd_AkrualD_5)->Nm_Akrual_5;?></td>
	                                                    
	                                                    <td style="text-align:center;"><?= $row->Kd_AkrualK_1.".".$row->Kd_AkrualK_2.".".$row->Kd_AkrualK_3.".".$kdRek4Mapping2.".".$kdRek5Mapping2?></td>
	                                                    <td style="text-align:center;"><?= $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_AkrualK_1,$row->Kd_AkrualK_2,$row->Kd_AkrualK_3,$row->Kd_AkrualK_4,$row->Kd_AkrualK_5)->Nm_Akrual_5?></td>
	                                                    

	                                                </tr>
	                                            <?php endforeach;?>
	                                        </tbody>
	                                    </table>
							    	<!-- </div> -->

                                	<form id="form-mapping-rek-akrual" name="form-korolari" method="POST" action="<?=site_url("parameter/mapping_rek_akrual/save")?>">
	                                	<div class="alert alert-danger" style="display: none" id="error_pesan">
									        <button type="button" class="close" data-dismiss="alert">&times;</button>
									        <div><?= PESAN_FIELD_KOSONG?></div>
									    </div>
	                                	<div class="row">
	                                		<div class="col-md-12">Rekening Permendagri 13</div>
	                                	</div>
	                                	<div class="row">
		                                    <div id="rekening-permendagri-13">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Rek_1?>" min="1" id="Kd_Rek_1" name="Kd_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Rek_2?>" min="1" id="Kd_Rek_2" name="Kd_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Rek_3?>" min="1" id="Kd_Rek_3" name="Kd_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Rek_4?>" min="1" id="Kd_Rek_4" name="Kd_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Rek_5?>" min="1" id="Kd_Rek_5" name="Kd_Rek_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/Mra-rekening-permendagri-13/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                  		<div class="row">
						                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_atas_rekening_Nm_Rek_5">
						                    		<?= $RP13->Nm_Rek_5;?>
						                    	</div>
						                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Permendagri 64</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-permendagri-64">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Akrual_1?>" id="Kd_Akrual_1" name="Kd_Akrual_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Akrual_2?>" id="Kd_Akrual_2" name="Kd_Akrual_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Akrual_3?>" id="Kd_Akrual_3" name="Kd_Akrual_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Akrual_4?>" id="Kd_Akrual_4" name="Kd_Akrual_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$data->Kd_Akrual_5?>" id="Kd_Akrual_5" name="Kd_Akrual_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/Mra-rekening-permendagri-64/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                  		<div class="row">
						                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_rekening_debit_Nm_Rek_5">
						                    		<?= $RP64->Nm_Akrual_5;?>
						                    	</div>
						                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Mapping 1 (OPTIONAL)</div>
	                                	</div>
					                    <div class="row">
						                    <div id="mapping-1">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualD_1" name="Kd_AkrualD_1" value="<?= $data->Kd_AkrualD_1 != '0'?$data->Kd_AkrualD_1:''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualD_2" name="Kd_AkrualD_2" value="<?= $data->Kd_AkrualD_2 != '0'?$data->Kd_AkrualD_2:''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualD_3" name="Kd_AkrualD_3" value="<?= $data->Kd_AkrualD_3 != '0'?$data->Kd_AkrualD_3:''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualD_4" name="Kd_AkrualD_4" value="<?= $data->Kd_AkrualD_4 != '0'?$data->Kd_AkrualD_4:''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualD_5" name="Kd_AkrualD_5" value="<?= $data->Kd_AkrualD_5 != '0'?$data->Kd_AkrualD_5:''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/Mra-mapping-1/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
				                  		<div class="row">
					                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_rekening_kredit_Nm_Rek_5">
					                    		<?= $detailMapping1->Nm_Akrual_5;?>
					                    	</div>
					                    </div>
					                    <div class="row">
	                                		<div class="col-md-12">Mapping 2 (OPTIONAL)</div>
	                                	</div>
					                    <div class="row">
						                    <div id="mapping-2">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualK_1" name="Kd_AkrualK_1" value="<?= $data->Kd_AkrualK_1=='0'?'':$data->Kd_AkrualK_1?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualK_2" name="Kd_AkrualK_2" value="<?= $data->Kd_AkrualK_2=='0'?'':$data->Kd_AkrualK_2?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualK_3" name="Kd_AkrualK_3" value="<?= $data->Kd_AkrualK_3=='0'?'':$data->Kd_AkrualK_3?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualK_4" name="Kd_AkrualK_4" value="<?= $data->Kd_AkrualK_4=='0'?'':$data->Kd_AkrualK_4?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="Kd_AkrualK_5" name="Kd_AkrualK_5" value="<?= $data->Kd_AkrualK_5=='0'?'':$data->Kd_AkrualK_5?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/Mra-mapping-2/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
				                  		<div class="row">
					                    	<div class="col-md-12 Nm_Rek_5" id="Mra_mapping_2">
					                    		<?= $detailMapping2->Nm_Akrual_5;?>
					                    	</div>
					                    </div>
					                    <div class="row">
					                    	<div class="col-md-12" id="kumpulan_button">
												
												<?php //($enable_readonly == true)?'<button type="button" class="btn btn-primary" id="Korolari_tambah">Tambah</button>':'<button type="submit" class="btn btn-primary" id="Korolari_simpan">Simpan</button>'?>
												<button type="button" class="btn btn-primary" id="Korolari_simpan">Simpan</button>
												<button type="button" class="btn btn-primary" id="Korolari_tambah">Tambah</button>
												<button type="button" class="btn btn-success" id="ubah">Ubah</button>
												<button type="button" class="btn btn-info" id="hapus">Hapus</button>
												<button type="button" class="btn btn-warning" id="cetak">Cetak</button>
												<button type="button" class="btn btn-info" id="browse">Browse</button>
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
    	$testing = "test buat iyus";
    	$urlUpdate  	= base_url('parameter/mapping-rek-akrual/update');
    	$urlUpdateData  = base_url("parameter/mapping-rek-akrual/updateData/{$row->id}");
    	$urlHapus  		= base_url('parameter/mapping-rek-akrual/hapus');
    	$urlAjax  		= base_url('parameter/mapping-rek-akrual/ajax');
    	$urlAjaxAkrual  = base_url('parameter/mapping-rek-akrual/ajaxAkrual');
    	$urlKorolari	= base_url('parameter/mapping-rek-akrual');
    	$urlSave		= base_url('parameter/mapping-rek-akrual/save');
    	$urlFlagUpdate  = base_url("parameter/mapping-rek-akrual/updateData/{$row->id}");
    	$urlUpdateAjax  = base_url("parameter/mapping-rek-akrual/ajaxUpdate/{$row->id}");
    	$this->registerJS("
    		var tempData 	= {}, 
	    		d 			= document,
	    		cancel 		= d.getElementById('cancel'), 
	    		f 			= d.forms['form-korolari'], 
	    		tambah 		= d.getElementById('Korolari_tambah'), 
	    		simpan 		= d.getElementById('Korolari_simpan'), 
	    		link 		= d.getElementsByClassName('link-search'),
	    		detailrek5 	= d.getElementsByClassName('Nm_Rek_5'),
	    		hapus 		= d.getElementById('hapus'),
	    		ubah 		= d.getElementById('ubah'),
	    		browse 		= d.getElementById('browse'),
	    		input 		= f.getElementsByTagName('input'),
	    		form 		= d.getElementById('rekening-permendagri-13'),
	    		rDeb 		= d.getElementById('rekening-permendagri-64'),
	    		rKred 		= d.getElementById('mapping-1'),
	    		rKred2 		= d.getElementById('mapping-2'),
	    		formId 		= d.getElementById('form-mapping-rek-akrual'),
	    		tutupBrowse = d.getElementById('tutup-browse'),
	    		pesan_error = d.getElementById('error_pesan'),
	    		ajaxKAR 	= form.getElementsByTagName('input'),
	    		ajaxRD 		= rDeb.getElementsByTagName('input'),
	    		ajaxRK 		= rKred.getElementsByTagName('input'),
	    		ajaxRK2 	= rKred2.getElementsByTagName('input'),
	    		cetak 		= d.getElementById('cetak');
	    	find = setInterval(function(){
	    		if (d.getElementById('table-browse_wrapper') !=null) {
	    			d.getElementById('table-browse_wrapper').style.display = 'none';
	    			clearInterval(find);
	    		}
	    	},1);

	    	cancel.style.display = 'none';
    		simpan.style.display = 'none';

    		// event 5 inputan Permendagri 13
    		for(i=0;i<ajaxKAR.length;i++){
    			d.getElementById(ajaxKAR[i].getAttribute('id')).addEventListener('keyup',function(){
    				removeError();
    				params = '';
    				for (j=0; j < ajaxKAR.length; j++) { 
    					val = d.getElementById(ajaxKAR[j].getAttribute('id')).value;
    					params += ajaxKAR[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjax';
    				response = ajaxPost(url,params,function(err,balikan){
    					div = d.getElementById('Korolari_atas_rekening_Nm_Rek_5');
    					if (balikan.Nm_Rek_5 === undefined) {
    						div.style.visibility = '';
					        div.innerHTML = '<p style=\'color:#a94442\'>Data tidak ada pada sistem kami</p>';
					    } else {
					    	div.style.visibility = '';
					    	div.innerHTML = balikan.Nm_Rek_5;
					    } 
    				});
    			});
    		}

    		// event 5 inputan Permendagri 64
    		for(i=0;i<ajaxRD.length;i++){
    			d.getElementById(ajaxRD[i].getAttribute('id')).addEventListener('keyup',function(){
    				removeError();
    				params = '';
    				for (j=0; j < ajaxRD.length; j++) { 
    					val = d.getElementById(ajaxRD[j].getAttribute('id')).value;
    					params += ajaxRD[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjaxAkrual';
    				response = ajaxPost(url,params,function(err,balikan){
    					div = d.getElementById('Korolari_rekening_debit_Nm_Rek_5');

    					if (balikan.Nm_Akrual_5 === undefined) {
    						div.style.visibility = '';
					        div.innerHTML = '<p style=\'color:#a94442\'>Data tidak ada pada sistem kami</p>';
					    } else {
					    	div.style.visibility = '';
					    	div.innerHTML = balikan.Nm_Akrual_5;
					    } 
    				});
    			});
    		}

    		// event 5 inputan Mapping 1
    		for(i=0;i<ajaxRK.length;i++){
    			d.getElementById(ajaxRK[i].getAttribute('id')).addEventListener('keyup',function(){
    				removeError();
    				params = '';
    				for (j=0; j < ajaxRK.length; j++) { 
    					val = d.getElementById(ajaxRK[j].getAttribute('id')).value;
    					params += ajaxRK[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjaxAkrual';
    				response = ajaxPost(url,params,function(err,balikan){
    					console.log(balikan.Nm_Rek_5);
    					div = d.getElementById('Korolari_rekening_kredit_Nm_Rek_5');
    					if (balikan.Nm_Akrual_5 === undefined) {
    						div.style.visibility = '';
					        div.innerHTML = '<p style=\'color:#a94442\'>Data tidak ada pada sistem kami</p>';
					    } else {
					    	div.style.visibility = '';
					    	div.innerHTML = balikan.Nm_Akrual_5;
					    } 
    				});	
    				
    			});
    		}

    		// event 5 inputan Mapping 2
    		for(i=0;i<ajaxRK2.length;i++){
    			d.getElementById(ajaxRK2[i].getAttribute('id')).addEventListener('keyup',function(){
    				removeError();
    				params = '';
    				for (j=0; j < ajaxRK2.length; j++) { 
    					val = d.getElementById(ajaxRK2[j].getAttribute('id')).value;
    					params += ajaxRK2[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjaxAkrual';
    				response = ajaxPost(url,params,function(err,balikan){
    					div = d.getElementById('Mra_mapping_2');

    					if (balikan.Nm_Akrual_5 === undefined) {
    						div.style.visibility = '';
					        div.innerHTML = '<p style=\'color:#a94442\'>Data tidak ada pada sistem kami</p>';
					    } else {
					    	div.style.visibility = '';
					    	div.innerHTML = balikan.Nm_Akrual_5;
					    } 
    				});	
    				
    			});
    		}

    		function ajaxPost(url,params,callback){
    			var http = new XMLHttpRequest();
				var url = url;
				var params = params;
				http.open('POST', url, true);

				//Send the proper header information along with the request
				http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

				http.onreadystatechange = function() {//Call a function when the state changes.
				    if(http.readyState == 4 && http.status == 200) {
				        var obj = JSON.parse(http.responseText);
				        callback(null,obj);
				    }
				}
				http.send(params);
    		}

    		browse.addEventListener('click',function(){
    			tbl_browse  				= d.getElementById('table-browse_wrapper');
    			tbl_browse.style.display 	= '';
    			tutupBrowse.style.display   = '';
    			formId.style.display 		= 'none';
    		});

    		tutupBrowse.addEventListener('click',function(){
    			this.style.display = 'none';
    			formId.style.display = '';
    			d.getElementById('table-browse_wrapper').style.display = 'none';
    		});

    		// event only number inputan
	    	for(var i=0,fLen = input.length;i<fLen;i++){
				  c = input[i];
				  tempData[i] = input[i].value;
				  
				  d.getElementById(c.getAttribute('id')).addEventListener('keydown',function(e){
				  	if ((e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) || (e.keyCode == 8 )||(e.keyCode == 37 ) || (e.keyCode == 39 ) || (e.keyCode == 9 )) {
			                 return;
			        }
			        // Ensure that it is a number and stop the keypress
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			            e.preventDefault();
			        }
				  });
			}

			// fungsi untuk menampilkan data di browse
    		function pilih(id){
	    		window.location.href = '".$urlUpdate."/'+id;
	    	}

	    	//event hapus
	    	hapus.addEventListener('click',function(){
	    		var r = confirm('Hapus data tekan yes');
			    if (r == true) {
			    	var http = new XMLHttpRequest();
					var url = '$urlHapus';
					var params = serialize(f);

					http.open('POST', url, true);

					http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

					http.onreadystatechange = function() {
					    if(http.readyState == 4 && http.status == 200) {
					    	// alert(params);
					    	// alert(http.responseText);
					        if (http.responseText == 1) {
					        	// location.reload();
					        	window.location.href = '$urlKorolari';
					        }
					        else{
					        	// location.reload();
					        	window.location.href = '$urlKorolari';
					        }
					    }
					}
					http.send(params);
			    }
	    		
	    	});

			// event simpan data
			simpan.addEventListener('click',function(){
				removeError();
				submit = checkForm();
				if (submit) {
					d.getElementById('form-mapping-rek-akrual').submit();
				}
			});

			//event ubah
	    	ubah.addEventListener('click',function(){
	    		f.setAttribute('action','$urlUpdateData');
	    		hapus.style.display 	= 'none';
	    		cetak.style.display 	= 'none';
	    		ubah.style.display 		= 'none';
	    		cancel.style.display 	= '';
	    		browse.style.display 	= 'none';
	    		tambah.style.display 	= 'none';
	    		simpan.style.display    = '';
	    		for(var i=0,fLen=f.length;i<fLen;i++){
				  f.elements[i].readOnly = false;
				}
	    		for(var i=0,fLen=link.length;i<fLen;i++){
					link[i].removeEventListener('click',disableLink);
				}

	    		url    = '$urlUpdateAjax';
				ajaxGET(url,function(cb){
					// alert(cb);
				});
	    	});

	    	// ajax GET
	    	function ajaxGET(url,callback){
	    		var http = new XMLHttpRequest();
				var url = url;
				var params = params;
				http.open('GET', url, true);

				http.onreadystatechange = function() {//Call a function when the state changes.
				    if(http.readyState == 4 && http.status == 200) {
				        var obj = JSON.parse(http.responseText);
				        callback(obj);
				    }
				}
				http.send(params);
	    	}
	    	
	    	// fungsi nonaktikan logo search
	    	function disableSearch()
	    	{
	    		for(var i=0,fLen=link.length;i<fLen;i++){
					link[i].addEventListener('click',disableLink);
				}
	    	}
	    	// fungsi read only
	    	function readOnly(){
	    		for(var i=0,fLen=f.length;i<fLen;i++){
				  f.elements[i].readOnly = true;
				}
	    	}
	    	// fungsi buka read only inputan
		    function openReadOnly(){
				for(var i=0,fLen=f.length;i<fLen;i++){
				  f.elements[i].readOnly = false;
				  f.elements[i].value = '';
				}
				// console.log(tempData);
				for(var i=0,fLen=link.length;i<fLen;i++){
					link[i].removeEventListener('click',disableLink);
				}
			}
			// disable link
	    	function disableLink(e)
			{	
				e.preventDefault();
			}
			// disable all
			function disableAll()
			{
				f = d.forms['form-korolari'];
				for(var i=0,fLen=f.length;i<fLen;i++){
				  	f.elements[i].readOnly = true;
				}
				disableSearch();
			}
			// fungsi untuk cek form
	    	function checkForm()
	    	{
	    		send = 1;
	    		console.log('panjang length input '+input.length);
	    		for(i=0;i<input.length;i++)
	    		{
	    			console.log('jumlah '+i);
	    			if (i <= 9) {
	    				if (input[i].value == '') {
							send = 0;
							input[i].parentNode.setAttribute('class','has-error '+input[i].parentNode.getAttribute('class'));
							pesan_error.style.display = '';
						}
						
	    			}
	    			// OPTIONAL
    				if (i >= 10 && i<=14 ) {
    					console.log(i);
    					if (input[i].value != '') {
    						for(j=10;j<15;j++){
    							if (input[j].value == '') {

    								console.log('kosong'+input[i].value);
	    							send = 0;
									input[j].parentNode.setAttribute('class','has-error '+input[i].parentNode.getAttribute('class'));
									pesan_error.style.display = '';
    							}
    							
							}
						}
    				}
    				// OPTIONAL
    				if (i >= 15 && i<=19 ) {
    					console.log(i);
    					if (input[i].value != '') {
    						for(j=15;j<20;j++){
    							if (input[j].value == '') {
    								console.log('kosong'+input[i].value);
	    							send = 0;
									input[j].parentNode.setAttribute('class','has-error '+input[i].parentNode.getAttribute('class'));
									pesan_error.style.display = '';
    							}
							}
						}
    				}

    				for (c=0; c < detailrek5.length;c++) {
						// console.log(detailrek5[]);
		    			if (detailrek5[c].textContent == 'Data tidak ada pada sistem kami') {
		    				send = 0;
		    			}
		    		}
					
	    		}
	    		return send;
	    	}

	    	// fungsi untuk menghilakan error
	    	function removeError()
	    	{
	    		console.log('removeError')
	    		for(i=0;i<input.length;i++)
	    		{
					if (input[i].value != '') {
						input[i].parentNode.setAttribute('class',input[i].parentNode.getAttribute('class').replace('has-error',''));
					}
	    		}
				pesan_error.style.display = 'none';
	    	}

	    	function initializeValueInput()
			{
				for(var i=0,fLen = input.length;i<fLen;i++){
					tempData[i] = input[i].value;
				}
			}

			// event cancel
	    	cancel.addEventListener('click',function(){
	    		f.setAttribute('action','$urlSave');
	    		removeError();
	    		hapus.style.display 	= '';
	    		cetak.style.display 	= '';
	    		ubah.style.display 		= '';
	    		browse.style.display 	= '';
	    		simpan.style.display 	= 'none';
	    		tambah.style.display    = '';
	    		this.style.display 		= 'none';
	    		// console.log(tempData);
	    		/*for(var i=0,fLen=f.length;i<fLen;i++){
				  f.elements[i].readOnly = true;
				}*/
				disableAll();	
				for (var i = 0;i <input.length;i++) {
					input[i].value = tempData[i];
				}
				for(var i=0,fLen=detailrek5.length;i<fLen;i++){
				  detailrek5[i].style.visibility = '';
				}
				disableSearch();
	    	});

	    	//event tambah
	    	tambah.addEventListener('click',function(){
	    		this.style.display 		= 'none';
	    		simpan.style.display    = '';
	    		cancel.style.display    = '';
	    		hapus.style.display 	= 'none';
	    		cetak.style.display 	= 'none';
	    		ubah.style.display 		= 'none';
	    		browse.style.display 	= 'none';
	    		for(var i=0,fLen=detailrek5.length;i<fLen;i++){
				  detailrek5[i].style.visibility = 'hidden';
				}
	    		openReadOnly();
	    	});
    	");
    ?>
    <script type="text/javascript">
		function serialize(form) {
			if (!form || form.nodeName !== "FORM") {
				return;
			}
			var i, j, q = [];
			for (i = form.elements.length - 1; i >= 0; i = i - 1) {
				if (form.elements[i].name === "") {
					continue;
				}
				switch (form.elements[i].nodeName) {
				case 'INPUT':
					switch (form.elements[i].type) {
					case 'text':
					case 'hidden':
					case 'password':
					case 'button':
					case 'reset':
					case 'submit':
						q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
						break;
					case 'checkbox':
					case 'radio':
						if (form.elements[i].checked) {
							q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
						}						
						break;
					case 'file':
						break;
					}
					break;			 
				case 'TEXTAREA':
					q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
					break;
				case 'SELECT':
					switch (form.elements[i].type) {
					case 'select-one':
						q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
						break;
					case 'select-multiple':
						for (j = form.elements[i].options.length - 1; j >= 0; j = j - 1) {
							if (form.elements[i].options[j].selected) {
								q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].options[j].value));
							}
						}
						break;
					}
					break;
				case 'BUTTON':
					switch (form.elements[i].type) {
					case 'reset':
					case 'submit':
					case 'button':
						q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
						break;
					}
					break;
				}
			}
			return q.join("&");
		}
    </script>
    <?php if ($enable_readonly == true) {?>
    <script type="text/javascript">
   	 	disableAll();
    </script> 
    <?php }?>
