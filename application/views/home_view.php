
<style type="text/css">
    input[type="text"] {
        width: 10px;
    }
    .email {
        width: 10px;
    }
    .password {
        width: 10px;
    }
    .help-inline {
        display: inline;
    }
	.footer-button {
		margin-left: 121px;
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link href="<?=HOST_URL?>CI/assets/css/bootstrap.min.css" rel="stylesheet" > -->
    <!-- <link href="<?=HOST_URL?>CI/assets/css/bootstrap.min.css" rel="stylesheet" > -->
	<!-- <link rel="stylesheet" href="<?=HOST_URL?>CI/2/assets/bootstrap/manage/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="<?=HOST_URL?>CI/2/assets/bootstrap/manage/css/bootstrap-responsive.min.css" /> -->

<?=$this->load->view("common/header");?>


<link rel="stylesheet" href="<?=HOST_URL?>CI/2/assets/bootstrap/manage/css/jquery.gritter.css" />
	<meta charset="utf-8">
	<title>GAD Information Sheet</title>
</head>
<body>
<form id = "formGAD">
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> GAD Information Sheet
							<div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#" id = "btn_add" >Add</a>
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

                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div id = "err_msg"></div>
                            <div class="row">
								
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <b>SEARCH</b>
                                            </div>
                                            <div class="panel-body">
                                                <label class= "pnl-label">Sex</label>
												<select class="" id="sex" name="sex" style="width:50%">
													<?php 

														foreach ($get_sex as $key => $value) {
														   echo "<option value = '".$value["emp_sex"]."' >".$value["emp_sex"]."</option>";
														}
													?>
												</select>
                                            </div>
                                            <div class="panel-body">
                                                <label class= "pnl-label">Gender</label>
												<select class="" id="gender" name="gender" style="width:50%">
												
													<?php 

														foreach ($get_gender as $key => $value) {
														   echo "<option value = '".$value["emp_gender"]."' >".$value["emp_gender"]."</option>";
														}
													?>
												</select>
                                            </div>
											<div class="panel-body">
                                                <label class= "pnl-label">Relationship Status</label>
												<select class="" id="relationshipstatus" name="relationshipstatus" style="width:50%">
													<?php 

														foreach ($get_relationship_status as $key => $value) {
														   echo "<option value = '".$value["emp_relationshipstatus"]."' >".$value["emp_relationshipstatus"]."</option>";
														}
													?>
												</select>
                                            </div>
											<div class="panel-body">
                                                <label class= "pnl-label">Office Port/Current Place Of Work/Assignment</label>
												<select class="" id="unit" name="unit" style="width:50%">
													<?php 

														foreach ($get_div_office_unit as $key => $value) {
														   echo "<option value = '".$value["emp_unit"]."' >".$value["emp_unit"]."</option>";
														}
													?>
												</select>
                                            </div>
											<div class="panel-body">
                                                <label class= "pnl-label">Mother Unit</label>
												<select class="" id="motherunit" name="motherunit" style="width:50%">
													<?php 

														foreach ($get_mother_unit as $key => $value) {
														   echo "<option value = '".$value["emp_motherunit"]."' >".$value["emp_motherunit"]."</option>";
														}
													?>
												</select>
                                            </div>
											<div class="panel-body">
                                                <label class= "pnl-label">Position</label>
												<select class="" id="position" name="position" style="width:50%">
													<?php 

														foreach ($get_position as $key => $value) {
														   echo "<option value = '".$value["emp_position"]."' >".$value["emp_position"]."</option>";
														}
													?>
												</select>
                                            </div>
											<div class="panel-body">
                                                <label class= "pnl-label">Designation</label>
												<select class="" id="designation" name="designation" style="width:50%" required>
													<?php 

														foreach ($get_designation as $key => $value) {
														   echo "<option value = '".$value["emp_designation"]."' >".$value["emp_designation"]."</option>";
														}
													?>
												</select>
                                            </div>
											
											<div class="panel-body footer-button">
												<input class = "btn btn-primary" type = "button" id = "btn_load" name = "btn_load" value = "Submit"  />
											</div>
											
                        <!-- /.panel-body -->
                                        </div>
                                    </div>
                                    <!-- /.table-responsive -->
									<div class="table-responsive">
                                        <div class="panel panel-default">
											<div class="panel-heading">
                                                <b>RESULT</b>
                                            </div>
											<div class="panel-body">
                                                <table id = "tableTransactionSummary" class="table table-bordered table-striped table-hover data-table">
													<thead>
														<tr>
															 
															<th>Action</th>
															<th>Last Name</th>
															<th>First Name</th>
															<th>Middle Name</th>
															<th>Birthdate</th>
															<th>Age</th> 
															<th>Sex</th>
															<th>Gender</th>
															<th>Mother Unit</th>
															<th>Office Port/Current Place Of Work/Assignment</th>
															<th>Position</th>
															<th>Designation</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
                                            </div>
										</div>
									</div>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
								
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
</form>
</body>

<footer>

    <?=$this->load->view("common/footer");?>
	<?php $this->load->view("common/dialog_add_emp"); ?>
	<?php $this->load->view("common/confirm"); ?>
	<!-- <script type="text/javascript" src="<?=HOST_URL;?>CI/assets/js/bootstrap.js"></script> -->
    <!-- <script type="text/javascript" src="<?=HOST_URL;?>CI/2/assets/bootstrap/manage/js/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?=HOST_URL?>CI/2/assets/bootstrap/manage/js/jquery.validate.js"></script> -->

</footer>
</html>
<?php $this->load->view("home_view_script"); ?>





