<form id = "fam_back_form">
	<div class="panel panel-default">
		<div class="panel-heading">
            <b>SPOUSE</b>
        </div>
		<div class="panel-body">
		    <label class= "pnl-label">SURNAME</label>
		    <input class="form-control required alphabet" type = "text" name = "spouse_lname" id = "spouse_lname" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_last_name']) ? $FAMILY_BACKGROUND[0]['spouse_last_name'] : '' ?>" style="width:50%" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">FIRST NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "spouse_fname" id = "spouse_fname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_first_name']) ? $FAMILY_BACKGROUND[0]['spouse_first_name'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">MIDDLE NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "spouse_mname" id = "spouse_mname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_middle_name']) ? $FAMILY_BACKGROUND[0]['spouse_middle_name'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">OCCUPATION</label>
		    <input class="form-control required alphabet" type = "text" name = "spouse_occupation" id = "spouse_occupation" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_occupation']) ? $FAMILY_BACKGROUND[0]['spouse_occupation'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">EMPLOYEE/BUS NAME</label>
		    <input class="form-control required" type = "text" name = "spouse_employee" id = "spouse_employee" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_employer/business_name']) ? $FAMILY_BACKGROUND[0]['spouse_employer/business_name'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">BUSINNES ADDRESS</label>
		    <input class="form-control required" type = "text" name = "spouse_employee_address" id = "spouse_employee_address" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_business_address']) ? $FAMILY_BACKGROUND[0]['spouse_business_address'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">TELEPHONE</label>
		    <input class="form-control required int" type = "text" name = "spouse_employee_phone" id = "spouse_employee_phone" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['spouse_telephone_no']) ? $FAMILY_BACKGROUND[0]['spouse_telephone_no'] : '' ?>"/>
		</div>
	</div>


    <div class="panel panel-default">
		<div class="panel-heading">
            <b>FATHER</b>
        </div>
		<div class="panel-body">
            <label class= "pnl-label">SURNAME</label>
		    <input class="form-control required alphabet" type = "text" name = "father_lname" id = "father_lname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['father_last_name']) ? $FAMILY_BACKGROUND[0]['father_last_name'] : '' ?>" />
        </div>

        <div class="panel-body">
            <label class= "pnl-label">FIRST NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "father_fname" id = "father_fname" style="width:50%"  value = "<?=isset($FAMILY_BACKGROUND[0]['father_first_name']) ? $FAMILY_BACKGROUND[0]['father_first_name'] : '' ?>" />
        </div>

        <div class="panel-body">
            <label class= "pnl-label">MIDDLE NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "father_mname" id = "father_mname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['father_middle_name']) ? $FAMILY_BACKGROUND[0]['father_middle_name'] : '' ?>" />
        </div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>MOTHER</b>
        </div>
		<div class="panel-body">
            <label class= "pnl-label">SURNAME</label>
		    <input class="form-control required alphabet" type = "text" name = "mother_lname" id = "mother_lname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['mother_last_name']) ? $FAMILY_BACKGROUND[0]['mother_last_name'] : '' ?>" />
        </div>

        <div class="panel-body">
            <label class= "pnl-label">FIRST NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "mother_fname" id = "mother_fname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['mother_first_name']) ? $FAMILY_BACKGROUND[0]['mother_first_name'] : '' ?>" />
        </div>

        <div class="panel-body">
            <label class= "pnl-label">MIDDLE NAME</label>
		    <input class="form-control required alphabet" type = "text" name = "mother_mname" id = "mother_mname" style="width:50%" value = "<?=isset($FAMILY_BACKGROUND[0]['mother_middle_name']) ? $FAMILY_BACKGROUND[0]['mother_middle_name'] : '' ?>" />
        </div>
	</div>

	<!-- <div class="panel panel-default">
		<div class="panel-heading">
            <b>NAME OF CHILD (WRITE FULL NAME)</b>
        </div>

        <div id = "child_fields">
			<div class="panel-body">
	            <label class= "pnl-label">NAME</label>
			    <input class="form-control" type = "text" name = "full_name[]" id = "full_name" style="width:40%" />

	            <label class= "pnl-label">DATE OF BIRTH</label>
			    <input class="form-control datepicker" type = "text" name = "date_of_birth[]" id = "date_of_birth" style="width:8%" />
	        </div>
        </div>
        
        <div id = "addtional_child" ></div>

    	<div class="panel-body">
    		<input type = "button" id ="add_child" value = "ADD" class = "btn btn-warning footer-button" />
    	</div>


	</div> -->
	<div class="panel panel-default">
		<div class="panel-body">
			<label class= "pnl-label"> </label>
			<input type = "button" id ="family_save" name = "family_save" value = "SAVE" class = "btn btn-warning" s/>
		</div>
	</div>

	<div class="panel panel-default">
		<!-- <div class="panel-heading">
            <b>NAME OF CHILD (WRITE FULL NAME)</b>
        </div> -->
		<div class="table-responsive">
		    <div class="panel panel-default">
				<div class="panel-heading">
		            <b>CHILD</b>
		            <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a id = "add_child" >Add</a>
                                </li>
                                <li><a href="#">Settings</a>
                                </li>
								<li class="divider"></li>
                                <li><a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
		        </div>
				<div class="panel-body">
		            <table id = "tableChild" class="table table-bordered table-striped table-hover data-table">
						<thead>
							<tr>
								 
								<th>Action</th>
								<th>Name</th>
								<th>Date of Birth</th>
								
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
		        </div>
			</div>
		</div>
	</div>

</form>

