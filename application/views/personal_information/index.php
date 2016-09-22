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
</style>
<!DOCTYPE html>
<html lang="en">
<head>
<?=$this->load->view("common/header");?>


<link rel="stylesheet" href="<?=HOST_URL?>CI/2/assets/bootstrap/manage/css/jquery.gritter.css" />
    <meta charset="utf-8">
    <title>PERSONAL DATA SHEET</title>
</head>
<body>
<!-- <form id = "formGAD"> -->
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> PERSONAL DATA SHEET 
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


    <div class="panel-body">
        <div id = "err_msg"></div>
        <div class="row">
            
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>PERSONAL DATA SHEET</b>
                        </div>
                        <div class="panel-body">
                            <form id = "per_info_form">
                                <div class="panel panel-default">
                                
                                    <div class="panel-heading">
                                        <b>PERSONAL INFORMATION</b>
                                    </div>
                                    <div class="panel-body">
                                    <label class= "pnl-label">SURNAME</label>
                                    <input class="form-control " type = "text" name = "lname" id = "lname" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">FIRST NAME</label>
                                    <input class="form-control " type = "text" name = "fname" id = "fname" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">MIDDLE NAME</label>
                                    <input class="form-control " type = "text" name = "mname" id = "mname" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">NAME EXTENSION</label>
                                    <select class="" id="name_extension" name="name_extension" style="width:50%">
                                        <option value = "" > --- </option>
                                        <option value = " " >N/A</option>
                                        <option value = "JR" >JR</option>
                                        <option value = "SR" >SR</option>
                                    </select>
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">DATE OF BIRTH</label>
                                    <input class="form-control datepicker required" type = "date" name = "date_of_birth" id = "date_of_birth" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">PLACE OF BIRTH</label>
                                    <input class="form-control " type = "text" name = "place_of_birth" id = "place_of_birth" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">SEX</label>
                                    <select class="" id="sex" name="sex" style="width:50%">
                                        <option value = "" > --- </option>
                                        <option value = "MALE" >MALE</option>
                                        <option value = "SR" >FEMALE</option>
                                    </select>
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">CIVIL STATUS</label>
                                    <select class="" id="civil_status" name="civil_status" style="width:50%">
                                        <option value = "" > --- </option>
                                        <option value = "SINGLE" >SINGLE</option>
                                        <option value = "MARRIED" >MARRIED</option>
                                        <option value = "ANNULLED" >ANNULLED</option>
                                        <option value = "WIDOWED" >WIDOWED</option>
                                        <option value = "SEPARATED" >SEPARATED</option>
                                        <option value = "OTHER" >OTHER</option>
                                    </select>
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">CITIZENSHIP</label>
                                    <input class="form-control " type = "text" name = "citizenship" id = "citizenship" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">HEIGHT</label>
                                    <input class="form-control" type = "text" name = "height" id = "height" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">WEIGHT</label>
                                    <input class="form-control" type = "text" name = "weight" id = "weight" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">BLOOD TYPE</label>
                                    <input class="form-control" type = "text" name = "blood_type" id = "blood_type" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">GSIS ID NO.</label>
                                    <input class="form-control" type = "text" name = "gsis_id" id = "gsis_id" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">PAG-IBIG ID NO.</label>
                                    <input class="form-control" type = "text" name = "pagibig_id" id = "pagibig_id" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">PHILHEALT NO.</label>
                                    <input class="form-control" type = "text" name = "philhealt_id" id = "philhealt_id" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">SSS NO.</label>
                                    <input class="form-control" type = "text" name = "sss_no" id = "sss_no" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">RESIDENTIAL ADDRESS</label>
                                    <input class="form-control" type = "text" name = "residential_address" id = "residential_address" style="width:50%" />
                                <!-- </div>

                                <div class="panel-body"> -->
                                    <label class= "pnl-label">ZIP CODE.</label>
                                    <input class="form-control" type = "text" name = "zip_code" id = "zip_code" style="width:10%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">TELEPHONE/CELL NO..</label>
                                    <input class="form-control" type = "text" name = "cell_no" id = "cell_no" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">PERMANENT ADDRESS</label>
                                    <input class="form-control" type = "text" name = "permanent_address" id = "permanent_address" style="width:50%" />
                                <!-- </div>

                                <div class="panel-body"> -->
                                    <label class= "pnl-label">ZIP CODE</label>
                                    <input class="form-control" type = "text" name = "zip_code2" id = "zip_code2" style="width:10%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">TELEPHONE NO.</label>
                                    <input class="form-control" type = "text" name = "telphone2" id = "telphone2" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">EMAIL ADDRESS</label>
                                    <input class="form-control" type = "email" name = "email_address" id = "email_address" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">AGENCY EMPLOYEE NO.</label>
                                    <input class="form-control" type = "text" name = "agency_employee" id = "agency_employee" style="width:50%" />
                                </div>

                                <div class="panel-body">
                                    <label class= "pnl-label">TIN</label>
                                    <input class="form-control" type = "text" name = "tin" id = "tin" style="width:50%" />
                                </div>

                                </div>
                                </form>

                            <br>
                            <input type = "button" id ="personal_save" name = "personal_save" value = "SAVE" class = "btn btn-warning" style="float: right;"/>


                            
                        </div>
                    
                    </div>
                </div>
                
            </div>

            <div class="col-lg-8">
                <div id="morris-bar-chart"></div>
            </div>

            
        </div>

    </div>

</div>

</body>

<footer>
    <?=$this->load->view("common/footer");?>
    <?php $this->load->view("common/dialog_add_emp"); ?>
    <?php $this->load->view("common/confirm"); ?>
</footer>
</html>
<?php $this->load->view("common/script_global"); ?>
<?php $this->load->view("personal_information/script"); ?>





