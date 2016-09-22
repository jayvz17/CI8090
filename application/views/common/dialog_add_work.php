<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_work_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "add_work_table">
					<input type="hidden" name="we_no" id = "we_no" >
					<tr>
						<td align = "left" width = "40%" >DATE</td>
						<td><input class="form-control required datepicker" type = "text" name = "date_from" id = "date_from" style="width:20%" /> - 
		    				<input class="form-control required datepicker" type = "text" name = "date_to" id = "date_to" style="width:20%" /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >POSITION</td>
						<td>
							<select id = "position" class= "required">
								<option value = "" >--- SELECT ---</option>>
								<?php 
									foreach ($RESULT_PARAMETER as $key => $value) {
										if ($value["CATEGORY"] == "POSITION") {
											// var_dump($value["FIELDS"]);
											echo "<option value = '".$value["FIELDS"]."' > ".$value['FIELDS']." </option>";
										}
									}
								?>
							</select>
						</td>
						
						<!-- <td><input type = "text" id = "position" name = "position" class="form-control " style="width:50%"  /></td> -->
					</tr>
					<tr>
						<td align = "left" width = "40%" >DEPARTMENT</td>
						<td>
							<select id = "department" class= "required">
								<option value = "" >--- SELECT ---</option>>
								<?php 
									foreach ($RESULT_PARAMETER as $key => $value) {
										if ($value["CATEGORY"] == "DEPARMENT") {
											// var_dump($value["FIELDS"]);
											echo "<option value = '".$value["FIELDS"]."' > ".$value['FIELDS']." </option>";
										}
									}
								?>
							</select>
						</td>
						<!-- <td><input type = "text" id = "department" name = "department" class="form-control" style="width:50%"  /></td> -->
					</tr>
					<tr>
						<td align = "left" width = "40%" >MONTHLY SALARY</td>
						<td><input type = "text" id = "monthly_salary" name = "monthly_salary" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >SALARY GRADE STEP (Format: "00-0")</td>
						<td><input type = "text" id = "salary_step" name = "salary_step" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >STATUS</td>
						<td><input type = "text" id = "status" name = "status" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >GOVT SERVICE</td>
						<td><input type = "text" id = "govt_service" name = "govt_service" class="form-control required" style="width:50%"  /></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_work" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_work" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_work_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				Are you sure you want to remove this record?

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_remove_work" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  