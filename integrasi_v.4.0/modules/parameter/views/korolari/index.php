<!-- Main Content -->
<?php
	$this->load->model('parameter/Korolari_model');
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
	                                            <th style="text-align:center; width:100px">Kd Debit</th>
	                                            <th style="text-align:center; width:100px">Uraian Rekening</th>
	                                            <th style="text-align:center; width:100px">Kd Kredit</th>
	                                            <th style="text-align:center; width:100px">Uraian Rekening</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php foreach($browse as $row):?>
	                                            	<?php
	                                            		// $kdRek = 
	                                            		$kdRek4AtasRekening = strlen((string)$row->Kd_Rek_4)==1?"0".$row->Kd_Rek_4:$row->Kd_Rek_4;
	                                            		$kdRek5AtasRekening = strlen((string)$row->Kd_Rek_5)==1?"0".$row->Kd_Rek_5:$row->Kd_Rek_5;
	                                            		$kdRek4RekeningDebit = strlen((string)$row->D_Rek_4)==1?"0".$row->D_Rek_4:$row->D_Rek_4;
	                                            		$kdRek5RekeningDebit = strlen((string)$row->D_Rek_5)==1?"0".$row->D_Rek_5:$row->D_Rek_5;
	                                            		$kdRek4RekeningKredit = strlen((string)$row->K_Rek_4)==1?"0".$row->K_Rek_4:$row->K_Rek_4;
	                                            		$kdRek5RekeningKredit = strlen((string)$row->K_Rek_5)==1?"0".$row->K_Rek_5:$row->K_Rek_5;
	                                            	?>
	                                                <tr <?= "onclick='pilih({$row->id})'"?>>
	                                                    <td style="text-align:center;display: none"><?= $row->id;?></td>
	                                                    <td style="text-align:center;"><?= $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3.".".$kdRek4AtasRekening.".".$kdRek5AtasRekening?></td>
	                                                    <td style="text-align:center;"><?= $this->Korolari_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5)->Nm_Rek_5?></td>
	                                                    <td style="text-align:center;"><?= $row->D_Rek_1.".".$row->D_Rek_2.".".$row->D_Rek_3.".".$kdRek4RekeningDebit.".".$kdRek5RekeningDebit?></td>
	                                                    <td style="text-align:center;"><?= $this->Korolari_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5)->Nm_Rek_5?></td>
	                                                    <td style="text-align:center;"><?= $row->K_Rek_1.".".$row->K_Rek_2.".".$row->K_Rek_3.".".$kdRek4RekeningKredit.".".$kdRek5RekeningKredit?></td>
	                                                    <td style="text-align:center;"><?= $this->Korolari_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5)->Nm_Rek_5?></td>
	                                                </tr>
	                                            <?php endforeach; ?>
	                                        </tbody>
	                                    </table>
							    	<!-- </div> -->

                                	<form id="form-korolari-atas-rekening" name="form-korolari" method="POST" action="<?=site_url("parameter/korolari/save")?>">
	                                	<div class="alert alert-danger" style="display: none" id="error_pesan">
									        <button type="button" class="close" data-dismiss="alert">&times;</button>
									        <div><?= PESAN_FIELD_KOSONG?></div>
									    </div>
	                                	<div class="row">
	                                		<div class="col-md-12">Korolari Atas Rekening</div>
	                                	</div>
	                                	<div class="row">
		                                    <div id="korolari-atas-rekening">
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
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-atas-rekening/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                  		<div class="row">
						                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_atas_rekening_Nm_Rek_5">
						                    		<?= $KAR->Nm_Rek_5;?>
						                    	</div>
						                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Debit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-debit">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_1_debit')!=''?$this->session->userdata('KRD_Kd_Rek_1_debit'):$data->D_Rek_1?>" id="D_Rek_1" name="D_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_2_debit')!=''?$this->session->userdata('KRD_Kd_Rek_2_debit'):$data->D_Rek_2?>" id="D_Rek_2" name="D_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_3_debit')!=''?$this->session->userdata('KRD_Kd_Rek_3_debit'):$data->D_Rek_3?>" id="D_Rek_3" name="D_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_4_debit')!=''?$this->session->userdata('KRD_Kd_Rek_4_debit'):$data->D_Rek_4?>" id="D_Rek_4" name="D_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_5_debit')!=''?$this->session->userdata('KRD_Kd_Rek_5_debit'):$data->D_Rek_5?>" id="D_Rek_5" name="D_Rek_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-rekening-debit/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                  		<div class="row">
						                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_rekening_debit_Nm_Rek_5">
						                    		<?= $KRD->Nm_Rek_5;?>
						                    	</div>
						                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Kredit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-kredit">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_1" name="K_Rek_1" value="<?=$this->session->userdata('KRK_Kd_Rek_1_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_1_kredit'):$data->K_Rek_1?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_2" name="K_Rek_2" value="<?=$this->session->userdata('KRK_Kd_Rek_2_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_2_kredit'):$data->K_Rek_2?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_3" name="K_Rek_3" value="<?=$this->session->userdata('KRK_Kd_Rek_3_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_3_kredit'):$data->K_Rek_3?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_4" name="K_Rek_4" value="<?=$this->session->userdata('KRK_Kd_Rek_4_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_4_kredit'):$data->K_Rek_4?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_5" name="K_Rek_5" value="<?=$this->session->userdata('KRK_Kd_Rek_5_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_5_kredit'):$data->K_Rek_5?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/korolari-rekening-kredit/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                  		<div class="row">
						                    	<div class="col-md-12 Nm_Rek_5" id="Korolari_rekening_kredit_Nm_Rek_5">
						                    		<?= $KRK->Nm_Rek_5;?>
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
    	$urlUpdate  			= base_url('parameter/korolari/update');
    	$urlUpdateData  		= base_url("parameter/korolari/updateData/{$row->id}");
    	$urlSave  				= base_url('parameter/korolari/save');
    	$urlHapus  				= base_url('parameter/korolari/hapus');
    	$urlAjax  				= base_url('parameter/korolari/ajax');
    	$urlKorolari			= base_url('parameter/korolari');
    	$urlUpdateAjax  		= base_url("parameter/korolari/ajaxUpdate/{$row->id}");
    	$urlUpdateAjaxCancel  	= base_url("parameter/korolari/ajaxUpdate/0");

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
	    		form 		= d.getElementById('korolari-atas-rekening'),
	    		rDeb 		= d.getElementById('rekening-debit'),
	    		rKred 		= d.getElementById('rekening-kredit'),
	    		formId 		= d.getElementById('form-korolari-atas-rekening'),
	    		tutupBrowse = d.getElementById('tutup-browse'),
	    		pesan_error = d.getElementById('error_pesan'),
	    		ajaxKAR 	= form.getElementsByTagName('input'),
	    		ajaxRD 		= rDeb.getElementsByTagName('input'),
	    		ajaxRK 		= rKred.getElementsByTagName('input'),
	    		cetak 		= d.getElementById('cetak');
	    	find = setInterval(function(){
	    		if (d.getElementById('table-browse_wrapper') !=null) {
	    			d.getElementById('table-browse_wrapper').style.display = 'none';
	    			clearInterval(find);
	    		}
	    	},1);

	    	cancel.style.display = 'none';
    		simpan.style.display = 'none';

    		// event 5 inputan korolari atas rekening
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

    		// event 5 inputan rekening debit
    		for(i=0;i<ajaxRD.length;i++){
    			d.getElementById(ajaxRD[i].getAttribute('id')).addEventListener('keyup',function(){
    				params = '';
    				removeError();
    				for (j=0; j < ajaxRD.length; j++) { 
    					val = d.getElementById(ajaxRD[j].getAttribute('id')).value;
    					params += ajaxRD[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjax';
    				response = ajaxPost(url,params,function(err,balikan){
    					div = d.getElementById('Korolari_rekening_debit_Nm_Rek_5');
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

    		// event 5 inputan rekening kredit
    		for(i=0;i<ajaxRK.length;i++){
    			d.getElementById(ajaxRK[i].getAttribute('id')).addEventListener('keyup',function(){
    				params = '';
    				removeError();
    				for (j=0; j < ajaxRK.length; j++) { 
    					val = d.getElementById(ajaxRK[j].getAttribute('id')).value;
    					params += ajaxRK[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjax';
    				response = ajaxPost(url,params,function(err,balikan){
    					console.log(balikan.Nm_Rek_5);
    					div = d.getElementById('Korolari_rekening_kredit_Nm_Rek_5');
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
					        if (http.responseText == 1) {
					        	window.location.href = '$urlKorolari';
					        }
					        else{
					        	window.location.href = '$urlKorolari';
					        }
					    }
					}
					http.send(params);
			    } 

	    	});

	    	

			// event simpan data
			simpan.addEventListener('click',function(){
				submit = checkForm();
				if (submit) {
					d.getElementById('form-korolari-atas-rekening').submit();
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

	    		url    = '$urlUpdateAjax';
	    		for(var i=0,fLen=f.length;i<fLen;i++){
				  f.elements[i].readOnly = false;
				}
	    		for(var i=0,fLen=link.length;i<fLen;i++){
					link[i].removeEventListener('click',disableLink);
				}
				// alert(url);
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
	    		for(i=0;i<input.length;i++)
	    		{
					if (input[i].value == '') {
						send = 0;
						input[i].parentNode.setAttribute('class','has-error '+input[i].parentNode.getAttribute('class'));
						pesan_error.style.display = '';
					}
	    		}

	    		for (i=0; i< detailrek5.length;i++) {
	    			if (detailrek5[i].textContent == 'Data tidak ada pada sistem kami') {
	    				send = 0;
	    			}
	    			
	    		}
	    		return send;
	    	}

	    	// fungsi untuk menghilakan error
	    	function removeError()
	    	{
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
	    		url = '$urlUpdateAjaxCancel';
	    		ajaxGET(url,function(cb){
					alert(cb);
				});
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