<?php
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', FALSE);
    header('Pragma: no-cache');
?>
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

    .footer-button-next {
        margin-left: 850px;
    }

    #edu_back_form input[type=text] {
        text-transform: uppercase;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
<?=$this->load->view("common/header");?>


<input type = "hidden" name = "_EMP_NO" id = "_EMP_NO" value = "<?php echo $EMPLOYEE_NO; ?>" style="width:50%" />

<link rel="stylesheet" href="<?=HOST_URL?>CI/2/assets/bootstrap/manage/css/jquery.gritter.css" />
	<meta charset="utf-8">
	<title>PERSONAL DATA SHEET</title>
</head>
<body>
<!-- <form id = "formGAD"> -->
<div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> PERSONAL DATA SHEET 
			<!-- <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        Actions
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id = "btn_addz" >Add</a>
                        </li>
                        <li><a href="#">Settings</a>
                        </li>
						<li class="divider"></li>
                        <li><a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>

        <!-- /.panel-heading -->
        <div class="panel-body">
		<div id = "err_msg"></div>
            <div class="row">
				
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!-- EMPLOYEE No.: <b> <?php echo $EMPLOYEE_NO; ?> </b> </br> -->
                                 FULL NAME: <b><?php echo strtoupper($NAME[0]["first_name"] . " " . $NAME[0]["middle_name"] . " " . $NAME[0]["last_name"]); ?> </b>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills">
                                        <!-- <li ><a id = "per_info" data-toggle="tab" href="#per_info-pills">Personal Information</a></li> -->
                                        <li class="" ><a id = "fam_back" data-toggle="tab" href="#fam_back-pills">Family Background</a></li>
                                        <li><a id = "edu_back" data-toggle="tab" href="#edu_back-pills">Educational Background</a></li>
                                        <li><a id = "civil_eli" data-toggle="tab" href="#civil_eli-pills">Civil Service Eligibility</a></li>
                                        <li><a id = "work_expi" data-toggle="tab" href="#work_expi-pills">Work Expirience</a></li>
                                        <li><a id = "voluntary_work" data-toggle="tab" href="#voluntary_work-pills">Voluntary Work</a></li>
                                        <li><a id = "training" data-toggle="tab" href="#training-pills">Training Program</a></li>
                                        <li><a id = "other_info" data-toggle="tab" href="#other_info-pills">Other Info</a></li>
                                        <li><a id = "reference" data-toggle="tab" href="#reference-pills">Reference</a></li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- <div id="per_info-pills" class="tab-pane fade">
                                            <h4>Personal Information Tab</h4>
                                            <?php //$this->load->view("pds/personal_info"); ?>
                                        </div> -->
                                        <div id="fam_back-pills" class="tab-pane fade in ">
                                            <h4>Family Background</h4>

                                            <?php $this->load->view("pds/family_background"); ?>
                                        </div>
                                        <div id="edu_back-pills" class="tab-pane fade">
                                            <h4>Educational Background</h4>
                                            <?php $this->load->view("pds/educational_background"); ?>
                                            <?php #$this->load->view("common/dialog_add_child"); ?> 
                                            <?php #$this->load->view("common/confirm"); ?> 
                                        </div>
                                        <div id="civil_eli-pills" class="tab-pane fade">
                                            <h4>Civil Service Eligibity</h4>
                                            <?php $this->load->view("pds/civil_service"); ?>
                                           
                                        </div>
                                        <div id="work_expi-pills" class="tab-pane fade">
                                            <h4>Civil Service Eligibity</h4>
                                            <?php $this->load->view("pds/work_expi"); ?>
                                           
                                        </div>
                                        <div id="voluntary_work-pills" class="tab-pane fade">
                                            <h4>Voluntary Work</h4>
                                            <?php $this->load->view("pds/voluntary_work"); ?>
                                           
                                        </div>
                                        <div id="training-pills" class="tab-pane fade">
                                            <h4>Training Program</h4>
                                            <?php $this->load->view("pds/training_program"); ?>
                                           
                                        </div>
                                        <div id="other_info-pills" class="tab-pane fade">
                                            <h4>Other Info</h4>
                                            <?php $this->load->view("pds/other_info"); ?>
                                           
                                        </div>
                                        <div id="reference-pills" class="tab-pane fade">
                                            <h4>Character Reference</h4>
                                            <?php $this->load->view("pds/reference"); ?>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<!-- <div class="panel-body footer-button">
								<input class = "btn btn-primary" type = "button" id = "btn_load" name = "btn_load" value = "Submit"  />
							</div> -->
							
        <!-- /.panel-body -->
                        </div>
                    </div>
                    <!-- /.table-responsive -->
					<!-- <div class="table-responsive">
                        <div class="panel panel-default">
							<div class="panel-heading">
                                <b>FAMILY BACKGROUND</b>
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
					</div> -->
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
<!-- </form> -->
</body>

<footer>
    <?=$this->load->view("common/footer");?>
    <?php $this->load->view("common/dialog_add_emp"); ?>
    <?php $this->load->view("common/dialog_add_child"); ?>
    <?php $this->load->view("common/dialog_add_civil"); ?>
    
    <!-- RESULT_PARAMETER for select in work ('DEPARTMENT','POSITION') -->
	<?php $this->load->view("common/dialog_add_work",$RESULT_PARAMETER); ?>
	<?php $this->load->view("common/confirm"); ?>
    <?php $this->load->view("common/training_program"); ?>
    <?php $this->load->view("common/voluntary_work"); ?>
    <?php $this->load->view("common/dialog_add_other_info"); ?>
    <?php $this->load->view("common/dialog_add_reference"); ?>
</footer>
</html>
<?php $this->load->view("common/script_global"); ?>
<?php $this->load->view("pds/script"); ?>





