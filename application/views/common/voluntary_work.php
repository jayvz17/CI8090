<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_voluntary_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "_vaoluntaryTable">
					<input type="hidden" name="vw_iic" id = "vw_iic" >
					<tr>
						<td align = "left" width = "40%" >Name and Address of Organization</td>
						<td><input type = "text" id = "add_voluntary_name" name = "add_voluntary_name" class="form-control required" class="form-control" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Date From</td>
						<td><input type = "text" id = "add_voluntary_date_from" name = "add_voluntary_date_from " class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Date To</td>
						<td><input type = "text" id = "add_voluntary_date_to" name = "add_voluntary_date_to" class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Numbers of Hours</td>
						<td><input type = "text" id = "add_voluntary_numbers_hours" name = "add_voluntary_numbers_hours" class="form-control int required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Position/Nature of Work</td>
						<td><input type = "text" id = "add_voluntary_nature" name = "add_voluntary_nature" class="form-control required" class="form-control" style="width:50%"  /></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_voluntary" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_voluntary" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_voluntary_modal" role="dialog" data-backdrop="static" data-keyboard="false">
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
				<button type="button" id = "submit_remove_voluntary" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  