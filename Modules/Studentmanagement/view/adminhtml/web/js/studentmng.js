define(['jquery','bootstrap'], function ($) {
    window.hosturl = $("#sitehost").val();
    return{
        sendSms: function () { 
            var posturl = window.hosturl + 'student_admission/sendsms';            
            $.ajax({
                url: posturl,
                dataType: "html",
                type: "POST",
                data:"&project=project",
                success: function (html) {
                    $('.project-forms').empty();
                    $('.project-forms').html(html);
                    $('#stu-management').modal('show');
                    
                }
            });
        },  
    }
});


