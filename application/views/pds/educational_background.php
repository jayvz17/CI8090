<form id = "edu_back_form">
	<input type="hidden" name="eb_no_Elementary" id="eb_no_Elementary" value = "<?=isset($EDU_BACKGROUND_ELEM['eb_no']) ? $EDU_BACKGROUND_ELEM['eb_no'] : '' ?>" />
	<input type="hidden" name="eb_no_Secondary" id="eb_no_Secondary" value = "<?=isset($EDU_BACKGROUND_SECON['eb_no']) ? $EDU_BACKGROUND_SECON['eb_no'] : '' ?>" />
	<input type="hidden" name="eb_no_Vocational" id="eb_no_Vocational"  value = "<?=isset($EDU_BACKGROUND_VOCA['eb_no']) ? $EDU_BACKGROUND_VOCA['eb_no'] : '' ?>" />
	<input type="hidden" name="eb_no_College" id="eb_no_College" value = "<?=isset($EDU_BACKGROUND_COLL['eb_no']) ? $EDU_BACKGROUND_COLL['eb_no'] : '' ?>" />
	<input type="hidden" name="eb_no_Graduate" id="eb_no_Graduate" value = "<?=isset($EDU_BACKGROUND_GRAD['eb_no']) ? $EDU_BACKGROUND_GRAD['eb_no'] : '' ?>" />

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>ELEMENTARY</b>
        </div>
		<div class="panel-body">
		    <label class= "pnl-label">NAME OF SCHOOL</label>
		    <input class="form-control required" type = "text" name = "elem_name_school" id = "elem_name_school" style="width:50%" value = "<?=isset($EDU_BACKGROUND_ELEM['name_of_school']) ? $EDU_BACKGROUND_ELEM['name_of_school'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">DEGREE COURSE</label>
		    <input class="form-control required" type = "text" name = "elem_degree" id = "elem_degree" style="width:50%" value = "<?=isset($EDU_BACKGROUND_ELEM['degree_course']) ? $EDU_BACKGROUND_ELEM['degree_course'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">YEAR GRADUATED</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "elem_year_graduated" id = "elem_year_graduated" style="width:50%" value = "<?=isset($EDU_BACKGROUND_ELEM['year_graduated']) ? $EDU_BACKGROUND_ELEM['year_graduated'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">HIGHEST GRADE/ LEVEL/ UNITS EARNED</label>
		    <input class="form-control required" type = "text" name = "elem_grades" id = "elem_grades" style="width:50%" value = "<?=isset($EDU_BACKGROUND_ELEM['highest_grade/level/units_earned']) ? $EDU_BACKGROUND_ELEM['highest_grade/level/units_earned'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">INCLUSIVE DATE OF ATTENDANCE</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "elem_attendance_from" id = "elem_attendance_from" style="width:20%" value = "<?=isset($EDU_BACKGROUND_ELEM['inclusive_dates_of_attendance_from']) ? $EDU_BACKGROUND_ELEM['inclusive_dates_of_attendance_from'] : '' ?>" /> - 
		    <input class="form-control required datepicker_year int" type = "text" name = "elem_attendance_to" id = "elem_attendance_to" style="width:20%" value = "<?=isset($EDU_BACKGROUND_ELEM['inclusive_dates_of_attendance_to']) ? $EDU_BACKGROUND_ELEM['inclusive_dates_of_attendance_to'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
		    <input class="form-control required" type = "text" name = "elem_scholar" id = "elem_scholar" style="width:50%" value = "<?=isset($EDU_BACKGROUND_ELEM['scholarship/academic_honors_recieved']) ? $EDU_BACKGROUND_ELEM['scholarship/academic_honors_recieved'] : '' ?>" />
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>SECONDARY</b>
        </div>
		<div class="panel-body">
		    <label class= "pnl-label">NAME OF SCHOOL</label>
		    <input class="form-control required" type = "text" name = "secondary_name_school" id = "secondary_name_school" style="width:50%" value = "<?=isset($EDU_BACKGROUND_SECON['name_of_school']) ? $EDU_BACKGROUND_SECON['name_of_school'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">DEGREE COURSE</label>
		    <input class="form-control required" type = "text" name = "secondary_degree" id = "secondary_degree" style="width:50%" value = "<?=isset($EDU_BACKGROUND_SECON['degree_course']) ? $EDU_BACKGROUND_SECON['degree_course'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">YEAR GRADUATED</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "secondary_year_graduated" id = "secondary_year_graduated" style="width:50%" value = "<?=isset($EDU_BACKGROUND_SECON['year_graduated']) ? $EDU_BACKGROUND_SECON['year_graduated'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">HIGHEST GRADE/ LEVEL/ UNITS EARNED</label>
		    <input class="form-control required" type = "text" name = "secondary_grades" id = "secondary_grades" style="width:50%" value = "<?=isset($EDU_BACKGROUND_SECON['highest_grade/level/units_earned']) ? $EDU_BACKGROUND_SECON['highest_grade/level/units_earned'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">INCLUSIVE DATE OF ATTENDANCE</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "secondary_attendance_from" id = "secondary_attendance_from" style="width:20%" value = "<?=isset($EDU_BACKGROUND_SECON['inclusive_dates_of_attendance_from']) ? $EDU_BACKGROUND_SECON['inclusive_dates_of_attendance_from'] : '' ?>" /> - 
		    <input class="form-control required datepicker_year int" type = "text" name = "secondary_attendance_to" id = "secondary_attendance_to" style="width:20%" value = "<?=isset($EDU_BACKGROUND_SECON['inclusive_dates_of_attendance_to']) ? $EDU_BACKGROUND_SECON['inclusive_dates_of_attendance_to'] : '' ?>" />
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
		    <input class="form-control required" type = "text" name = "secondary_scholar" id = "secondary_scholar" style="width:50%" value = "<?=isset($EDU_BACKGROUND_SECON['scholarship/academic_honors_recieved']) ? $EDU_BACKGROUND_SECON['scholarship/academic_honors_recieved'] : '' ?>" />
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>VOCATIONAL/TRADE COURSE</b>
        </div>
		
		<div class="panel-body">
		    <label class= "pnl-label">NAME OF SCHOOL</label>
		    <input class="form-control required" type = "text" name = "vocational_name_school" id = "vocational_name_school" style="width:50%"  value = "<?=isset($EDU_BACKGROUND_VOCA['name_of_school']) ? $EDU_BACKGROUND_VOCA['name_of_school'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">DEGREE COURSE</label>
		    <input class="form-control required" type = "text" name = "vocational_degree" id = "vocational_degree" style="width:50%"  value = "<?=isset($EDU_BACKGROUND_VOCA['degree_course']) ? $EDU_BACKGROUND_VOCA['degree_course'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">YEAR GRADUATED</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "vocational_year_graduated" id = "vocational_year_graduated" style="width:50%" value = "<?=isset($EDU_BACKGROUND_VOCA['year_graduated']) ? $EDU_BACKGROUND_VOCA['year_graduated'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">HIGHEST GRADE/ LEVEL/ UNITS EARNED</label>
		    <input class="form-control required" type = "text" name = "vocational_grades" id = "vocational_grades" style="width:50%" value = "<?=isset($EDU_BACKGROUND_VOCA['highest_grade/level/units_earned']) ? $EDU_BACKGROUND_VOCA['highest_grade/level/units_earned'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">INCLUSIVE DATE OF ATTENDANCE</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "vocational_attendance_from" id = "vocational_attendance_from" style="width:20%" value = "<?=isset($EDU_BACKGROUND_VOCA['inclusive_dates_of_attendance_from']) ? $EDU_BACKGROUND_VOCA['inclusive_dates_of_attendance_from'] : '' ?>"/> - 
		    <input class="form-control required datepicker_year int" type = "text" name = "vocational_attendance_to" id = "vocational_attendance_to" style="width:20%" value = "<?=isset($EDU_BACKGROUND_VOCA['inclusive_dates_of_attendance_to']) ? $EDU_BACKGROUND_VOCA['inclusive_dates_of_attendance_to'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
		    <input class="form-control required" type = "text" name = "vocational_scholar" id = "vocational_scholar" style="width:50%" value = "<?=isset($EDU_BACKGROUND_VOCA['scholarship/academic_honors_recieved']) ? $EDU_BACKGROUND_VOCA['scholarship/academic_honors_recieved'] : '' ?>"/>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>COLLEGE</b>
        </div>
		
		<div class="panel-body">
		    <label class= "pnl-label">NAME OF SCHOOL</label>
		    <input class="form-control required" type = "text" name = "college_name_school" id = "college_name_school" style="width:50%" value = "<?=isset($EDU_BACKGROUND_COLL['name_of_school']) ? $EDU_BACKGROUND_COLL['name_of_school'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">DEGREE COURSE</label>
		    <input class="form-control required" type = "text" name = "college_degree" id = "college_degree" style="width:50%" value = "<?=isset($EDU_BACKGROUND_COLL['degree_course']) ? $EDU_BACKGROUND_COLL['degree_course'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">YEAR GRADUATED</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "college_year_graduated" id = "college_year_graduated" style="width:50%" value = "<?=isset($EDU_BACKGROUND_COLL['year_graduated']) ? $EDU_BACKGROUND_COLL['year_graduated'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">HIGHEST GRADE/ LEVEL/ UNITS EARNED</label>
		    <input class="form-control required" type = "text" name = "college_grades" id = "college_grades" style="width:50%" value = "<?=isset($EDU_BACKGROUND_COLL['highest_grade/level/units_earned']) ? $EDU_BACKGROUND_COLL['highest_grade/level/units_earned'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">INCLUSIVE DATE OF ATTENDANCE</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "college_attendance_from" id = "college_attendance_from" style="width:20%" value = "<?=isset($EDU_BACKGROUND_COLL['inclusive_dates_of_attendance_from']) ? $EDU_BACKGROUND_COLL['inclusive_dates_of_attendance_from'] : '' ?>"/> - 
		    <input class="form-control required datepicker_year int" type = "text" name = "college_attendance_to" id = "college_attendance_to" style="width:20%" value = "<?=isset($EDU_BACKGROUND_COLL['inclusive_dates_of_attendance_to']) ? $EDU_BACKGROUND_COLL['inclusive_dates_of_attendance_to'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
		    <input class="form-control required" type = "text" name = "college_scholar" id = "college_scholar" style="width:50%" value = "<?=isset($EDU_BACKGROUND_COLL['scholarship/academic_honors_recieved']) ? $EDU_BACKGROUND_COLL['scholarship/academic_honors_recieved'] : '' ?>"/>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
            <b>GRADUATES STUDIES</b>
        </div>
		
		<div class="panel-body">
		    <label class= "pnl-label">NAME OF SCHOOL</label>
		    <input class="form-control required" type = "text" name = "graduates_name_school" id = "graduates_name_school" style="width:50%" value = "<?=isset($EDU_BACKGROUND_GRAD['name_of_school']) ? $EDU_BACKGROUND_GRAD['name_of_school'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">DEGREE COURSE</label>
		    <input class="form-control required" type = "text" name = "graduates_degree" id = "graduates_degree" style="width:50%" value = "<?=isset($EDU_BACKGROUND_GRAD['degree_course']) ? $EDU_BACKGROUND_GRAD['degree_course'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">YEAR GRADUATED</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "graduates_year_graduated" id = "graduates_year_graduated" style="width:50%" value = "<?=isset($EDU_BACKGROUND_GRAD['year_graduated']) ? $EDU_BACKGROUND_GRAD['year_graduated'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">HIGHEST GRADE/ LEVEL/ UNITS EARNED</label>
		    <input class="form-control required" type = "text" name = "graduates_grades" id = "graduates_grades" style="width:50%" value = "<?=isset($EDU_BACKGROUND_GRAD['highest_grade/level/units_earned']) ? $EDU_BACKGROUND_GRAD['highest_grade/level/units_earned'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">INCLUSIVE DATE OF ATTENDANCE</label>
		    <input class="form-control required datepicker_year int" type = "text" name = "graduates_attendance_from" id = "graduates_attendance_from" style="width:20%" value = "<?=isset($EDU_BACKGROUND_GRAD['inclusive_dates_of_attendance_from']) ? $EDU_BACKGROUND_GRAD['inclusive_dates_of_attendance_from'] : '' ?>"/> - 
		    <input class="form-control required datepicker_year int" type = "text" name = "graduates_attendance_to" id = "graduates_attendance_to" style="width:20%" value = "<?=isset($EDU_BACKGROUND_GRAD['inclusive_dates_of_attendance_to']) ? $EDU_BACKGROUND_GRAD['inclusive_dates_of_attendance_to'] : '' ?>"/>
		</div>

		<div class="panel-body">
		    <label class= "pnl-label">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
		    <input class="form-control required" type = "text" name = "graduates_scholar" id = "graduates_scholar" style="width:50%" value = "<?=isset($EDU_BACKGROUND_GRAD['scholarship/academic_honors_recieved']) ? $EDU_BACKGROUND_GRAD['scholarship/academic_honors_recieved'] : '' ?>"/>
		</div>
	</div>

</form>
<input type = "button" id ="edu_save" name = "edu_save" value = "SAVE" class = "btn btn-warning" style="float: right;"/>