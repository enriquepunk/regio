<script src="js/vendor/jquery/waypoints.min.js"></script>
<script src="js/vendor/jquery/waypoints-sticky.min.js"></script>
<script src="js/pardot.js"></script>
<script src="js/vendor/jquery/divscroll/jquery.smoothdivscroll-1.3-min.js"></script>
<script src="js/vendor/jquery/jquery.infieldlabel.min.js"></script>
<script>
	var  ua = navigator.userAgent.toLowerCase();
	var isChrome= ua.indexOf("chrome") > -1;
	$(function() 
	{
    	"use strict";
    	var chatbubble_status = getCookie("chatbubble_status");
    	(chatbubble_status === 'off') ? chatbubble_status : chatbubble_show();
  		var nav_container = $('.sticky-wrapper');
    	var nav = $('.nav_constraint');
    	var waypoint_offset = 100;
    	if (nav.outerWidth() < 767) 
		{
      		nav.addClass('mobile');
      		var top_spacing = -93;
      		nav.waypoint('sticky');
    	} 
		else 
		{
      		var top_spacing = 0;
      		nav.waypoint('sticky',{
        		handler: function(event, direction) {
          			if (direction == 'down') {
            			nav.stop().css("top",nav.outerHeight()).animate({"top":top_spacing});
          			} 
					else {
            			nav.stop().css("top",nav.outerHeight()-waypoint_offset).animate({"top":""});
          			}
        		},
        		offset: function() {
          		return -nav.outerHeight()-waypoint_offset;
        	}	
     		});
    	}
		$("#menu1").mouseenter(function() 
		{
			$("#menu1").addClass("menu-open");
			$("#espacio1").show('fast');	
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});
		$("#espacio1").mouseleave(function(e) {
  			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
			$("#menu1").removeClass("menu-open");
    	});
		$("#menu2").mouseenter(function() {
  			$("#espacio2").show('fast');
			$("#menu2").addClass("menu-open");
			$("#menu1").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio3").hide('fast');
    	});
		$("#espacio2").mouseleave(function(e) {
  			$("#espacio2").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
			$("#menu2").removeClass("menu-open");
    	});
		$("#menu3").mouseenter(function() {
  			$("#espacio3").show('fast');
			$("#menu3").addClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu1").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
    	});
		$("#espacio3").mouseleave(function(e) {
  			$("#espacio3").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
			$("#menu3").removeClass("menu-open");
    	});
		$("#menu4").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});
		$("#menu5").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});
		$("#menu6").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});
		$("#etc").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});
	});
</script>
</script>
<script>
		$(function() 
		{
			$(document).mouseup(function(e) {
  				if($(e.target).parent(".drop").length===0) {
      				$(".drop a").removeClass("menu-open");
       	 			$(this).find("div.drop-level").hide('fast', 'linear');
      			}
 			});
	
  			$('img[width*="1"]').css('display','none');});
  			
			$(window).scroll(function () {
    			var y = $(this).scrollTop();
    			var x = $(this).scrollLeft();
    			$('.blurry').css('background-position', parseInt(-x) + 'px ' + parseInt(-y) + 'px');
  			});
	    
			/*$(function(){
       	 		var obj = $(document);          
        		var obj_top = obj.scrollTop()   
        		obj.scroll(function(){
            	var obj_act_top = $(this).scrollTop();  
            	if(obj_act_top > obj_top){
              		$("#menuprincipal").hide();
					$(".slides").css( "margin-top","-75px" );
					$(".slidewrap.lg").css( "height","605px" );
            	}
				else{
              		$("#menuprincipal").show();
					$(".slides").css( "margin-top","0px" );
					$(".slidewrap.lg").css( "height","680px" );
            	}
           	obj_top = obj_act_top;                
        	});*/
    	});
</script>
<script>
	"use srtict";
  	$.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
  	$(document).ready(function() {
    	var windowHeight = $(window).height();
    	resize_benefits_section(windowHeight);
  	});
  	$( window ).resize(function() {
    	var windowHeight = $(window).height();
    	resize_benefits_section(windowHeight);
  	});
  	if($.browser.device) {} else {
    	var tab_open = 0;
    	var form_open = 0;
    	$('.product_action').waypoint(function(direction) {
      		if(direction === "down" && tab_open === 0 && form_open === 0) {
        		$( "#LEAD_FORM" ).animate({
          			bottom: "+=130"
        		}, 1000, function() {
          			tab_open = 1;
        	});
      	} 
      	if(direction === "up" && tab_open === 1 && form_open === 0) {
        $( "#LEAD_FORM" ).animate({
          bottom: "-=130"
        }, 1000, function() {
          tab_open = 0;
        });
      }
    });
    $('#RESOURCES').waypoint(function(direction) {
  		if(direction === "down") {
       		$( "#LEAD_FORM" ).toggleClass("clearfix");
      	} 
      	if(direction === "up") {
        	$( "#LEAD_FORM" ).toggleClass("clearfix");
      	} 
    }, {offset: '70%'});
    function popupEval(event) {
    	event.preventDefault();
      	if(tab_open === 0) {
       		$( "#LEAD_FORM" ).animate({
          		bottom: "+=535"
        	}, 1000, function() {
          		form_open = 1;
          		tab_open = 1;
          		$(this).toggleClass("up");
        	});
      	} 
      	else if(tab_open === 1 && form_open === 0) {
      		$( "#LEAD_FORM" ).animate({
          		bottom: "+=405"
        	}, 1000, function() {
          		form_open = 1;
          		$(this).toggleClass("up");
        	});
      	} 
		else if(form_open === 1) {
       		$( "#LEAD_FORM" ).animate({
          		bottom: "-=405"
        	}, 1000, function() {
          		form_open = 0;
          		tab_open = 1;
          		$(this).toggleClass("up");
        	});
      	} 
    };
    $('.tab_open').click(popupEval);
    $('.scroller').scroll(function(e) {
   		if(form_open === 1) {
       		form_open = 0;
        	tab_open = 1;
        	$( "#LEAD_FORM" ).animate({
          		bottom: "-=405"
        	}, 1000, function() {
          		$(this).toggleClass("up");
        	});
     	}});
  	}
  	$('.external_link').on('click', function() {
   		ga('send', 'event', 'link', 'click', 'external-link');
  	}); 
</script>