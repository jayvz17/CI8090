<script type="text/javascript">
    function checkInput(form) {
        // alert(""+form+"");
        var ctr   = 0;
        var _requiredFields = '<b>The following required fields must be completed:</b> <br>';

        global_error = false;
        
        $( " "+form+" .required").each(function() {
            // alert($(this).prev("label").html());
            var value = this.value;
            var id    = $(this).attr('id');
            if ((value == '' || value === undefined || value == 'null') && id.indexOf('s2id_') == -1) {
                ctr++;
                if (ctr == 1) global_error = true;
                if (id.indexOf('AmountTo') > -1) {
                    _requiredFields += $(this).prev("label").html() + '<br>';
                } 
                else {
                    if ($(this).prev("label").html() != undefined )
                        _requiredFields += $(this).prev("label").html() + '<br>';
                    else
                        _requiredFields += $(this).prev().prev("label").html() + '<br>';
                } 
            }
        });

        if (ctr > 0) {
            displayError(false, _requiredFields);
        }
    }

    function displayError(status, message) {
        $("#err_msg_div").remove();
        // $("#star").append(error_message);
        
        if (status) {
            $("#err_msg").addClass("alert alert-success");
        } else {
            $("#err_msg").addClass("alert alert-danger");
        }

        $("#err_msg_div").fadeIn("slow").delay(180000).fadeOut("slow");
        $("#err_msg").html(message.toUpperCase());
        $("html, body").animate({
            scrollTop: 0
        }, 100);
    }

    $(".alphabet").keydown(function (evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which);

        if ((charCode >= 65 && charCode <= 90)          // UPPERCASE LETTER
            // || (charCode >= 48 && charCode <= 57)       // NUMBERS
            || (charCode >= 97  && charCode <= 122)     // LOWERCASE LETTER
            || (charCode == 8)                          // BACKSPACE
            || (charCode == 32)                         // SPACE
            || (charCode == 9)                          // HORIZONTAL TAB
            || (charCode >= 37 && charCode <= 40)    // ARROW KEY
            || charCode == 0 )                          // Null char
        {
            return true;
        }
        return false;
    });

    $(".int").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 110, 190]) !== -1 ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

function checkInput_table(table) {

    var ctr   = 0;
    var _requiredFields = 'The following required fields must be completed: \n';

    $( " "+table+" .required").each(function() {
        // alert($(this).prev("label").html());
        var value = this.value;
        var id    = $(this).attr('id');
        // alert($(this).closest('td').prev('td').text());
        // alert(id);
        if ((value == '' || value === undefined || value == 'null') && id.indexOf('s2id_') == -1) {
            ctr++;
            if (ctr == 1) global_error = true;
            if (id.indexOf('AmountTo') > -1) {
                _requiredFields += $(this).prev("td").html() + '\n';
            } 
            else {
                if ($(this).prev("td").html() != undefined )
                    _requiredFields += $(this).prev("td").html() + '\n';
                else
                    _requiredFields += $(this).closest('td').prev('td').text() + '\n';
            } 
        }
    });

    if (ctr > 0) {
        alert(_requiredFields);
    } 

    return ctr;
    
}

    function attach_cam() {
        $("#my_camera").css("width", "320px").css("height", "240px");
        Webcam.set({
            /* live preview size */
            width: 320,
            height: 240,

            /* device capture */
            dest_width: 320,
            dest_height: 240,

            /* final cropped size */
            crop_width: 240,
            crop_height: 240,

            /* format and quality */
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.setSWFLocation("<?=HOST_URL?>CI/assets/webcam/webcam.swf");
        Webcam.attach("#my_camera");    
    }
    
    function take_snapshot() {
        var enroll_product = $("#enroll").text();
        Webcam.snap( function(data_uri) {
            document.getElementById("my_camera").innerHTML = '<img src="'+data_uri+'"/>';
            // if (enroll_product.indexOf("PK") > -1) {
            //     <?php if (strpos($_SERVER['REQUEST_URI'], '/enrollment/')) :?>
            //         var file_name = <?=date("YmdHis")?>+"_"+$("#lname").val().toUpperCase().split(" ").join("_");
            //     <?php elseif (strpos($_SERVER['REQUEST_URI'], '/panalokard/')) :?>
            //         var file_name = $("#cn").val();
            //     <?php endif;?>
            // } else {
            //     var file_name = $("#cn").val();
            // }
            var file_name = $("#_EMP_NO").val();
            // if (!file_exists("<?=PICTURES_PATH?>"+ $("#_EMP_NO").val() )) {
            //     mkdir(  );
            // }

            Webcam.upload( data_uri, "<?=base_url()?>uploadify/id_picture/"+file_name, function(code, text) {
                /* upload complete */
                /* 'code' will be the HTTP response code from the server, e.g. 200 */
                /* 'text' will be the raw response content */
                $("#new_pic").val(file_name+".jpg|"+text);
                $("#modalBody").html("ID PICTURE UPLOADING: " + text.toUpperCase());
                $("#globalModalBut").trigger("click");
            });
        });
    }

    function exit_cam() {
        $("#my_camera").css("width", "0px").css("height", "0px");
        Webcam.reset();
        remove_preview();
    }

    function remove_preview() {
        $("#my_result").empty();
        $("#new_pic").val("");
    }
    
</script>