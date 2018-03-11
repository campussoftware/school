// JavaScript Document
var rootUrl = $('#doc_root').val();

$(document).ready(function () {
    $("#loginsubmit").click(function () {
        validateLogin();
    });
    $("#admissionno").change(function () {
        validateLogin();
    });
    function validateLogin()
    {
        if ($("#admissionno").val() == "")
        {
            $("#inputPassword").val("");
            $("#inputPassword").hide("hide");
            $("#error-admissionno").html("Please Enter Admission No");
            $("#error-admissionno").show("fast").fadeOut(1500);
            return false;
        }
        $.ajax({
            url: "process.php",
            data: "admissionno=" + $("#admissionno").val() + "&password=" + $("#inputPassword").val() + "&node=validateadmision",
            success: function (result)
            {
                console.log(result);
                var obj = $.parseJSON(result)
                if (obj.status == 'success')
                {

                    if (obj.message == 'loginsuccess')
                    {
                        var urldata = "profile.php";
                         window.location.assign(urldata);
                    }
                    else
                    {

                        $("#profile-img").attr("src", obj.image);
                        $("#inputPassword").show().fadeIn(1000);
                    }
                }
                else
                {
                    $("#inputPassword").val("");
                    $("#profile-img").attr("src", "images/login_default_img.png");

                    $("#error-admissionno").html("Enter Valid Admission No ");
                    $("#error-admissionno").show("fast").fadeOut(1500);
                    $("#inputPassword").hide().fadeOut(500);
                    return false;
                }

            }
        });
    }
});

// JavaScript Document

$(document).ready(function(){
    $('#FormStudentEditProfile input').focus(function (e) {
        var id = $(this).attr('id');
        $('#error_' + id).html('');
        $('#error_' + id).hide();
    });
    $('#FormEditParentInfo input').focus(function (e) {
        var id = $(this).attr('id');
        $('#error_' + id).html('');
        $('#error_' + id).hide();
    });
    $('#FormpasswordUpdate input').focus(function (e) {
        var id = $(this).attr('id');
        $('#error_' + id).html('');
        $('#error_' + id).hide();
    });
    $("#btn_stu_profile").click(function () {
        $('#FormStudentEditProfile .errors').show().html("");
        var studentId = $('#stu_id').val(),
            firstname = $('#edit_first_name').val(),
            lastname = $('#edit_last_name').val(),
            email = $('#edit_email').val(),
            phone = $('#edit_mobile').val();
        if (firstname == "" && lastname == "" && email == "" && phone == "")
        {
            $('.errors').show().html('This fields are required');
            return false;
        }       
        if (firstname == "")
        {
            $('#error_edit_first_name').html('This field is required');
            return false;
        }
       
        if (lastname == "")
        {
            $('#error_edit_last_name').html('This field is required');
            return false;
        }
       
        if (email == "")
        {
            $('#error_edit_email').html('This field is required');
            return false;
        }
        if (phone == "")
        {
            $('#error_edit_mobile').html('This field is required');
            return false;
        }   
       
         $.ajax({
            url: "process.php",
            data : "&node=studentInfo&studentId=" + studentId +"&firstname=" + firstname + "&lastname=" + lastname+ "&email=" + email + "&phone=" + phone, 
            success: function (result)
            {              
               var obj = $.parseJSON(result)
               if (obj.status == 'success')
                {
                    alert(obj.message);
                    location.reload();                   
                }
                else{
                    alert("Try Again");
                }
            }
        });
    });
    
    
     $("#btn_parent_update").click(function () {
         $('#FormEditParentInfo .errors').show().html("");
        var studentId = $('#stu_id').val(),
            father_name = $('#father_name').val(),
            mother_name = $('#mother_name').val(),
            pre_addess = $('#pre_addess').val();
        if (father_name == "" && mother_name == "" && pre_addess == "")
        {
            $('.errors').show().html('This fields are required');
            return false;
        }         
        
         $.ajax({
            url: "process.php",
            data : "&node=parentInfo&studentId=" + studentId +"&father_name=" + father_name + "&mother_name=" + mother_name+ "&pre_addess=" + pre_addess , 
            success: function (result)
            {
                console.log(result);
               var obj = $.parseJSON(result)
               if (obj.status == 'success')
                {
                    alert(obj.message);
                    location.reload();                   
                }
                else{
                    alert("Try Again");
                }
            }
        });
    });
    
     $("#btn_stu_update_password").click(function () {
         $('#FormpasswordUpdate .errors').show().html("");
        var studentId = $('#stu_id').val(),
            cur_password = $('#stu_cur_password').val(),
            new_password = $('#stu_new_password').val(),
            retype_password = $('#stu_retype_password').val();            
        if (cur_password == "" && new_password == "" && retype_password == "")
        {
            $('.errors').show().html('This fields are required');
            return false;
        } 
         if (cur_password == "")
        {
            $('#error_stu_cur_password').html('This field is required');
            return false();
        }
        if (new_password == "")
        {
            $('#error_stu_new_password').html('This field is required');
            return false();
        }
        if (retype_password == "")
        {
            $('#error_stu_retype_password').html('This field is required');
            return false();
        }
        if (new_password != retype_password)
        {
            $('#error_stu_new_password').html('Password Match Not Found');
            $('#error_stu_retype_password').html('Password Match Not Found');
            return false();
        }
        
         $.ajax({
            url: "process.php",
            data : "&node=passwordUpdate&studentId=" + studentId +"&cur_password=" + cur_password +"&new_password=" + new_password + "&retype_password=" + retype_password , 
            success: function (result)
            {
                console.log(result);
               var obj = $.parseJSON(result)
               if (obj.status == 'success')
                {
                    alert(obj.message);
                    location.reload();                   
                }
                else{
                    alert("Try Again");
                }
            }
        });
    });
    
    $("#btn_leave_request").click(function () {
        var studentId = $('#stu_id').val(),
            acd_year=$('#acd_year').val(),
            req_subject = $('#req_subject').val(),
            req_message = $('#req_message').val(),
            req_Leave_date = $('#req_Leave_date').val(),
            req_end_date = $('#req_end_date').val();
        if (req_subject == "" && req_message == "" && req_Leave_date == "" && req_end_date=="")
        {
            $('.errors').show().html('This fields are required');
            return false();
        } 
        if (req_subject == "")
        {
            $('#error_req_subject').html('This field is required');
            return false();
        }
        if (req_message == "")
        {
            $('#error_req_message').html('This field is required');
            return false();
        }
        if (req_Leave_date == "")
        {
            $('#error_req_Leave_date').html('This field is required');
            return false();
        }
         $.ajax({
            url: "process.php",
            data : "&node=leaveRequest&studentId=" + studentId +"&acd_year=" + acd_year +"&req_subject=" + req_subject +"&req_message=" + req_message + "&req_Leave_date=" + req_Leave_date + "&req_end_date=" + req_end_date , 
            success: function (result)
            {
               var obj = $.parseJSON(result)
               if (obj.status == 'success')
                {
                    alert(obj.message);
                    location.reload();                   
                }
                else{
                    alert("Try Again");
                }
            }
        });
    });
    
    
    
});

function setsheduleId(sheduleId){
     $.ajax({
            url: "process.php",
            data : "&node=examScheduleData&scheduleId=" + sheduleId , 
            success: function (result)
            {               
                try{
                    var json = $.parseJSON(result);
                    $("#exam_schedule").empty();
                    if(json["status"]=="success"){
                        var dataoptions = "";
                        $.each(json["data"], function(key, value) {
                            dataoptions = dataoptions + "<tr><td data-title='Subject Type'>"+value.subject_type+"</td><td data-title='Subject'>"+value.subject_name+"</td><td data-title='Exam Date'>"+value.exam_date+"</td><td data-title='Start Time'>"+value.start_time+"</td><td data-title='End Time'>"+value.end_time+"</td><td data-title='Max Marks'>"+value.max_marks+"</td></tr>";
                        });
                    }else{
                        dataoptions = '<tr><td colspan="6" class="text-center">Exam Schedule Not Found</td></tr>'                        
                    }
                    $("#exam_schedule").html(dataoptions);
                     $("#exam_schedule_modal").modal("show");
                }catch(ex){}
               
            }
        });
}
function setnotificationId(noticeId){
     $.ajax({
            url: "process.php",
            data : "&node=notificationData&noticeId=" + noticeId , 
            success: function (result)
            {     
                try{    
                    console.log(result);
                    var json = $.parseJSON(result);
                    $("#notification_details").empty();
                    if(json["status"]=="success"){
                        
                        var dataoptions = "";
                            dataoptions = dataoptions + "<h1>"+json["data"].title+"</h1><p>"+json["data"].description+"</p>";
                    }else{
                        dataoptions = ' <div class="text-center">Notification Not Found </div>'                        
                    }
                    $("#notification_details").html(dataoptions);
                    $("#notification_modal").modal("show");
                }catch(ex){}
               
            }
        });
}