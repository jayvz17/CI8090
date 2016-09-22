<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_training_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "_training">
					<input type="hidden" name="tp_no" id = "tp_no" >
					<tr>
						<td align = "left" width = "40%" >Title of Program</td>
						<td><input type = "text" id = "add_training_name" name = "add_training_name" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Date From</td>
						<td><input type = "text" id = "add_training_date_from" name = "add_training_date_from" class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Date To</td>
						<td><input type = "text" id = "add_training_date_to" name = "add_training_date_to" class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Numbers of Hours</td>
						<td><input type = "text" id = "add_numbers_hours" name = "add_numbers_hours" class="form-control int required"  style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Conducted Sponsored BY</td>
						<td><input type = "text" id = "add_sponsored" name = "add_sponsored" class="form-control required" style="width:50%"  /></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_training" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_training" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_training_modal" role="dialog" data-backdrop="static" data-keyboard="false">
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
				<button type="button" id = "submit_remove_training" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  