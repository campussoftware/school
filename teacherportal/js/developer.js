// JavaScript Document
var width = $( document ).width();
var i = 0;
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	if(width <= 768){
		themesettings();
	}
	$(window).resize(function() {
		if(width <= 768){			
			themesettings();
		}
	});
	$(document.body).on("click",".nav-toggle", function (e) {
		if(width > 768){
		 if(i++ % 2 == 0){
             setIconMenu()
		  }else{
			 resetMenu();
		  }
		}else{
		   if(i++ % 2 == 0){
             setIconMenu()
		  }else{
			 themesettings()
		  }
		}
	});
});

function themesettings(){//theam settings for responsive
	$('.sideNavigation').css('margin-left','-300px');
	$('.footer_navigation').hide();
	$('.top_header').css('margin-left','0px');
	$('.warper').css('margin-left','0px');
}

function setIconMenu(){//show only icon menu
	$('.nav_title span').hide();
	$('.menu_title').hide();
	$('.sideNavigation').css({'width':'50px','margin-left':'0px'});
	$('.top_header').css('margin-left','50px');
	$('.footer_navigation').hide();
	$('.dropdown-icon').hide();
	$('.warper').css('margin-left','50px');
}

function resetMenu(){//reset icon menu
	$('.nav_title span').show();
	$('.menu_title').show();
	$('.sideNavigation').css('width','230px');
	$('.top_header').css('margin-left','230px');
	$('.footer_navigation').show();
	$('.dropdown-icon').show();
	$('.warper').css('margin-left','230px');
}


// JavaScript Document
var rootUrl = $('#doc_root').val();

$(document).ready(function () {
    $("#teacherlogin").click(function () {
        validateLogin();
    });
    $("#admissionno").change(function () {
        validateLogin();
    });
    function validateLogin()
    {
        if ($("#staffid").val() == "")
        {
            $("#staffPassword").val("");
            $("#staffPassword").hide("hide");
            $("#error-staffid").html("Please Enter Admission No");
            $("#error-staffid").show("fast").fadeOut(1500);
            return false;
        }
        $.ajax({
            url: "process.php",
            data: "staffid=" + $("#staffid").val() + "&password=" + $("#staffPassword").val() + "&node=validateteacher",
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