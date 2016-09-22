<!-- <div id = "civil_fields" style="display:none">
	<div class="panel panel-default">
		<div class="panel-heading">
            <b>CIVIL SERVICE</b>
        </div>
        
	<div class="panel-body">
        <label class= "pnl-label">CAREER SERVICE/ RA 1080 (BOARD/BAR)</label>
	    <input class="form-control required" type = "text" name = "career_service[]" id = "career_service" style="width:50%" />
    </div>

    <div class="panel-body">
        <label class= "pnl-label">RATING</label>
	    <input class="form-control datepicker required" type = "text" name = "rating[]" id = "rating" style="width:50%" />
    </div>

    <div class="panel-body">
        <label class= "pnl-label">DATE OF EXAMINATION/ CONFERMENT</label>
	    <input class="form-control datepicker required" type = "text" name = "date_examination[]" id = "date_examination" style="width:50%" />
    </div>

    <div class="panel-body">
        <label class= "pnl-label">PLACE OF EXAMINATION / CONFERMENT</label>
	    <input class="form-control datepicker required" type = "text" name = "place_examination[]" id = "place_examination" style="width:50%" />
    </div>

    <div class="panel-body">
        <label class= "pnl-label">NUMBER</label>
	    <input class="form-control datepicker required" type = "text" name = "number[]" id = "number" style="width:50%" />
    </div>

    <div class="panel-body">
        <label class= "pnl-label">DATE OF RELEASE</label>
	    <input class="form-control datepicker" type = "text" name = "date_release[]" id = "date_release" style="width:50%" />
    </div>
	</div>
</div> -->

<form id = "civil_form">

	<!-- <div id = "addtional_civil_service" ></div>

    	<div class="panel-body">
    		<input type = "button" id ="add_civilz" value = "ADD" class = "btn btn-warning footer-button" />
    	</div> -->


    <div class="panel panel-default">
        <!-- <div class="panel-heading">
            <b>NAME OF CHILD (WRITE FULL NAME)</b>
        </div> -->
        <div class="table-responsive">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>CIVIL SERVICE</b>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a id = "add_civil" >Add</a>
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
                    <table id = "tableCivil" class="table table-bordered table-striped table-hover data-table">
                        <thead>
                            <tr>
                                 
                                <th>Action</th>
                                <th>CAREER SERVICE/ RA 1080 (BOARD/BAR)</th>
                                <th>RATING</th>
                                <th>DATE OF EXAMINATION/ CONFERMENT</th>
                                <th>PLACE OF EXAMINATION / CONFERMENT</th>
                                <th>NUMBER</th>
                                <th>DATE OF RELEASE</th>
                                
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
<!-- <input type = "button" id ="civil_save" name = "civil_save" value = "SAVE" class = "btn btn-warning" style="float: right;"/> -->