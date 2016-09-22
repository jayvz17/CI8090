<script>
	
	function checkInput() {
        var ctr   = 0;
        var _requiredFields = '<b>The following required fields must be completed:</b> <br>';

        global_error = false;
        
        $('.required').each(function() {
			alert($(this).prev("label").html());
            var value = this.value;
            var id    = $(this).attr('id');
            if ((value == '' || value === undefined || value == 'null') && id.indexOf('s2id_') == -1) {
                ctr++;
                if (ctr == 1) global_error = true;
                if (id.indexOf('AmountTo') > -1) {
                    _requiredFields += $(this).prev("label").html() + '<br>';
                } else _requiredFields += $(this).prev("label").html() + '<br>';
            }
        });

        if (ctr > 0) {
            displayError(false, _requiredFields);
        }
    }
	
	function displayError(status, message) {
        $("#err_msg_div").remove();
        $("#star").append(error_message);
        
        if (status) {
            $("#err_msg").addClass("alert alert-success");
        } else {
            $("#err_msg").addClass("alert alert-danger");
        }

        $("#err_msg_div").fadeIn("slow").delay(180000).fadeOut("slow");
        $("#err_msg").html(message.toUpperCase());
        $("html, body").animate({
            scrollTop: 0
        }, 100);
    }
	
    $( ".form-group" ).children().addClass('form-control');

	var form            = $("form"),
		formGAD 		= $("#formGAD");
	error_message   	= '<div id="err_msg_div" style="display:none; margin-top:20px; margin-bottom:5px;" tabindex="-1" class="alert"><span id="err_msg" name="err_msg"></span></div>',

        global_error    = false;
		
	$("#btn_load").click(function() {
		checkInput();
		if (! form.valid()) {
            // jQuery.each($("label"), function() {
            //     $(this).replaceWith("<span>" + $(this).text() + "</span>");
            //     // $( ".form-group" ).children("span").addClass('help-inline');
            //     // $( this.id ).attr({
            //     //   for: this.id
            //     // });

            // });
            $('.error').addClass('help-inline')
            return;
        } 
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("home/filter_record"); ?>',
			data    	: $("#formGAD").serialize(),
				
			success: function(_data){

			var _obj = $.parseJSON(_data);
			/*		if( _obj.length > 0) {
    	     	$.each(_obj, function() {
    	     		_tr = "<tr>";
    	     		_tr += "<td>Posted on:  "+this["emp_unit"]+"</td>";
    	     		_tr += "</tr><tr>";
    	     		_tr += "<td><textarea style = 'resize: none; width: 1150px; height: 150px;' readonly>"+ this['emp_motherunit'] +"</textarea></td>";
    	     		_tr += "</tr><tr>";
    	     		_tr += "<td>Replied on: </td>";
    	     		_tr += "</tr><tr>";
    	     		_tr += "<td><textarea style = 'resize: none; width: 1150px; height: 150px;' readonly>"+this['emp_position']+"</textarea></td>";
    	     		_tr += "</tr>";
    	     		alert(_tr);
    	     	})

    	     }
			 */
				var otable = $("#tableTransactionSummary").dataTable({

				"bRetrieve": true, 
				"bProcessing": true,
				"bDestroy": true,
				"bPaginate": false,
				"bAutoWidth": false,
				"bFilter": false,
				"bInfo": false, 
				// "aaSorting": [[1, 'desc']],
				"bJQueryUI": false

				});
				
				otable.fnSort( [ [5,'desc'],[4,'desc'] ] );
				otable.fnClearTable();
				
				$.each(_obj, function() {
					otable.dataTable().fnAddData([

						//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_id"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_lastname"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_firstname"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_midname"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this['emp_birthdate']+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_age"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_sex"]+"</p>",
						"<p style='text-align : center; font-size: 10px'>"+this["emp_gender"]+"</p>",
						"<p style='text-align : right; font-size: 10px'>"+this["emp_motherunit"]+"</p>",
						"<p style='text-align : right; font-size: 10px'>"+this["emp_unit"]+"</p>",
						"<p style='text-align : right; font-size: 10px'>"+this["emp_position"]+"</p>",
						"<p style='text-align : right; font-size: 10px'>"+this["emp_designation"]+"</p>",
						
						//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
						
					]);
				})
			},
			error: function(x, t, m) {
				// jAlert("error", '<b>' + " Error : " + m + " <br /> Please contact administrator." + '</b>', "Error");
			}

		});
	});
	

	$("#btn_add").click(function(){
		$("#myModal").modal("show");
	});
	
</script>