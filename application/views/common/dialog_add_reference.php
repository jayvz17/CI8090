<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_reference_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "_referenceTable">
					<input type="hidden" name="ref_no" id = "ref_no" >
					<tr>
						<td align = "left" width = "40%" >Name</td>
						<td><input type = "text" id = "add_reference_name" name = "add_reference_name" class="form-control required alphabet" class="form-control" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Address</td>
						<td><input type = "text" id = "add_reference_address" name = "add_reference_address" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Contact No.</td>
						<td><input type = "text" id = "add_reference_contact" name = "add_reference_contact" class="form-control required int" style="width:50%"  /></td>
					</tr>
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_reference" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_reference" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_reference_modal" role="dialog" data-backdrop="static" data-keyboard="false">
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
				<button type="button" id = "submit_remove_reference" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  