<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_other_info_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "_other_infoTable">
					<input type="hidden" name="ot_no" id = "ot_no" >
					<tr>
						<td align = "left" width = "40%" >Skill/Hobbies</td>
						<td><input type = "text" id = "add_other_info_skill" name = "add_other_info_name" class="form-control required"  style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Non Academic Distinctions/Recognition</td>
						<td><input type = "text" id = "add_other_info_academic" name = "add_other_info_date_from" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >Membership in Association/Organization</td>
						<td><input type = "text" id = "add_other_info_member" name = "add_other_info_date_to" class="form-control required" style="width:50%"  /></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_other_info" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_other_info" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_other_info_modal" role="dialog" data-backdrop="static" data-keyboard="false">
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
				<button type="button" id = "submit_remove_other_info" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  