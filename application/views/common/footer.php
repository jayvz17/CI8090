<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/jquery.validate.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/select2.js"></script> 
<!--<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/jquery.dataTables.js"></script> -->

<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/dataTables.bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/inputmask.js"></script> 

<script src="<?=HOST_URL?>CI/assets/webcam/webcam.js"></script>
<script src="<?=HOST_URL?>CI/assets/js/ajaxupload-min.js" type="text/javascript"></script>

<script>
	
	$('select').select2();
	
	//For no conflict of bootrap button design
    //$.fn.bootstrapBtn = $.fn.button.noConflict();
	
	$('.data-table').dataTable({
		   "bJQueryUI": true,
		  "sPaginationType": "full_numbers",
		   "sDom": '<""l>t<"F"fp>'
	});
	
</script>