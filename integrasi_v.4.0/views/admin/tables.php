    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/bootstrap/js/bootstrap.js');?>"></script>
	<!-- Select Plugin Js -->
    <!-- <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script> -->
    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/jquery-datatable/extensions/export/buttons.print.min.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/js/admin.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/js/pages/tables/jquery-datatable.js');?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/js/demo.js');?>"></script>
	
    <!-- Autosize Plugin Datetime Picker Js -->
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/autosize/autosize.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/momentjs/moment.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js');?>"></script>
    <script src="<?php echo base_url('public/templates/integrasi_v.4.0/js/pages/forms/basic-form-elements.js');?>"></script>
    <script type="text/javascript">
        function href(url){
            window.location.href = url;
        }
        function refreshTable()
        {
             table = $('.jDtable').DataTable();
             table.ajax.reload();
        }
        /*function onlyNumber(e){
            if ((e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) || (e.keyCode == 8 )||(e.keyCode == 37 ) || (e.keyCode == 39 ) || (e.keyCode == 9 )) {
                             return;
                    }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        }*/
    </script>
</body>
<!-- END BODY -->
</html>
</html>