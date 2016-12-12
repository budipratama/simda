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
                                 <button type="button" class="close" id="tutup-browse" style="display: none;z-index: 9999;position: relative;">&times;</button>
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
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_1')!=''?$this->session->userdata('KAR_Kd_Rek_1'):''?>" min="1" id="Kd_Rek_1" name="Kd_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_2')!=''?$this->session->userdata('KAR_Kd_Rek_2'):''?>" min="1" id="Kd_Rek_2" name="Kd_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_3')!=''?$this->session->userdata('KAR_Kd_Rek_3'):''?>" min="1" id="Kd_Rek_3" name="Kd_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_4')!=''?$this->session->userdata('KAR_Kd_Rek_4'):''?>" min="1" id="Kd_Rek_4" name="Kd_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_5')!=''?$this->session->userdata('KAR_Kd_Rek_5'):''?>" min="1" id="Kd_Rek_5" name="Kd_Rek_5">
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
					                    		<?php if (isset($content['dataset']['rekening'])) {
						                    			$data = $content['dataset']['rekening'];
						                    			echo $data->Nm_Rek_5;
					                    			}
					                    		?>		

					                    	</div>
					                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Debit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-debit">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_1_debit')!=''?$this->session->userdata('KRD_Kd_Rek_1_debit'):''?>" id="D_Rek_1" name="D_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_2_debit')!=''?$this->session->userdata('KRD_Kd_Rek_2_debit'):''?>" id="D_Rek_2" name="D_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_3_debit')!=''?$this->session->userdata('KRD_Kd_Rek_3_debit'):''?>" id="D_Rek_3" name="D_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_4_debit')!=''?$this->session->userdata('KRD_Kd_Rek_4_debit'):''?>" id="D_Rek_4" name="D_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" value="<?=$this->session->userdata('KRD_Kd_Rek_5_debit')!=''?$this->session->userdata('KRD_Kd_Rek_5_debit'):''?>" id="D_Rek_5" name="D_Rek_5">
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
					                    		<?php if (isset($content['dataset']['debit'])) {
						                    			$data = $content['dataset']['debit'];
						                    			echo $data->Nm_Rek_5;
						                    		}
						                    	?>
					                    	</div>
					                    </div>
						                <div class="row">
	                                		<div class="col-md-12">Rekening Kredit</div>
	                                	</div>
					                    <div class="row">
						                    <div id="rekening-kredit">
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_1" name="K_Rek_1" value="<?=$this->session->userdata('KRK_Kd_Rek_1_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_1_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_2" name="K_Rek_2" value="<?=$this->session->userdata('KRK_Kd_Rek_2_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_2_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_3" name="K_Rek_3" value="<?=$this->session->userdata('KRK_Kd_Rek_3_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_3_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_4" name="K_Rek_4" value="<?=$this->session->userdata('KRK_Kd_Rek_4_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_4_kredit'):''?>">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="text" class="form-control" id="K_Rek_5" name="K_Rek_5" value="<?=$this->session->userdata('KRK_Kd_Rek_5_kredit')!=''?$this->session->userdata('KRK_Kd_Rek_5_kredit'):''?>">
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
					                    			<?php if (isset($content['dataset']['kredit'])){
							                    			$data = $content['dataset']['kredit'];
							                    			echo $data->Nm_Rek_5;
					                    				}
					                    			?>
						                    	</div>
						                    </div>
					                    <div class="row">
					                    	<div class="col-md-12">
												
												<?= ($enable_readonly == true)?'<button type="button" class="btn btn-primary" id="Korolari_tambah">Tambah</button>':'<button type="button" class="btn btn-primary" id="Korolari_simpan">Simpan</button>'?>
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
    	// echo '<script type="text/javascript">';
    	// echo 'var cancel = document.getElementById("cancel");cancel.addEventListener("click",function(){window.location.href=\''.base_url('parameter/korolari/destroy').'\'});';
    	// echo '</script>';
    	$cancel = base_url('parameter/korolari/destroy');
    	$urlAjax  		= base_url('parameter/korolari/ajax');
    	$this->registerJS("

	    	var d 			= document,
	    		f 			= d.forms['form-korolari'],
	    		input 		= f.getElementsByTagName('input'),
	    		tempData 	= {},
	    		form 		= d.getElementById('korolari-atas-rekening'),
	    		rDeb 		= d.getElementById('rekening-debit'),
	    		rKred 		= d.getElementById('rekening-kredit'),
	    		ajaxKAR 	= form.getElementsByTagName('input'),
	    		ajaxRD 		= rDeb.getElementsByTagName('input'),
	    		ajaxRK 		= rKred.getElementsByTagName('input'),
	    		pesan_error = d.getElementById('error_pesan'),
	    		simpan 		= d.getElementById('Korolari_simpan');
	    	// console.log(input);
	    	// event only number inputan
	    	for(var i=0,fLen = input.length;i<fLen;i++){
				  c = input[i];
				  // console.log(cgetAttribute('id'));
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
	    	
			// event 5 inputan korolari atas rekening
    		for(i=0;i<ajaxKAR.length;i++){
    			d.getElementById(ajaxKAR[i].getAttribute('id')).addEventListener('keyup',function(){
    				params = '';
    				removeError();
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

	    	// event simpan data
			simpan.addEventListener('click',function(){
				submit = checkForm();
				if (submit) {
					d.getElementById('form-korolari-atas-rekening').submit();
				}
			});
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
					if (input[i].value != '') {
						input[i].parentNode.setAttribute('class','col-md-1');
					}
	    		}

	    		for (i=0; i< detailrek5.length;i++) {
	    			if (detailrek5[i].textContent == 'Data tidak ada pada sistem kami') {
	    				send = 0;
	    			}
	    		}

	    		return send;
	    	}
    		var cancel = document.getElementById('cancel');cancel.addEventListener('click',function(){window.location.href='$cancel'});
    	");
    ?>
   
    