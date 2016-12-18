<!-- Main Content -->

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
                                                <li class="pointer active">
                                                    <span class="step-index">
                                                        <span class="label">2</span>
                                                    </span>
                                                    <span class="step-text">Kode 2</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li class="pointer">
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
                                            <table class="table table-bordered table-striped table-hover dataTable jDtable" id="table-browse">
		                                        <thead>
		                                        <tr>
		                                            <th style="text-align:center; width:100px">id</th>
		                                            <th style="text-align:center; width:100px">Kode 1</th>
		                                            <th style="text-align:center; width:100px">Kode</th>
		                                            <th style="text-align:center; width:100px">Uraian Rekening</th>
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
											      	<label for="usr">ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											      	<input type="text" class="form-control" id="Kd_2" name="Kd_2" style="display: inline;width:5%" value="<?= $table1[0]->Kd_2?>">
											      </div>

											      <div class="col-md-12">
											      	<label for="usr">Uraian :</label>&nbsp;&nbsp;&nbsp;
											      	<input type="text" class="form-control" id="Uraian" name="Uraian" value="<?=$table1[0]->Uraian?>" style="display: inline;width:50%">
											      </div>
						                    </div>
						                    <div class="row">
						                    	<div class="col-md-12" id="kumpulan_button">
													<button type="button" class="btn btn-primary" id="Standart_harga_simpan" style="display: none">Simpan</button>
													<button type="button" class="btn btn-primary" id="Standart_harga_tambah">Tambah</button>
													<button type="button" class="btn btn-success" id="ubah">Ubah</button>
													<button type="button" class="btn btn-info" id="hapus">Hapus</button>
													<button type="button" class="btn btn-warning" id="cetak">Cetak</button>
													<button type="button" class="btn btn-danger" id="cancel" style="display: none">Cancel</button>
						                    	</div>
								        	</div>
								        </form>
                                        </div>
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
    	$urlDataTbl1  			= base_url('parameter/standart-harga/get-data-table-json-kd-2')."/".$Kd_1;
    	$urlHome  				= base_url('parameter/standart-harga/Kd-2');
    	$urlMain  				= base_url('parameter/standart-harga/');
    	$table 					= TBL_MS_STANDART_HARGA_2;
    	// echo $Kd_1;die();
    	$this->registerJS("
    		var d 				= document,
    			tempData 		= {}, 
    			hapus 			= d.getElementById('hapus'),
    			simpan  		= d.getElementById('Standart_harga_simpan'),
    			f 				= d.forms['form-standart-harga'],
    			id  			= d.getElementById('id'),
    			Kd_2  			= d.getElementById('Kd_2'),
    			pesan_error  	= d.getElementById('error_pesan'),
    			pesan_sukses  	= d.getElementById('pesan_sukses'),
    			error_unik  	= d.getElementById('error_unik'),
    			Uraian  		= d.getElementById('Uraian'),
    			input 			= f.getElementsByTagName('input'),
    			cancel  		= d.getElementById('cancel'),
    			ubah  			= d.getElementById('ubah'),
    			cetak  			= d.getElementById('cetak'),
    			hapus  			= d.getElementById('hapus'),
    			DELAY 			= 700,
			    clicks 			= 0,
			    timer 			= null,
    			tambah  		= d.getElementById('Standart_harga_tambah');

    		dataField();
    		function dataField(){
    			// event only number inputan
		    	for(var i=0,fLen = input.length;i<fLen;i++){
				  tempData[i] = input[i].value;
				}
				console.log(tempData);
    		}
    		// event tambah
    		tambah.addEventListener('click',function(){
    			params 	= 'kd=2&field=Kd_2&table=$table&Kd_1=$Kd_1';
    			url 	= '$urlMain/get-max-id';
    			ajaxPost(url,params,function(err,balikan){

					input[0].value = (balikan.id === null)?1:parseInt(balikan.id)+1;				
				});

    			for(var i=0,fLen = input.length;i<fLen;i++){
				  input[i].value = '';
				}
    			simpan.style.display 		= '';
    			cancel.style.display 		= '';
    			this.style.display 			= 'none';
    			ubah.style.display 			= 'none';
    			cetak.style.display 		= 'none';
    			hapus.style.display 		= 'none';
    			disableAll(false);
    		});
    		cancel.addEventListener('click',function(){
    			for(var i=0,fLen = input.length;i<fLen;i++){
				  input[i].value = tempData[i];
				}
    			disableAll(true);
    			tambah.style.display 	= '';
    			simpan.style.display 	= 'none';
    			this.style.display 		= 'none';
    			ubah.style.display 		= '';
    			cetak.style.display 	= '';
    			hapus.style.display 	= '';
    		});

    		ubah.addEventListener('click',function(){
    			this.style.display  	= 'none';
    			hapus.style.display 	= 'none';
    			cetak.style.display 	= 'none';
    			tambah.style.display 	= 'none'; 
    			simpan.style.display    = '';
    			disableAll(false);
    			id = input[0].value;
    			simpan.removeEventListener('click',actionSimpan);
    			simpan.addEventListener('click',actionUpdate);
    			simpan.myParam = id;
    			console.log(id);
    		});

    		disableAll(true);

    		function actionUpdate(evt){
    			// alert( evt.target.myParam );
    			send = checkForm();
    			if (send == 1) {

    				url = '$urlHome/$Kd_1/';
	    			params = 'flag=update&id='+evt.target.myParam+'&';
	    			for (j=0; j < input.length; j++) { 
	    				console.log(input[j].value);
						val = input[j].value;
						tempData[j] = input[j].value;;
						params += input[j].getAttribute('name')+'='+val+'&';
					}
	    			params = params.slice(0, -1);
	    			// alert(params)
    				ajaxPost(url,params,function(err,balikan){
    					if (balikan.status==1) {
    						pesan_sukses.style.display='';
    						refreshTable();
    						
    						disableAll(true);
			    			tambah.style.display 	= '';
			    			simpan.style.display 	= 'none';
			    			cancel.style.display 		= 'none';
			    			ubah.style.display 		= '';
			    			cetak.style.display 	= '';
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
	    			params = 'flag=new&';
	    			for (j=0; j < input.length; j++) { 
	    				console.log(input[j].value);
						val = input[j].value;
						tempData[j] = input[j].value;;
						params += input[j].getAttribute('name')+'='+val+'&';
					}
	    			params = params.slice(0, -1);
	    			// alert(params)
    				ajaxPost(url,params,function(err,balikan){
    					if (balikan.status==1) {
    						pesan_sukses.style.display='';
    						setTimeout(refreshTable,10);
    						
    						disableAll(true);
			    			tambah.style.display 	= '';
			    			simpan.style.display 	= 'none';
			    			cancel.style.display 		= 'none';
			    			ubah.style.display 		= '';
			    			cetak.style.display 	= '';
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

    		Kd_2.addEventListener('keydown',function(e){
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
		            $('.jDtable').DataTable( {
		                'processing': true,
		                'serverSide': true,
		                'ajax': '$urlDataTbl1',
		                'columns' : [
		                        {'data':'0', visible:false},
		                        {'data':'1', visible:false},
		                        {'data':'2'},
		                        {'data':'3'},
		                    ],
		            });

		            table = $('.jDtable').DataTable();
		            // event click row
		            $('.jDtable tbody').on('click', 'tr', function () {
		            	clicks++;  //count clicks
		            	var data = table.row( this ).data();
				        if(clicks === 1) {

				            timer = setTimeout(function() {
				            	
						        // console.log(data.length)
						        // for(i=0;i<data.length;i++){
						        // 	console.log(data[i])
						        // 	// input[i].value = data[i];
						        // }
						        input[0].value = data[2];
						        input[1].value = data[3];
				                clicks = 0;  //after action performed, reset counter

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
	        },500);
	        // setInterval(function(){
	        // 	table = $('.jDtable').DataTable();
	        // 	table.ajax.reload();
	        // },2000);
    		// event hapus
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
					        	window.location.href = '$urlHome';
					        }
					        else{
					        	window.location.href = '$urlHome';
					        }
					    }
					}
					http.send(params);
			    } 	
    		});

    		function disableAll(boolean){
    			f = d.forms['form-standart-harga'];
				for(var i=0,fLen=f.length;i<fLen;i++){
				  	f.elements[i].readOnly = boolean;
				}
    		}
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