<form id = "reference_form">

    <!-- <div id = "addtional_Work_service" ></div>

        <div class="panel-body">
            <input type = "button" id ="add_Workz" value = "ADD" class = "btn btn-warning footer-button" />
        </div> -->


    <div class="panel panel-default">
        <!-- <div class="panel-heading">
            <b>NAME OF CHILD (WRITE FULL NAME)</b>
        </div> -->
        <div class="table-responsive">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Reference Program</b>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a id = "add_reference" >Add</a>
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
                    <table id = "tablereference" class="table table-bordered table-striped table-hover data-table">
                        <thead>
                            <tr>
                                 
                                <th>Action</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                
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
<!-- <input type = "button" id ="reference_save" name = "reference_save" value = "SAVE" class = "btn btn-warning" style="float: right;"/> -->

<div class="panel panel-default" id = "testings">
    <div class="table-responsive">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Photo</b>
            </div>
            <div class="controls">
                <!-- LIVE PHOTO -->
                <!-- <div id="my_camera"></div> -->
                <!-- <br> -->
                <!-- <button id="camshot" class="btn" onclick="javascript:void(attach_cam())">CAM</button> -->
                <!-- <button class="btn" onclick="javascript:void(take_snapshot())">SNAP</button> -->
                <!-- <button class="btn" onclick="javascript:void(exit_cam())">EXIT</button> -->
                <!-- <input type="hidden" class="" id="new_pic" name="new_pic" value="" /> -->
                <!-- <input type="hidden" id="old_pic" name="old_pic" value="<?=(isset($cusm->Picture) && $cusm->Picture != '0') ? $cusm->Picture : ''?>" /> -->
                <!-- LIVE PHOTO -->
                <div id = "div_pic"> </div>
                <img  id = 'PICTURE_EMPLOYEE'>
                <div class="demo" > </div>
                <div id = "testings" ></div>
            </div>
        </div>
    </div>
</div>

