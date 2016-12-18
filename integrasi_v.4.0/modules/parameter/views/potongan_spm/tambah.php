<!-- Main Content -->
<?php
	$browse = $this->potongan_spm_model->allData();
	// print_r($browse);
	// exit;
?>
	
   <section class="content">
		<h2>Parameter<small> Potongan spm</small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/potongan-spm');?>"> Potongan spm</a></li>
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
						    <h2>Unit Potongan spm<small>Data Urusan</small></h2>
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
                                 <button type="button" class="close" id="tutup-browse" style="display: none;z-index: 9999;position: relative;">&times;</button>

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table-browse">
	                                        <thead>
	                                        <tr>
	                                            <th style="text-align:center; width:100px;display: none">id</th>
	                                            <th style="text-align:center; width:100px">Kd Rek</th>
	                                            <th style="text-align:center; width:100px">Uraian Potongan spm</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php foreach($browse as $row):?>
	                                                <?php
	                                            		$kdRek4PotonganSpm = strlen((string)$row->Kd_Rek_4)==1?"0".$row->Kd_Rek_4:$row->Kd_Rek_4;
	                                            		$kdRek5PotonganSpm = strlen((string)$row->Kd_Rek_5)==1?"0".$row->Kd_Rek_5:$row->Kd_Rek_5;
	                                            	?>
	                                            	<tr <?= "onclick='pilih({$row->id})'"?>>
	                                                    <td style="text-align:center;display: none"><?= $row->id;?></td>
	                                                    <td style="text-align:center;"><?= $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3.".".$kdRek4PotonganSpm.".".$kdRek5PotonganSpm?></td>
	                                                    <td style="text-align:center;"><?= $this->potongan_spm_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5)->Nm_Rek_5?></td>
	                                                </tr>
	                                            <?php endforeach; ?>
	                                        </tbody>
	                                    </table>

                                	<form id="form-potongan-spm-rekening" name="form-potongan-spm" method="POST" action="<?=site_url("parameter/potongan_spm/save")?>">
                                		<div class="alert alert-danger" style="display: none" id="error_pesan">
									        <button type="button" class="close" data-dismiss="alert">&times;</button>
									        <div><?= PESAN_FIELD_KOSONG?></div>
									    </div>
	                                	<div class="row">
	                                		<div class="col-md-12">Potongan spm rekening</div>
	                                	</div>
	                                	<div class="row">
		                                    <div id="potongan-spm-rekening">
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
						                    		<a class="link-search" href="<?=base_url('parameter/potongan-spm-rekening/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
				                  		<div class="row">
					                    	<div class="col-md-12 Nm_Rek_5" id="potongan_spm_rekening_Nm_Rek_5">
					                    		<?php if (isset($content['dataset']['rekening'])) {
						                    			$data = $content['dataset']['rekening'];
						                    			echo $data->Nm_Rek_5;
					                    			}
					                    		?>		

					                    	</div>
					                    </div>
						                <div class="row">
					                    	<div class="col-md-12">
												<?= ($enable_readonly == true)?'<button type="button" class="btn btn-primary" id="Potongan_tambah">Tambah</button>':'<button type="button" class="btn btn-primary" id="Potongan_simpan">Simpan</button>'?>
												<!-- <button type="submit" class="btn btn-primary" id="Potongan_simpan">Simpan</button> -->
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
    </section>
    <?php
    	// echo '<script type="text/javascript">';
    	// echo 'var cancel = document.getElementById("cancel");cancel.addEventListener("click",function(){window.location.href=\''.base_url('parameter/Potongan/destroy').'\'});';
    	// echo '</script>';
    	$cancel = base_url('parameter/potongan_spm/destroy');
    	$urlAjax  		= base_url('parameter/potongan_spm/ajax');
    	$this->registerJS("
	    var d 			= document,
    		f 			= d.forms['form-potongan-spm'],
    		input 		= f.getElementsByTagName('input'),
    		tempData 	= {},
    		form 		= d.getElementById('potongan-spm-rekening'),
    		ajaxKAR 	= form.getElementsByTagName('input'),
    		pesan_error = d.getElementById('error_pesan'),
    		simpan 		= d.getElementById('Potongan_simpan');
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

			// event 5 inputan Potongan spm rekening
    		for(i=0;i<ajaxKAR.length;i++){
    			d.getElementById(ajaxKAR[i].getAttribute('id')).addEventListener('keyup',function(){
    				params = '';
    				for (j=0; j < ajaxKAR.length; j++) { 
    					val = d.getElementById(ajaxKAR[j].getAttribute('id')).value;
    					params += ajaxKAR[j].getAttribute('id')+'='+val+'&';
    					// console.log(val);
    				}
    				params = params.slice(0, -1);
    				url = '$urlAjax';
    				response = ajaxPost(url,params,function(err,balikan){
    					div = d.getElementById('potongan_spm_rekening_Nm_Rek_5');
    					if (balikan.Nm_Rek_5 === undefined) {
    						div.style.visibility = '';
					        div.innerHTML = 'Data tidak ada pada sistem kami';
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
					d.getElementById('form-potongan-spm-rekening').submit();
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
	    		return send;
	    	}
    		var cancel = document.getElementById('cancel');cancel.addEventListener('click',function(){window.location.href='$cancel'});
    	");
    ?>
   
    