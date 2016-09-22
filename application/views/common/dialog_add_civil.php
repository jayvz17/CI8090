<!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="add_civil_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Information</h4>
			</div>
			<div class="modal-body">
				<table width = "100%" id = "add_civil_table">
					<input type="hidden" name="cse_no" id = "cse_no" >
					<tr>
						<td align = "left" width = "40%" >CAREER SERVICE/ RA 1080 (BOARD/BAR)</td>
						<td><input type = "text" id = "career_service" name = "career_service" class="form-control required" class="form-control" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >RATING</td>
						<td><input type = "text" id = "rating" name = "rating" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >DATE OF EXAMINATION/ CONFERMENT</td>
						<td><input type = "text" id = "date_examination" name = "date_examination" class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >PLACE OF EXAMINATION / CONFERMENT</td>
						<td><input type = "text" id = "place_examination" name = "place_examination" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >NUMBER</td>
						<td><input type = "text" id = "number" name = "number" class="form-control required" style="width:50%"  /></td>
					</tr>
					<tr>
						<td align = "left" width = "40%" >DATE OF RELEASE</td>
						<td><input type = "text" id = "date_release" name = "date_release" class="form-control datepicker required" style="width:50%"  /></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" id = "submit_add_civil" class="btn btn-default" >Add</button>
				<button type="button" id = "submit_edit_civil" class="btn btn-default" >Edit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  
  <!-- <button type="button" class="btn btn-info btn-lg hide" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
 <div class="modal" id="remove_civil_modal" role="dialog" data-backdrop="static" data-keyboard="false">
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
				<button type="button" id = "submit_remove_civil" class="btn btn-default" >Remove</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
      
    </div>
 </div>
  