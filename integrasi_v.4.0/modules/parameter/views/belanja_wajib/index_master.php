<!-- Main Content -->
	<?php
	// echo "nilai ".$this->session->userdata('KAR_Kd_Rek_1');
	// print_r($data);
	// echo $data->Kd_Rek_1;
	// echo $data->Kd_Rek_1;die();
	?>
	
   <section class="content">
		<h2>Parameter<small> belanja wajib</small></h2>  
			<div class="body">
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="<?php echo site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
					<li><a href="<?php echo site_url('parameter');?>"> Parameter</a></li>
					<li><a href="<?php echo site_url('parameter/belanja-wajib');?>"> Belanja wajib</a></li>
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
						    <h2>Unit Belanja wajib<small>Data Urusan</small></h2>
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
                                	<form id="form-bwlanja-wajib-dan-mengikat" name="form-belanja-wajib" method="POST" action="<?=site_url("parameter/belanja-wajib/save")?>">
	                                	<div class="row">
	                                		<div class="col-md-12">Belanja wajib dan mengikat</div>
	                                	</div>
	                                	<div class="row">
		                                    <div id="belanja-wajib-dan-mengikat">
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_1')!=''?$this->session->userdata('KAR_Kd_Rek_1'):$data->Kd_Rek_1?>" min="1" name="Kd_Rek_1">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_2')!=''?$this->session->userdata('KAR_Kd_Rek_2'):$data->Kd_Rek_2?>" min="1" name="Kd_Rek_2">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_3')!=''?$this->session->userdata('KAR_Kd_Rek_3'):$data->Kd_Rek_3?>" min="1" name="Kd_Rek_3">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_4')!=''?$this->session->userdata('KAR_Kd_Rek_4'):$data->Kd_Rek_4?>" min="1" name="Kd_Rek_4">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<input type="number" class="form-control" value="<?=$this->session->userdata('KAR_Kd_Rek_5')!=''?$this->session->userdata('KAR_Kd_Rek_5'):$data->Kd_Rek_5?>" min="1" name="Kd_Rek_5">
						                    	</div>
						                    	<div class="col-md-1">
						                    		<a class="link-search" href="<?=base_url('parameter/belanja-wajib-dan-mengikat/')?>">
						                    			<img src="<?= base_url('public/templates/integrasi_v.4.0/images/search.png')?>" widht="24" height="24" class="icon-search"/>
						                    		</a>
						                    	</div>
						                    </div>
					                    </div>
					                    <?php if (isset($content['dataset']['mengikat'])) {?>
						                  		<div class="row">
							                    	<div class="col-md-12">
							                    		<?php 
							                    			$data = $content['dataset']['mengikat'];
							                    			echo $data->Nm_Rek_5;
							                    		?>
							                    	</div>
							                    </div>
						                <?php }?>
						                <div class="row">
					                    	<div class="col-md-12">
												
												<?= ($enable_readonly == true)?'<button type="button" class="btn btn-primary" id="Belanja_tambah">Tambah</button>':'<button type="submit" class="btn btn-primary" id="Belanja_simpan">Simpan</button>'?>
												<!-- <button type="submit" class="btn btn-primary" id="Belanja_simpan">Simpan</button> -->
												<button type="button" class="btn btn-success" onclick="openReadOnly()">Ubah</button>
												<button type="button" class="btn btn-info">Hapus</button>
												<button type="button" class="btn btn-warning">Cetak</button>
												<button type="button" class="btn btn-danger">Cancel</button>
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
    <script type="text/javascript">
	    function openReadOnly(){
			for(var i=0,fLen=f.length;i<fLen;i++){
			  f.elements[i].readOnly = false;
			  f.elements[i].value = '';
			}	
			link = document.getElementsByClassName('link-search');
			for(var i=0,fLen=link.length;i<fLen;i++){
				link[i].removeEventListener('click',disableLink);
			}
		}
		
    	var tambah = document.getElementById("Belanja_tambah");
    	tambah.addEventListener('click',function(){
    		this.textContent = "Simpan";
    		// alert('sad');
    		openReadOnly();
    		setTimeout(function(){tambah.setAttribute("type","submit");},1000);
    		
    	});
    	
    </script>
    <?php if ($enable_readonly == true) {?>
    <script type="text/javascript">
   		var f = document.forms['form-belanja-wajib'];
		for(var i=0,fLen=f.length;i<fLen;i++){
		  	f.elements[i].readOnly = true;
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