<!-- Main Content -->
   <section class="content">
        <h2>Parameter<small> <?=$title?></small></h2>  
            <div class="body">
                <ol class="breadcrumb breadcrumb-col-cyan">
                    <li><a href="<?= site_url('dashboard');?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?= site_url('parameter');?>"> Parameter</a></li>
                    <li><a href="<?= site_url('parameter/mapping-rekening-sap');?>"> Mapping Rekening SAP</a></li>
                    <li class="active"> Urusan</li>
                </ol>
            </div>
            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-green">
                              <h2><?=$title_header?><small>Data Urusan</small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">                                        
                                        <li><a title="Kembali" href="<?= base_url('parameter'); ?>"><i class="material-icons">reply</i> Kembali</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="wizard">
                                        <div class="steps-index-container">
                                            <ul class="steps">
                                                <li class="completed pointer" onclick="href('<?=site_url('parameter/Mrs-permendagri-64')?>')">
                                                    <span class="step-index">
                                                        <span class="label">1</span>
                                                    </span>
                                                    <span class="step-text">Akun</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li class="active">
                                                    <span class="step-index">
                                                        <span class="label">2</span>
                                                    </span>
                                                    <span class="step-text">Kelompok</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li>
                                                    <span class="step-index">
                                                        <span class="label">3</span>
                                                    </span>
                                                    <span class="step-text">Jenis</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                                <li>
                                                    <span class="step-index">
                                                        <span class="label">4</span>
                                                    </span>
                                                    <span class="step-text">Obyek</span>
                                                    <span class="wiz-icon-chevron-right colorA"></span>
                                                    <span class="wiz-icon-chevron-right colorB"></span>
                                                </li>
                                            </ul>
                                      <div class="steps-content">
                                        <div class="step-pane active">
                                          <!-- <h4>Details</h4> -->
                                          <p>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th style="text-align:center; width:100px">Akun</th>
                                                    <th style="text-align:center; width:100px">Kelompok</th>
                                                    <th style="text-align:center;">Uraian Rekening Kelompok</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data as $list):?>
                                                        <tr>
                                                            <td style="text-align:center;"><?= $list->Kd_Rek_1;?></td>
                                                            <td style="text-align:center;"><?= $list->Kd_Rek_2;?></td>
                                                            <td>
                                                                <a href="<?= site_url('parameter/Mrs-permendagri-64/jenis/'.$list->Kd_Rek_2);?>">
                                                                <?= $list->Nm_Rek_2;?>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                            </tbody>
                                            </table>
                                          </p>
                                        </div>
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