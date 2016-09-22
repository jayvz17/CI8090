<script type="text/javascript">
	// alert("s");
	// $("#civil_eli").trigger("click");
	var _click = 0;

	$("#add_child").click(function(){

		_click = _click + 1;
		$("#child_fields .panel-body").clone().appendTo("#addtional_child").attr('id', _click).append("<input type = 'button' id = 'button_"+_click+"' onclick = 'remove_child(this.id)' />");

	});

	$('.datepicker').datepicker({
        // format: "mm/dd/yyyy",
        format: "yyyy-mm-dd",
        startView: 2,
        autoclose: true,
        todayBtn: "linked",
        todayHighlight: true
    }).inputmask({
        mask: "y-m-d",
        // mask: "m/d/y",
        // placeholder: "MM/DD/YYYY",
        placeholder: "YYYY-MM-DD",
        definitions: {
            'd': {
                validator: "0[0-9]|1[0-9]|2[0-9]|3[0-1]",
                cardinality: 2
             },
            'm': {
                validator: "0[0-9]|1[0-2]",
                cardinality: 2
             },
            'y': {
                validator: "(19|20)\\d{2}",
                cardinality: 4
             },
        }
    });

	function remove_child(id) {
		div_id = id.split('button_').pop();
		$( "#"+div_id ).remove();
	}

    $(function() { 

	    $("#personal_save").click(function() {
			checkInput('#per_info_form');
			if (! $("#per_info_form").valid()) {
	            $('.error').addClass('help-inline')
	            return;
	        } 

	        $.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/save_information"); ?>',
				data        : $("#per_info_form").serialize(),

				success: function(DATA){

				    var parse        = $.parseJSON(DATA);

                    var CODE        = parse['CODE'];
                    var EMP_NO      = parse['EMP_NO'];
                    
                    if( CODE== "00"  ) {
                        window.location.href = "<?=base_url()?>pds/pds_other_info/"+EMP_NO+"";
                    }
                    else if (parse.CODE  != "00" ) {

                    }
                    
				},

				error: function(x, t, m) {

				}

			});

	    });

	    
    });
	
</script>