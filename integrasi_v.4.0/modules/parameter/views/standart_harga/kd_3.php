<!-- Main Content -->
	<?php
	// print_r($table1->Keterangan);
	// die();
	?>
   <section class="content">
		<h2>Parameter<small> Standart Harga</small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/standart-harga');?>"> Standart Harga</a></li>
					<li class="active"> Urusan</li>
				</ol>
			</div>
            <?php if($this->session->flashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('errors'); ?>
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
	                                <div class="wizard">
                                        <div class="steps-index-container">
                                            <ul class="steps">
                                                <li class="completed pointer" onclick="href('<?=site_url("parameter/standart-harga")?>')">
                                                    <span class="step-index">
                                                        <span class="label">1</span>
                                                    </span>
                                                    <span class="step-text">Kode 1</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li class="completed pointer"  onclick="href('<?=site_url("parameter/standart-harga/Kd-2/$Kd_1")?>')">
                                                    <span class="step-index">
                                                        <span class="label">2</span>
                                                    </span>
                                                    <span class="step-text">Kode 2</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li class="pointer active">
                                                    <span class="step-index">
                                                        <span class="label">3</span>
                                                    </span>
                                                    <span class="step-text">Kode 3</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                            </ul>
                                      <div class="steps-content">
                                        <div class="step-pane active">
                                          <!-- <h4>Details</h4> -->
                                          <p>
                                            <table class="table table-bordered table-striped table-hover dataTable jDtable" id="table_utama">
		                                        <thead>
		                                        <tr>
		                                            <th style="text-align:center; width:100px">id</th>
		                                            <th style="text-align:center; width:100px">Kode 1</th>
		                                            <th style="text-align:center; width:100px">Kode 2</th>
		                                            <th style="text-align:center; width:100px">Kode</th>
		                                            <th style="text-align:center; width:100px">Uraian</th>
		                                            <th style="text-align:center; width:100px">Harga</th>
		                                            <th style="text-align:center; width:100px">Satuan</th>
		                                            <th style="text-align:center; width:100px">Keterangan</th>
		                                        </tr>
		                                        </thead>
		                                        <tbody>
		                                            
		                                        </tbody>
		                                    </table>
                                          </p>
                                          	<div class="alert alert-success" style="display: none" id="pesan_sukses">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <?php echo NOTIF_SUCCESS_INPUT ?>
										    </div>
										    <div class="alert alert-danger" id="error_pesan" style="display: none">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div><?= PESAN_FIELD_KOSONG?></div>
										    </div>

										    <div class="alert alert-danger" id="error_unik" style="display: none">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div><?= NOTIF_UNIQUE_INPUT?></div>
										    </div>
                                            <form id="form-standart-harga" name="form-standart-harga" method="POST" action="<?=site_url("parameter/standart-harga/")?>">
                                                <div class="row">
                                                      <div class="col-md-12">
                                                        <label for="usr">Kode 1 : <?=$uraian->Uraian?></label><br>
                                                        <label for="usr">Kode 2 : <?=$uraian2->Uraian?></label>
                                                      </div>
                                                </div>
			                                	<div class="row">
												      <div class="col-md-12">
												      	<label for="usr">ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      	<input type="text" class="form-control" id="Kd_3" name="Kd_3" style="display: inline;width:5%" value="<?= $table1->Kd_3?>">
												      </div>

												      <div class="col-md-12">
												      	<label for="usr">Uraian :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      	<input type="text" class="form-control" id="Uraian" name="Uraian" value="<?=$table1->Uraian?>" style="display: inline;width:50%">
												      </div>
												      <div class="col-md-12">
												      	<label for="usr">Harga :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      	<input type="text" class="form-control" id="Harga" name="Harga" value="<?=$table1->Harga?>" style="display: inline;width:50%">
												      </div>
												      <div class="col-md-12">
												      	
												      	<label for="usr" style="float: left;">Satuan :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      	<select class="form-control" id="Satuan" name="Satuan" style="display: inline;width:50%">
												      		<option value='0'>Pilih Satuan</option>
												      	<?php
												      		foreach ($databTableSatuan as $key => $value) {
												      			echo "<option value='{$databTableSatuan[$key]->ID_Satuan}'>{$databTableSatuan[$key]->Uraian}</option>";
												      		}
												      	?>
												      	</select>
                                                        <a href="javascript:showStandartSatuan();" title="Tambah Satuan"><img style="width: 35px;" src="<?= base_url('public/templates/integrasi_v.4.0/images/add_red.png');?>"></a>  
												      </div>
												      <div class="col-md-12">
												      	<label for="usr" style="float: left;">Keterangan :</label>&nbsp;&nbsp;&nbsp;
												      	<textarea class="form-control" rows="3" id="Keterangan" name="Keterangan" style="display: inline;width:50%"><?=$table1->Keterangan?></textarea>
												      </div>
							                    </div>
							                    <div class="row">
							                    	<div class="col-md-12" id="kumpulan_button">
														<button type="button" class="btn btn-primary" id="Standart_harga_simpan" style="display: none">Simpan</button>
														<button type="button" class="btn btn-primary" id="Standart_harga_tambah">Tambah</button>
														<button type="button" class="btn btn-success" id="Standart_harga_ubah">Ubah</button>
														<button type="button" class="btn btn-info" id="Standart_harga_hapus">Hapus</button>
														<button type="button" class="btn btn-danger" id="Standart_harga_cancel" style="display: none">Cancel</button>
							                    	</div>
									        	</div>
								        	</form>
                                        </div>
                                    </div>
                                	<div class="col-md-12" id="Standart_satuan">
                                        <p><button type="button" class="close" id="tutup-browse" style="z-index: 9999;position: relative;">&times;</button></p>
                                		<table class="table table-bordered table-striped table-hover dataTable jDtable" id="table_utama_sub">
	                                        <thead>
	                                        <tr>
	                                            <th style="text-align:center; width:100px">id</th>
	                                            <th style="text-align:center; width:500px">ID</th>
	                                            <th style="text-align:center; width:500px">Uraian Rekening</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
	                                        </tbody>
	                                    </table>

                                        <form id="Form_Standart_satuan" name="Form_Standart_satuan" method="POST">
                                            <div class="col-md-12">
                                                <label for="usr">ID Satuan:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control" id="Kd_3" name="Kd_3" style="display: inline;width:5%" value="<?= $table2->ID_Satuan?>">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="usr">Uraian :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control" id="Uraian" name="Uraian" value="<?=$table2->Uraian?>" style="display: inline;width:50%">
                                            </div>
                                            <!-- <div class="row"> -->
                                                <div class="col-md-12" id="kumpulan_button">
                                                    <button type="button" class="btn btn-primary" id="Standart_satuan_simpan" style="display: none">Simpan</button>
                                                    <button type="button" class="btn btn-primary" id="Standart_satuan_tambah">Tambah</button>
                                                    <button type="button" class="btn btn-success" id="Standart_satuan_ubah">Ubah</button>
                                                    <button type="button" class="btn btn-info" id="Standart_satuan_hapus">Hapus</button>
                                                    <button type="button" class="btn btn-danger" id="Standart_satuan_cancel" style="display: none">Cancel</button>
                                                </div>
                                            <!-- </div> -->
                                        </form>
                                	</div>
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
    	$urlDataTbl1  			= base_url('parameter/standart-harga/get-data-table-json-kd-3')."/".$Kd_1."/".$Kd_2;
    	$urlDataTblSatuan  		= base_url('parameter/standart-harga/get-data-table-json-satuan');
        $urlHome                = base_url('parameter/standart-harga/Kd-3');
        $urlHapus3              = base_url('parameter/standart-harga/hapus3');
        $urlHapus4              = base_url('parameter/standart-harga/hapus4');
    	$urlSatuan  			= base_url('parameter/standart-harga/standart-satuan');
    	$urlMain  				= base_url('parameter/standart-harga/');
        $table                  = TBL_MS_STANDART_HARGA_3;
    	$valueSatuan 			= ($table1->Satuan =='')?0:$table1->Satuan;
    	$id 					= $table1->id;
        $id_satuan              = $table2->id;
        $table2                 = Ms_Standart_Satuan;
        $urlSelectOption        = base_url('parameter/standart-harga/select-option');;

    	$this->registerJS("

    		var d 				= document,
    			tempData 		= {}, 
                simpanSatuan    = d.getElementById('Standart_satuan_simpan'),
                tambahSatuan    = d.getElementById('Standart_satuan_tambah'),
                ubahSatuan      = d.getElementById('Standart_satuan_ubah'),
                hapusSatuan     = d.getElementById('Standart_satuan_hapus'),
                cancelSatuan    = d.getElementById('Standart_satuan_cancel'),
    			hapus 			= d.getElementById('hapus'),
                simpan          = d.getElementById('Standart_harga_simpan'),
    			StSatuan  		= d.getElementById('Standart_satuan'),
                f               = d.forms['form-standart-harga'],
    			f2 				= d.forms['Form_Standart_satuan'],
    			Kd_3  			= d.getElementById('Kd_3'),
    			pesan_error  	= d.getElementById('error_pesan'),
    			pesan_sukses  	= d.getElementById('pesan_sukses'),
    			error_unik  	= d.getElementById('error_unik'),
                Uraian          = d.getElementById('Uraian'),
    			Harga  		    = d.getElementById('Harga'),
    			input 			= f.getElementsByTagName('input'),
    			cancel  		= d.getElementById('Standart_harga_cancel'),
    			ubah  			= d.getElementById('Standart_harga_ubah'),
    			hapus  			= d.getElementById('Standart_harga_hapus'),
    			satuan  		= d.getElementById('Satuan'),
    			keterangan		= d.getElementById('Keterangan'),
    			DELAY 			= 700,
			    clicks 			= 0,
			    timer 			= null,
                id              = '$id',
                tempData2       = {},
                idSatuan        = '$id_satuan',
                input2          = f2.getElementsByTagName('input'),
    			tambah  		= d.getElementById('Standart_harga_tambah');

            initializedValueForm2();
            StSatuan.style.visibility = 'hidden';
            setTimeout(function(){
                StSatuan.style.display = 'none';
                StSatuan.style.visibility = 'visible';
            },1000);
            function initializedValueForm2()
            {
                for (i=0; i < input2.length; i++) { 
                    tempData2[i] = input2[i].value;
                } 
            }
            
            tambahSatuan.addEventListener('click',function(){
                disableAll2(false);
                for (i=0; i < input2.length; i++) { 
                    input2[i].value = '';
                }
                
                params  = 'kd=4&field=ID_Satuan&table=$table2';
                url     = '$urlMain/get-max-id';
                ajaxPost(url,params,function(err,balikan){
                    input2[0].value = (balikan.id === null)?1:parseInt(balikan.id)+1;                
                });

                ubahSatuan.style.display    = 'none';
                hapusSatuan.style.display   = 'none';
                this.style.display          = 'none';
                simpanSatuan.style.display  = '';
                cancelSatuan.style.display  = '';
            });

            cancelSatuan.addEventListener('click',function(){
                disableAll2(true);
                ubahSatuan.style.display    = '';
                hapusSatuan.style.display   = '';
                tambahSatuan.style.display   = '';
                cancelSatuan.style.display  = 'none';
                simpanSatuan.style.display  = 'none';
                for (i=0; i < input2.length;i++) { 
                    input2[i].value = tempData2[i];
                }
            });

            ubahSatuan.addEventListener('click',function(){
                disableAll2(false);
                ubahSatuan.style.display    = 'none';
                hapusSatuan.style.display   = 'none';
                cancelSatuan.style.display  = '';
                tambahSatuan.style.display  = 'none';
                simpanSatuan.style.display  = '';
                simpanSatuan.removeEventListener('click',actionSimpanSatuan);
                simpanSatuan.addEventListener('click',actionUpdateSatuan);
            });

            simpanSatuan.addEventListener('click',actionSimpanSatuan);
            
            function actionUpdateSatuan(){
                sbt = checkForm2();
                if (sbt == 1) {
                    params  = 'flag=update&id='+idSatuan+'&ID_Satuan='+input2[0].value+'&Uraian='+input2[1].value;
                    url     = '$urlSatuan';

                    ajaxPost(url,params,function(err,balikan){
                         if (balikan.status==1) {
                            pesan_sukses.style.display='';
                            setTimeout(refreshTable,10);
                            disableAll(true);
                            tambahSatuan.style.display    = '';
                            simpanSatuan.style.display    = 'none';
                            cancelSatuan.style.display    = 'none';
                            ubahSatuan.style.display      = '';
                            hapusSatuan.style.display     = '';
                            disableAll2(true);
                            simpanSatuan.addEventListener('click',actionSimpanSatuan);
                        }
                        else{
                            error_unik.style.display='';
                        }  

                    });   
                }
            }

            function actionSimpanSatuan(){
                sbt = checkForm2();
                if (sbt == 1) {
                    params  = 'flag=new&ID_Satuan='+input2[0].value+'&Uraian='+input2[1].value;
                    url     = '$urlSatuan';
                    ajaxPost(url,params,function(err,balikan){
                         if (balikan.status==1) {
                            pesan_sukses.style.display='';
                            setTimeout(refreshTable,10);
                            idSatuan        = balikan.id;
                            disableAll(true);
                            tambahSatuan.style.display    = '';
                            simpanSatuan.style.display    = 'none';
                            cancelSatuan.style.display    = 'none';
                            ubahSatuan.style.display      = '';
                            hapusSatuan.style.display     = '';
                            disableAll2(true);
                        }
                        else{
                            error_unik.style.display='';
                        }  

                    });
                    urlSelectOption = '$urlSelectOption';
                    ajaxPost(urlSelectOption,params,function(err,balikan){
                        // balikan.option;
                        document.getElementById('Satuan').innerHTML = balikan.option;
                        // console.log(balikan);
                    });  


                }
            }


            function checkForm2(){
                send = 1;
                for (i = 0;i<input2.length;i++) { 
                    if (input2[i].value == '') {
                        send = 0;
                        input2[i].parentNode.setAttribute('class','has-error '+input2[i].parentNode.getAttribute('class'));
                        pesan_error.style.display = '';
                    }
                }
                return send;
            }

    		selectedOptionSatuan($valueSatuan);

    		function selectedOptionSatuan(val){
    			console.log('nilai selected '+val);
    			satuan.value = 	val;
    		}
    		dataField();
    		function dataField(){
    			// event only number inputan
		    	for(var i=0,fLen = input.length;i<fLen;i++){
				  tempData[i] = input[i].value;
				}
				tempData[3] = d.getElementById('Satuan').value;
				tempData[4] = keterangan.value;
				console.log(tempData);
    		}
    		// event tambah
    		tambah.addEventListener('click',function(){
    			params 	= 'kd=3&field=Kd_3&table=$table&Kd_1=$Kd_1&Kd_2=$Kd_2';
    			url 	= '$urlMain/get-max-id';
    			ajaxPost(url,params,function(err,balikan){
					input[0].value = (balikan.id === null)?1:parseInt(balikan.id)+1;				
				});

    			for(var i=0,fLen = input.length;i<fLen;i++){
				  input[i].value = '';
				}
				keterangan.value = '';
				satuan.value = 0;
				// keterangan.getElementsByTagName('option');

    			simpan.style.display 		= '';
    			cancel.style.display 		= '';
    			this.style.display 			= 'none';
    			ubah.style.display 			= 'none';
    			hapus.style.display 		= 'none';
    			disableAll(false);
    		});
    		cancel.addEventListener('click',function(){
    			removeError();
    			for(var i=0,fLen = input.length;i<fLen;i++){
				  input[i].value = tempData[i];
				}
				selectedOptionSatuan(tempData[3]);
				keterangan.value = tempData[4];
    			disableAll(true);
    			tambah.style.display 	= '';
    			simpan.style.display 	= 'none';
    			this.style.display 		= 'none';
    			ubah.style.display 		= '';
    			hapus.style.display 	= '';
    		});

    		ubah.addEventListener('click',function(){
    			this.style.display  	= 'none';
    			hapus.style.display 	= 'none';
    			tambah.style.display 	= 'none'; 
    			simpan.style.display    = '';
    			cancel.style.display    = '';
    			disableAll(false);
    			simpan.removeEventListener('click',actionSimpan);
    			simpan.addEventListener('click',actionUpdate);
    			simpan.myParam = id;
    			console.log(id);
    		});

    		disableAll(true);

    		function actionUpdate(evt){
    			send = checkForm();
    			if (send == 1) {

    				url = '$urlHome/$Kd_1/';
    				var tmpParams = serialize(f);
	    			params = 'flag=update&id='+evt.target.myParam+'&Kd_1=$Kd_1&Kd_2=$Kd_2&'+tmpParams;
	    			
    				ajaxPost(url,params,function(err,balikan){
    					if (balikan.status==1) {
    						pesan_sukses.style.display='';
    						refreshTable();
    						
    						disableAll(true);
			    			tambah.style.display 	= '';
			    			simpan.style.display 	= 'none';
			    			cancel.style.display 		= 'none';
			    			ubah.style.display 		= '';
			    			hapus.style.display 	= '';
			    			simpan.removeEventListener('click',actionUpdate);
			    			simpan.addEventListener('click',actionSimpan);
    					}
    					else{
    						error_unik.style.display='';
    					}
    				});

    			}
    		}

    		function actionSimpan(){
    			send = checkForm();
    			
    			if (send==1) {
    				url = '$urlHome/$Kd_1/';
	    			var tmpParams = serialize(f);
	    			params = 'flag=new&Kd_1=$Kd_1&Kd_2=$Kd_2&'+tmpParams;

    				ajaxPost(url,params,function(err,balikan){
    					if (balikan.status==1) {
    						pesan_sukses.style.display='';
    						setTimeout(refreshTable,10);
    						id = balikan.id;
    						disableAll(true);
			    			tambah.style.display 	= '';
			    			simpan.style.display 	= 'none';
			    			cancel.style.display 	= 'none';
			    			ubah.style.display 		= '';
			    			hapus.style.display 	= '';

    					}
    					else{
    						error_unik.style.display='';
    					}
    				});
    			}
    		}
    		simpan.addEventListener('click',actionSimpan);

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
	    	Uraian.addEventListener('keydown',function(){
	    		removeError();
	    	});

            Harga.addEventListener('keydown',function(e){
                removeError();
                if ((e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) || (e.keyCode == 8 )||(e.keyCode == 37 ) || (e.keyCode == 39 ) || (e.keyCode == 9 )) {
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

    		Kd_3.addEventListener('keydown',function(e){
    			removeError();
			  	if ((e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) || (e.keyCode == 8 )||(e.keyCode == 37 ) || (e.keyCode == 39 ) || (e.keyCode == 9 )) {
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
			});

	        setTimeout(function(){
	        	// table
	        	$(document).ready(function() {
		            $('#table_utama').DataTable( {
		                'processing': true,
		                'serverSide': true,
		                'ajax': '$urlDataTbl1',
		                'columns' : [
		                        {'data':'0', visible:false},
		                        {'data':'1', visible:false},
		                        {'data':'2', visible:false},
		                        {'data':'3'},
		                        {'data':'4'},
		                        {'data':'5'},
		                        {'data':'6'},
		                        {'data':'7'},
		                    ],
		            });

		            // untuk satuan
		            $('#table_utama_sub').DataTable( {
		                'processing': true,
		                'serverSide': true,
		                'ajax': '$urlDataTblSatuan',
		                'columns' : [
		                        {'data':'0', visible:false},
		                        {'data':'1'},
		                        {'data':'2'},
		                    ],
		            });

		            table = $('#table_utama').DataTable();
		            // event click row
		            $('#table_utama tbody').on('click', 'tr', function () {
		            	clicks++;  //count clicks
		            	var data = table.row( this ).data();
				        if(clicks === 1) {
				            timer = setTimeout(function() {
				            	id = data[0];
                                input[0].value = data[3];//id
                                input[1].value = data[4];//Uraian
                                input[2].value = data[5];//harga
                                selectedOptionSatuan(data[6]);//satuan
                                keterangan.value = data[7];//keterangan
						        
				                clicks = 0;  //after action performed, reset counter
                                dataField();

				            }, DELAY);

				        } else {
				            clearTimeout(timer);  //prevent single-click action

				            clicks = 0;  //after action performed, reset counter
				            window.location.href = '$urlMain/Kd-3/'+data[1]+'/'+data[2];
				        }
				        
				    })
				    .on('dblclick',function(e){
				    	e.preventDefault();
				    });

                    table = $('#table_utama_sub').DataTable();
                    $('#table_utama_sub tbody').on('click', 'tr', function () {
                        clicks++;  //count clicks
                        var data = table.row( this ).data();
                        if(clicks === 1) {
                            timer = setTimeout(function() {
                                idSatuan = data[0];
                                input2[0].value = data[1];//id
                                input2[1].value = data[2];//Uraian
                                
                                clicks = 0;  //after action performed, reset counter
                                initializedValueForm2();

                            }, DELAY);

                        } else {
                            clearTimeout(timer);  //prevent single-click action

                            clicks = 0;  //after action performed, reset counter
                            window.location.href = '$urlMain/Kd-3/'+data[1]+'/'+data[2];
                        }
                        
                    })
                    .on('dblclick',function(e){
                        e.preventDefault();
                    });



				    // $('.jDtable tbody').live('click', 'tr', function () {

				    //  });
				    
		        });
	        },1000);

    		// event hapus
    		hapus.addEventListener('click',function(){
    			var r = confirm('Hapus data tekan yes');
			    if (r == true) {
		    		var http = new XMLHttpRequest();
					var url = '$urlHapus3';
					var params = 'id='+id;
					http.open('POST', url, true);

					http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

					http.onreadystatechange = function() {
					    if(http.readyState == 4 && http.status == 200) {
					        if (http.responseText == 1) {
					        	window.location.href = '$urlHome/$Kd_1/$Kd_2';
					        }
					        else{
					        	window.location.href = '$urlHome/$Kd_1/$Kd_2';
					        }
					    }
					}
					http.send(params);
			    } 	
    		});

            hapusSatuan.addEventListener('click',function(){
                var r = confirm('Hapus data tekan yes');
                if (r == true) {
                    var http = new XMLHttpRequest();
                    var url = '$urlHapus4';
                    var params = 'id='+idSatuan;
                    http.open('POST', url, true);

                    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    http.onreadystatechange = function() {
                        if(http.readyState == 4 && http.status == 200) {
                            console.log($('#table_utama_sub tbody'));
                            table = $('#table_utama_sub').DataTable();
                            data = table.row($('#table_utama_sub tbody > tr')[0]).data();
                            console.log(data);
                            
                            if (http.responseText == 1) {
                                refreshTable();
                                idSatuan = data[0];
                                input2[0].value = data[1];
                                input2[1].value = data[2];
                            }
                            else{
                                refreshTable();
                                idSatuan = data[0];
                                input2[0].value = data[1];
                                input2[1].value = data[2];
                            }
                        }
                    }
                    http.send(params);
                }   
            });
            function showStandartSatuan(){
                d.getElementById('table_utama_wrapper').style.display='none';
                d.getElementById('form-standart-harga').style.display='none';
                StSatuan.style.display = '';
            }

    		function disableAll(boolean){
    			f = d.forms['form-standart-harga'];
				for(var i=0,fLen=f.length;i<fLen;i++){
				  	f.elements[i].readOnly = boolean;
				}
    		}
            disableAll2(true);
            function disableAll2(boolean){
                for(var i=0,fLen=input2.length;i<fLen;i++){
                    input2[i].readOnly = boolean;
                }
            }

            d.getElementById('tutup-browse').addEventListener('click',function(){
                d.getElementById('table_utama_wrapper').style.display='';
                d.getElementById('form-standart-harga').style.display='';
                StSatuan.style.display = 'none';
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
   	 	// disableAll();
    </script> 
    <?php }?>