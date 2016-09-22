<script type="text/javascript">
	// alert("s");
	// $("#civil_eli").trigger("click");
	var _click = 0;
	var _click_civil = 0;

	// $("#add_child").click(function(){

	// 	_click = _click + 1;
	// 	$("#child_fields .panel-body").clone().appendTo("#addtional_child").attr('id', _click).append("<input type = 'button' id = 'button_"+_click+"' onclick = 'remove_child(this.id)' />");

	// 	$('.datepicker').off();
	// 	$('.datepicker').datepicker({
	//         // format: "mm/dd/yyyy",
	//         format: "yyyy-mm-dd",
	//         startView: 2,
	//         autoclose: true,
	//         todayBtn: "linked",
	//         todayHighlight: true
	//     }).inputmask({
	//         mask: "y-m-d",
	//         // mask: "m/d/y",
	//         // placeholder: "MM/DD/YYYY",
	//         placeholder: "YYYY-MM-DD",
	//         definitions: {
	//             'd': {
	//                 validator: "0[0-9]|1[0-9]|2[0-9]|3[0-1]",
	//                 cardinality: 2
	//              },
	//             'm': {
	//                 validator: "0[0-9]|1[0-2]",
	//                 cardinality: 2
	//              },
	//             'y': {
	//                 validator: "(19|20)\\d{2}",
	//                 cardinality: 4
	//              },
	//         }
	//     });

	// });

	$("#add_civil").click(function(){

		_click_civil = _click_civil + 1;
		$("#civil_fields").clone().appendTo("#addtional_civil_service").attr('id', "DIV"+_click_civil).attr('style','display:block').append("<input type = 'button' value = 'REMOVE' class = 'btn btn-warning' id = 'DIV"+_click_civil+"' onclick = 'remove_child(this.id)' />");

		$("#addtional_civil_service #career_service").attr('id', "career_service"+_click_civil);
		$("#addtional_civil_service #rating").attr('id', "rating"+_click_civil);
		$("#addtional_civil_service #date_examination").attr('id', "date_examination"+_click_civil);
		$("#addtional_civil_service #place_examination").attr('id', "place_examination"+_click_civil);
		$("#addtional_civil_service #number").attr('id', "number"+_click_civil);
		$("#addtional_civil_service #date_release").attr('id', "date_release"+_click_civil);

	});

	$("#add_civil").trigger("click");

	// alert();

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

    $('.datepicker_year').datepicker({
        // format: "mm/dd/yyyy",
        format: "yyyy",
        startView: 2,
        maxViewMode:2,
        minViewMode:2,
        autoclose: true,
        todayBtn: "linked",
        todayHighlight: true
    }).inputmask({
        mask: "y",
        // mask: "m/d/y",
        // placeholder: "MM/DD/YYYY",
        placeholder: "YYYY",
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


	 // $('.input-daterange').datepicker({
  //       todayBtn: "linked"
  //   });

	// $('.input-daterange input').datepicker({
	//     minViewMode: 1
	// }).on('changeDate', function(ev){
	//     $("#todate").datepicker("option", "minDate",ev.date.setMonth(ev.date.getMonth() + 1));
	// });

	function remove_child(id) {
		div_id = id.split('button_').pop();
		$( "#"+div_id ).remove();
	}

	function checkInput(form) {
		// alert(""+form+"");
        var ctr   = 0;
        var _requiredFields = '<b>The following required fields must be completed:</b> <br>';

        global_error = false;
        
        $( " "+form+" .required").each(function() {
			// alert($(this).prev("label").html());
            var value = this.value;
            var id    = $(this).attr('id');
            if ((value == '' || value === undefined || value == 'null') && id.indexOf('s2id_') == -1) {
                ctr++;
                if (ctr == 1) global_error = true;
                if (id.indexOf('AmountTo') > -1) {
                    _requiredFields += $(this).prev("label").html() + '<br>';
                } 
                else {
                	if ($(this).prev("label").html() != undefined )
                		_requiredFields += $(this).prev("label").html() + '<br>';
                	else
                		_requiredFields += $(this).prev().prev("label").html() + '<br>';
                } 
            }
        });

        if (ctr > 0) {
            displayError(false, _requiredFields);
        }
    }

    function displayError(status, message) {
        $("#err_msg_div").remove();
        // $("#star").append(error_message);
        
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

    $(function() { // <-- add this
    	// form = $("#per_info_form");
    	// form = $("form");
	    

	    $("#family_save").click(function() {
			checkInput('#fam_back_form');
			if (! $("#fam_back_form").valid()) {
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
				url         : '<?php echo base_url("pds/save_family_information"); ?>',
				data        : $("#fam_back_form, #_EMP_NO").serialize(),

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					location.reload();
				},

				error: function(x, t, m) {

				}

			});
 
	    });

	  //   $("#personal_save").click(function() {
			// checkInput('#per_info_form');
			// if (! $("#per_info_form").valid()) {
	  //           $('.error').addClass('help-inline')
	  //           return;
	  //       } 

	  //       $.ajax({
			// 	type        : "POST",
			// 	url         : '<?php echo base_url("pds/save_information"); ?>',
			// 	data        : $("#per_info_form").serialize(),

			// 	success: function(_data){
				
			// 	},

			// 	error: function(x, t, m) {

			// 	}

			// });
			// // });
	  //   });

	    $("#edu_save").click(function() {
			checkInput('#edu_back_form');
			if (! $("#edu_back_form").valid()) {
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
				url         : '<?php echo base_url("pds/save_education"); ?>',
				data        : $("#edu_back_form, #_EMP_NO").serialize(),

				success: function(_data){
				
				},

				error: function(x, t, m) {

				}

			});
	    });

	    /*CHILD OF EMPLOYEE ONLOAD JQUERY*/
	    $("#fam_back").click(function() {
	    	$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/get_child"); ?>',
				data        : $("#_EMP_NO").serialize(),

				success: function(_data){
					var _obj = $.parseJSON(_data);
					
						var otable = $("#tableChild").dataTable({

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
						
						otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
						otable.fnClearTable();
						
						$.each(_obj, function() {

							_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["fbc_no"]+"' onclick = 'modal_edit_child(this.id)' />";
							_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["fbc_no"]+"' onclick = 'modal_remove_child(this.id)' />";

							otable.dataTable().fnAddData([
								//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
								"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
								"<p style='text-align : center; font-size: 10px'>"+this["name_of_child"]+"</p>",
								"<p style='text-align : center; font-size: 10px'>"+this["date_of_birth"]+"</p>",
								
								//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
								
							]);
						})
				},

				error: function(x, t, m) {

				}

			});
	    });

	    $("#civil_save").click(function() {
	    	checkInput('#civil_form');
			if (! $("#civil_form").valid()) {
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
				url         : '<?php echo base_url("pds/save_civil_service"); ?>',
				data        : $("#edu_back_form, #_EMP_NO").serialize(),

				success: function(_data){
				alert(_data);
				},

				error: function(x, t, m) {

				}

			});
	    });

	    /*FIRST ONLOAD ON VIEW*/
		$("#work_expi").trigger("click");
	    
    });

	/*MODAL FOR ADDING CHILD*/
	$("#add_child").click(function() {
		$("#submit_edit_child").hide();
		$("#submit_add_child").show();
		$("#add_child_modal").modal("show");
	});

	/*SUBMIT ADD CHILD AJAX*/
	$("#submit_add_child").click(function() {

		// if ( $("#add_child_dateOfBirth").val() == "" || $("#add_child_name").val() == "" ) {
		// 	alert("Please fill up the blank.");
		// 	return;
		// };

		Validation = checkInput_table("#_tableChild");
		if (Validation) {
	        return;
	    }
		
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_child"); ?>',
			data        : $("#add_child_dateOfBirth, #add_child_name, #_EMP_NO").serialize(),

			success: function(_data){
				alert(_data);
				$("#add_child_modal").modal("hide");
			},

			error: function(x, t, m) {

			}

		});

	});

	/*REMOVE CHILD MODAL*/
	function modal_remove_child(id) {
		$("#remove_child_modal").modal("show");
		$("#submit_remove_child").off();
		$("#submit_remove_child").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_child"); ?>',
				data        : {
						fbc_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					$("#remove_child_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	/*EDIT CHILD MODAL*/
	function modal_edit_child(id) {

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_child"); ?>',
			data        : {
					fbc_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				$.each(_obj, function() {
					$("#add_child_name").val(this["name_of_child"]);
					$("#add_child_dateOfBirth").val(this["date_of_birth"]);
					$("#fbc_no").val(this["fbc_no"]);
				});

			},

			error: function(x, t, m) {

			}

		});

		$("#submit_edit_child").show();
		$("#submit_add_child").hide();
		$("#add_child_modal").modal("show");
	}

	$("#submit_edit_child").click(function() {

		// if ( $("#add_child_dateOfBirth").val() == "" || $("#add_child_name").val() == "" ) {
		// 	alert("Please fill up the blank.");
		// 	return;
		// };

		Validation = checkInput_table("#_tableChild");
		if (Validation) {
	        return;
	    }
		
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_child"); ?>',
			data        : $("#add_child_dateOfBirth, #add_child_name, #_EMP_NO, #fbc_no").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				// $.each(_obj, function() {
					alert(_obj["msg"]);
				// });
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	$("#civil_eli").click(function() {
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/get_civil_service"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				
					var otable = $("#tableCivil").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["cse_no"]+"' onclick = 'modal_edit_civil(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["cse_no"]+"' onclick = 'modal_remove_civil(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["career_service"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["rating"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["date_of_examination/conferment"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["place_examination/conferment"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["license_number"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["license_date_of_release"]+"</p>",
							
							//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
			},

			error: function(x, t, m) {

			}

		});
	});

	/*EDIT CHILD MODAL*/
	function modal_edit_civil(id) {

		$('#add_civil_modal').find('input:text').val('');
		$("#cse_no").val(id);

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_civil"); ?>',
			data        : {
					cse_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				$.each(_obj, function() {

					$("#career_service").val(this['career_service']);
					$("#rating").val(this['rating']);
					$("#date_examination").val(this['date_of_examination/conferment']);
					$("#place_examination").val(this['place_examination/conferment']);
					$("#number").val(this['license_number']);
					$("#date_release").val(this['license_date_of_release']);
					
				});

			},

			error: function(x, t, m) {

			}

		});

		$("#submit_edit_civil").show();
		$("#submit_add_civil").hide();
		$("#add_civil_modal").modal("show");
	}

	$("#add_civil").click(function() {
		$('#add_civil_modal').find('input:text').val('');
		
		$("#submit_edit_civil").hide();
		$("#submit_add_civil").show();
		$("#add_civil_modal").modal("show");
	});

	$("#submit_add_civil").click(function() {

		// if ( $("#career_service").val() == "" || $("#rating").val() == "" || $("#date_examination").val() == "" || $("#place_examination").val() == "" || $("#number").val() == "" || $("#date_release").val() == ""  ) {
		// 	alert("Please fill up the blank.");
		// 	return;
		// };

		Validation = checkInput_table("#add_civil_table");
		if (Validation) {
	        return;
	    }
		
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_civil"); ?>',
			data        : {

					career_service 	: $("#career_service").val(),
					rating 	: $("#rating").val(),
					date_examination 	: $("#date_examination").val(),
					place_examination 	: $("#place_examination").val(),
					number 	: $("#number").val(),
					date_release 	: $("#date_release").val(),
					_EMP_NO 	: $("#_EMP_NO").val(),
			},


			success: function(_data){
				var _obj = $.parseJSON(_data);
				// $.each(_obj, function() {
					alert(_obj["msg"]);
				// });
				$("#add_civil_modal").modal("hide");
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	$("#submit_edit_civil").click(function() {

		// if ( $("#career_service").val() == "" || $("#rating").val() == "" || $("#date_examination").val() == "" || $("#place_examination").val() == "" || $("#number").val() == "" || $("#date_release").val() == ""  ) {
		// 	alert("Please fill up the blank.");
		// 	return;
		// };

		Validation = checkInput_table("#add_civil_table");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_civil"); ?>',
			data        : {

					career_service 	: $("#career_service").val(),
					rating 	: $("#rating").val(),
					date_examination 	: $("#date_examination").val(),
					place_examination 	: $("#place_examination").val(),
					number 	: $("#number").val(),
					date_release 	: $("#date_release").val(),
					cse_no 	: $("#cse_no").val(),
			},


			success: function(_data){
				var _obj = $.parseJSON(_data);
				// $.each(_obj, function() {
					alert(_obj["msg"]);
				// });
				$("#add_civil_modal").modal("hide");
			},

			error: function(x, t, m) {
				alert(t);
			}

		});

	});

	function modal_remove_civil(id) {

		$("#remove_civil_modal").modal("show");
		$("#submit_remove_civil").off();
		$("#submit_remove_civil").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_civil"); ?>',
				data        : {
						cse_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					$("#remove_civil_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	$("#work_expi").click(function(){
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/work_expi"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				
					var otable = $("#tableWork").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["we_no"]+"' onclick = 'modal_edit_work(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["we_no"]+"' onclick = 'modal_remove_work(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_from"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_to"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["position_title"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["department/agency/office/company"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["monthly_salary"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["salary_grade_step_increment"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["status_of_appointment"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["govt_service"]+"</p>",
							
							//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
			},

			error: function(x, t, m) {

			}

		});
	});

	$("#add_Work").click(function() {
		$('#add_work_modal').find('input:text').val('');
		$("#add_work_modal").modal("show");
		$("#submit_add_work").show();
		$("#submit_edit_work").hide();
	});

	$("#submit_add_work").click(function() {

		Validation = checkInput_table("#add_work_table");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_work"); ?>',
			data        : {
				date_from : $("#date_from").val(),
				date_to : $("#date_to").val(),
				position : $("#position option:selected").val(),
				department : $("#department option:selected").val(),
				monthly_salary : $("#monthly_salary").val(),
				salary_step : $("#salary_step").val(),
				status : $("#status").val(),
				govt_service : $("#govt_service").val(),
				_EMP_NO : $("#_EMP_NO").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_work_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	function modal_edit_work(id) {
		//TODO VALIDATION
		// if ( $("#career_service").val() == "" || $("#rating").val() == "" || $("#date_examination").val() == "" || $("#place_examination").val() == "" || $("#number").val() == "" || $("#date_release").val() == ""  ) {
		// 	alert("Please fill up the blank.");
		// 	return;
		// };

		$("#submit_add_work").hide();
		$("#submit_edit_work").show();

		$('#add_work_modal').find('input:text').val('');
		$("#we_no").val(id);

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_work"); ?>',
			data        : {
					we_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				$.each(_obj, function() {

					$("#date_from").val(this['inclusive_dates_from']);
					$("#date_to").val(this['inclusive_dates_to']);
					$("#monthly_salary").val(this['monthly_salary']);
					$("#salary_step").val(this['salary_grade_step_increment']);
					$("#status").val(this['status_of_appointment']);
					$("#govt_service").val(this['govt_service']);
					$('#position option[value='+this['position_title']+']').attr('selected','selected');
					$('#department option[value='+this['department/agency/office/company']+']').attr('selected','selected');

					
				});

			},

			error: function(x, t, m) {

			}

		});

		$("#submit_edit_work").show();
		$("#submit_add_work").hide();
		$("#add_work_modal").modal("show");
	}

	$("#submit_edit_work").click(function() {

		Validation = checkInput_table("#add_work_table");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_work"); ?>',
			data        : {
				date_from : $("#date_from").val(),
				date_to : $("#date_to").val(),
				position : $("#position").val(),
				department : $("#department").val(),
				monthly_salary : $("#monthly_salary").val(),
				salary_step : $("#salary_step").val(),
				status : $("#status").val(),
				govt_service : $("#govt_service").val(),
				we_no : $("#we_no").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_work_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	function modal_remove_work(id) {
		$("#remove_work_modal").modal("show");
		$("#submit_remove_work").off();
		$("#submit_remove_work").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_work"); ?>',
				data        : {
						we_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert(_obj["msg"]);
					$("#remove_work_modal").modal("hide");
					location.reload();
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	$("#add_Training").click(function() {
		$("#add_training_modal").modal("show");
		$("#submit_add_training").show();
		$("#submit_edit_training").hide();
	});

	$("#submit_add_training").click(function() {

		Validation = checkInput_table("#_training");
		if (Validation) {
	        return;
	    }


		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_training"); ?>',
			data        : {
					add_training_name 			: $("#add_training_name").val(),
					add_training_date_from 		: $("#add_training_date_from").val(),
					add_training_date_to 		: $("#add_training_date_to").val(),
					add_numbers_hours 			: $("#add_numbers_hours").val(),
					add_sponsored 				: $("#add_sponsored").val(),
					_EMP_NO 					: $("#_EMP_NO").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_training_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	$("#training").click(function() {
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/training_program"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				
					var otable = $("#tableTraining").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["tp_no"]+"' onclick = 'modal_edit_training(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["tp_no"]+"' onclick = 'modal_remove_training(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["title_of_seminar/conference/workshops/short_courses"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_of_attendance_from"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_of_attendance_to"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["number_of_hours"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["conducted/sponsored_by"]+"</p>",
							
							//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
			},

			error: function(x, t, m) {

			}

		});
	});

	function modal_edit_training(id) {

		$('#add_training_modal').find('input:text').val('');
		$("#tp_no").val(id);

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_training"); ?>',
			data        : {
					tp_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				if (_obj["err"] == "900") {
					alert(_obj["msg"]);
					location.reload();
					return;
				}

				$.each(_obj, function() {

					$("#add_training_name").val(this['title_of_seminar/conference/workshops/short_courses']);
					$("#add_training_date_from").val(this['inclusive_dates_of_attendance_from']);
					$("#add_training_date_to").val(this['inclusive_dates_of_attendance_to']);
					$("#add_numbers_hours").val(this['number_of_hours']);
					$("#add_sponsored").val(this['conducted/sponsored_by']);
					

					
				});

			},

			error: function(x, t, m) {

			}

		});

		$("#submit_edit_training").show();
		$("#submit_add_training").hide();
		$("#add_training_modal").modal("show");
	}

	$("#submit_edit_training").click(function(){

		Validation = checkInput_table("#_training");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_training"); ?>',
			data        : {
					add_training_name 			: $("#add_training_name").val(),
					add_training_date_from 		: $("#add_training_date_from").val(),
					add_training_date_to 		: $("#add_training_date_to").val(),
					add_numbers_hours 			: $("#add_numbers_hours").val(),
					add_sponsored 				: $("#add_sponsored").val(),
					tp_no 						: $("#tp_no").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_training_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		})

	});

	function modal_remove_training(id) {

		$("#remove_child_modal").modal("show");
		$("#submit_remove_child").off();
		$("#submit_remove_child").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_training"); ?>',
				data        : {
						tp_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					location.reload();
					$("#remove_child_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	/*Voluntary Work*/
	$("#voluntary_work").click(function() {
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/voluntary_work"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				
					var otable = $("#tableVoluntary").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["vw_iic"]+"' onclick = 'modal_edit_voluntary(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["vw_iic"]+"' onclick = 'modal_remove_voluntary(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["name_&_address_of_organization"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_from"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["inclusive_dates_to"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["number_of_hours"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["position/nature_of_work"]+"</p>",					//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
			},

			error: function(x, t, m) {

			}

		});
	});

	/*(VOLUNTARY WORK) ADD BUTTON FOR MODAL */
	$("#add_Voluntary").click(function(){
		$("#add_voluntary_modal").modal("show");
		$("#submit_edit_voluntary").hide();
		$("#submit_add_voluntary").show();
	});

	/*(VOLUNTARY WORK) ADD TO DATABASE */
	$("#submit_add_voluntary").click(function(){

		Validation = checkInput_table("#_vaoluntaryTable");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_voluntary"); ?>',
			data        : {
					add_voluntary_name :  $("#add_voluntary_name").val(),
					add_voluntary_date_from :  $("#add_voluntary_date_from").val(),
					add_voluntary_date_to :  $("#add_voluntary_date_to").val(),
					add_voluntary_numbers_hours :  $("#add_voluntary_numbers_hours").val(),
					add_voluntary_nature :  $("#add_voluntary_nature").val(),
					_EMP_NO 					: $("#_EMP_NO").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_voluntary_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {

			}

		});
	});

	/*(VOLUNTARY WORK) EDIT BUTTON CAME FROM TALE AND GET DETAILS */
	function modal_edit_voluntary(id) {
		$("#add_voluntary_modal").modal("show");
		$("#submit_edit_voluntary").show();
		$("#submit_add_voluntary").hide();

		$('#add_work_modal').find('input:text').val('');
		$("#vw_iic").val(id);

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_voluntary"); ?>',
			data        : {
					vw_iic : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				if (_obj["err"] == "900") {
					alert(_obj["msg"]);
					location.reload();
					return;
				}

				$.each(_obj, function() {

					$("#add_voluntary_name").val(this['name_&_address_of_organization']);
					$("#add_voluntary_date_from").val(this['inclusive_dates_from']);
					$("#add_voluntary_date_to").val(this['inclusive_dates_to']);
					$("#add_voluntary_numbers_hours").val(this['number_of_hours']);
					$("#add_voluntary_nature").val(this['position/nature_of_work']);
					
				});

			},

			error: function(x, t, m) {

			}

		});

	}

	$("#submit_edit_voluntary").click(function() {
		Validation = checkInput_table("#_vaoluntaryTable");
		if (Validation) {
	        return;
	    }

	    $.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_voluntary"); ?>',
			data        : {
					add_voluntary_name :  $("#add_voluntary_name").val(),
					add_voluntary_date_from :  $("#add_voluntary_date_from").val(),
					add_voluntary_date_to :  $("#add_voluntary_date_to").val(),
					add_voluntary_numbers_hours :  $("#add_voluntary_numbers_hours").val(),
					add_voluntary_nature :  $("#add_voluntary_nature").val(),
					vw_iic 					: $("#vw_iic").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_voluntary_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {

			}

		});

	});

	/*(VOLUNTARY WORK) REMOVE BUTTON CAME FROM TALE FOR MODAL */
	function modal_remove_voluntary(id) {

		$("#remove_child_modal").modal("show");
		$("#submit_remove_child").off();
		$("#submit_remove_child").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_voluntary"); ?>',
				data        : {
						vw_iic : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					location.reload();
					$("#remove_child_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	/*OTHER INFO*/
	$("#add_other_info").click(function(){
		$("#add_other_info_modal").modal("show");
		$("#submit_edit_other_info").hide();
		$("#submit_add_other_info").show();
	});

	$("#other_info").click(function() {
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/other_info"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);
				
					var otable = $("#tableother_info").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["ot_no"]+"' onclick = 'modal_edit_other_info(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["ot_no"]+"' onclick = 'modal_remove_other_info(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["special_skills/hobbies"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["non_academic_distinctions/recognition"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["membership_in_association/organization"]+"</p>",					//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
			},

			error: function(x, t, m) {

			}

		});
	});

	$("#submit_add_other_info").click(function() {
		
		Validation = checkInput_table("#_other_infoTable");
		if (Validation) {
	        return;
	    }

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/add_other_info"); ?>',
			data        : {
				add_other_info_skill : $("#add_other_info_skill").val(),
				add_other_info_academic : $("#add_other_info_academic").val(),
				add_other_info_member : $("#add_other_info_member").val(),
				_EMP_NO : $("#_EMP_NO").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_work_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	function modal_edit_other_info(id) {

		$("#add_other_info_modal").modal("show");
		$("#submit_edit_other_info").show();
		$("#submit_add_other_info").hide();

		$('#add_work_modal').find('input:text').val('');
		$("#ot_no").val(id);

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_other_info"); ?>',
			data        : {
					ot_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				$.each(_obj, function() {
					$("#add_other_info_skill").val(this["special_skills/hobbies"]);
					$("#add_other_info_academic").val(this["non_academic_distinctions/recognition"]);
					$("#add_other_info_member").val(this["membership_in_association/organization"]);
				});

			},

			error: function(x, t, m) {

			}

		});
	}

	$("#submit_edit_other_info").click(function(){
		Validation = checkInput_table("#_other_infoTable");
		if (Validation) {
	        return;
	    }

	    $.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/edit_other_info"); ?>',
			data        : {

					add_other_info_skill 		: $("#add_other_info_skill").val(),
					add_other_info_academic 	: $("#add_other_info_academic").val(),
					add_other_info_member 		: $("#add_other_info_member").val(),
					ot_no 						: $("#ot_no").val(),
			},


			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				$("#add_other_info_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	/*(OTHER INFO) REMOVE BUTTON CAME FROM TALE FOR MODAL */
	function modal_remove_other_info(id) {

		$("#remove_other_info_modal").modal("show");
		$("#submit_remove_other_info").off();
		$("#submit_remove_other_info").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_other_info"); ?>',
				data        : {
						ot_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					location.reload();
					$("#remove_child_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	/*reference*/
	$("#reference").click(function(){
		
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/reference"); ?>',
			data        : $("#_EMP_NO").serialize(),

			success: function(_data){
				var _obj = $.parseJSON(_data);

				
					var otable = $("#tablereference").dataTable({

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
					
					otable.fnSort( [ [1,'desc'],[0,'desc'] ] );
					otable.fnClearTable();
					
					$.each(_obj, function() {

						_BUTTON =  "<input value = 'EDIT' class = 'btn btn-default' type = 'button' id = '"+this["ref_no"]+"' onclick = 'modal_edit_reference(this.id)' />";
						_BUTTON +=  "<input value = 'REMOVE' class = 'btn btn-default' type = 'button' id = '"+this["ref_no"]+"' onclick = 'modal_remove_reference(this.id)' />";

						otable.dataTable().fnAddData([
							//"<p style='text-align : center; font-size: 10px'>"+_action+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+_BUTTON+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["name"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["address"]+"</p>",
							"<p style='text-align : center; font-size: 10px'>"+this["telephone_no"]+"</p>",					//"<p style='text-align : right; font-size: 10px'>"+_status+"</p>",
							
						]);
					})
				REFRESH_PHOTO();
			},

			error: function(x, t, m) {

			}

		});
	});

	/*ADD MODAL*/
	$("#add_reference").click(function(){
		$("#add_reference_modal").modal("show");
		$("#submit_add_reference").show();
		$("#submit_edit_reference").hide();
	});

	/*SUBMIT ADD REFERENCE*/
	$("#submit_add_reference").click(function(){
		Validation = checkInput_table("#_referenceTable");
		if (Validation) {
	        return;
	    }
		
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/reference_add"); ?>',
			data        : {

					add_reference_name 		: $("#add_reference_name").val(),
					add_reference_address 	: $("#add_reference_address").val(),
					add_reference_contact 	: $("#add_reference_contact").val(),
					_EMP_NO 				: $("#_EMP_NO").val(),
			},


			success: function(_data){
				var _obj = $.parseJSON(_data);
				// $.each(_obj, function() {
					alert(_obj["msg"]);
				// });
				$("#add_civil_modal").modal("hide");
				location.reload();
			},

			error: function(x, t, m) {
				alert(t);
			}

		});
	});

	function modal_edit_reference(id) {

		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/select_edit_reference"); ?>',
			data        : {
					ref_no : id
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);

				$.each(_obj, function() {
					$("#add_reference_name").val(this["name"]);
					$("#add_reference_address").val(this["address"]);
					$("#add_reference_contact").val(this["telephone_no"]);
					$("#ref_no").val(this["ref_no"]);
				});

			},

			error: function(x, t, m) {

			}

		});

		$("#submit_add_reference").hide();
		$("#submit_edit_reference").show();
		$("#add_reference_modal").modal("show");
	}

	$("#submit_edit_reference").click(function(){
		$.ajax({
			type        : "POST",
			url         : '<?php echo base_url("pds/reference_update"); ?>',
			data        : {
					add_reference_name 		: $("#add_reference_name").val(),
					add_reference_address 	: $("#add_reference_address").val(),
					add_reference_contact 	: $("#add_reference_contact").val(),
					ref_no 					: $("#ref_no").val(),
			},

			success: function(_data){
				var _obj = $.parseJSON(_data);
				alert(_obj["msg"]);
				location.reload();
				$("#add_reference_modal").modal("hide");

			},

			error: function(x, t, m) {

			}

		});
	});

	/*(OTHER INFO) REMOVE BUTTON CAME FROM TALE FOR MODAL */
	function modal_remove_reference(id) {

		$("#remove_reference_modal").modal("show");
		$("#submit_remove_reference").off();
		$("#submit_remove_reference").click(function() {

			$.ajax({
				type        : "POST",
				url         : '<?php echo base_url("pds/remove_other_info"); ?>',
				data        : {
						ref_no : id,
				},

				success: function(_data){
					var _obj = $.parseJSON(_data);
					alert("Records has been Remove");
					location.reload();
					$("#remove_child_modal").modal("hide");
				},

				error: function(x, t, m) {
					alert(t);
				}

			});
		});
	}

	$('.demo').ajaxupload({
	    // url:'upload.php'
	    url 			: '<?=HOST_URL?>CI/assets/php/upload.php',
	    allowExt		: ['jpg'],
	    maxFiles 		: 2,
	    remotePath 		: '../../image/'+$("#_EMP_NO").val(), 
	    removeOnSuccess	: true,
	    overrideFile	: true,
	    data 		:function(){
			return {
				_EMP_NO:$('#_EMP_NO').val()
			};
		},
		finish			: function(fn, file){
			$(".ax-upload").hide();
			alert("Updating data.");
			location.reload();
		},
		beforeUpload:   function(filename, file) {
			console.log(filename);
			console.log(file);
			return true;
		},

	    // test: "asdsadsa",
	// <link href="<?=HOST_URL?>CI/assets/css/baseTheme/style.css" rel="stylesheet" type="text/css" media="all" />

	});

	$(".ax-main-title").html("Select File <br> Note: JPG ONLY");
	$(".ax-clear").hide();
	$(".ax-upload-all").hide();

	function REFRESH_PHOTO() {

		var _EMP_NO  = $("#_EMP_NO").val();
		var url = '<?=HOST_URL?>CI/image/'+_EMP_NO+'/'+_EMP_NO+'.jpg';

		var http = new XMLHttpRequest();
	    http.open('HEAD', url, false);
	    http.send();
	    STATUS_FILE = http.status!=404;
	    
	    if (STATUS_FILE == true)
			$("#div_pic").html("<img width = '100px' height = '100px' src = '"+url+"' ?>");
		else 
			$("#div_pic").html("<img width = '100px' height = '100px' src = '<?=HOST_URL?>CI/image/default.png' ?>");

	}

</script>