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
