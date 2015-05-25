<script src="js/vendor/mwe/classie.js"></script>
<script src="js/vendor/sidebar/mlpushmenu.js"></script>
<script>
var polyfilter_scriptpath = 'js/vendor/mwe/';

new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
    type : 'cover'
});

</script>
<script src="js/vendor/jquery/waypoints.min.js"></script>
<script src="js/vendor/jquery/waypoints-sticky.min.js"></script>
<script src="js/vendor/mwe/cssParser.js"></script>
<!-- This code must be installed within the body tags -->
<script type="text/javascript">
    var lhnAccountN = "1288-1";
    var lhnButtonN = -1;
    var lhnChatPosition = 'default';
    var lhnInviteEnabled = 1;
    var lhnDepartmentN = 0;
    var lhnWindowN = 21685;
    var lhnInviteN = 19430;
    var lhnCustom1 = encodeURIComponent('5809380'); //Custom1 feed value please use encodeURIComponent() function to encode your values
		var lhnCustom2 = encodeURIComponent('c38e8813adb8bfa226c060b19bbff8ef'); //Custom2 feed value please use encodeURIComponent() function to encode your values
		var lhnCustom3 = encodeURIComponent(''); //Custom3 feed value please use encodeURIComponent() function to encode your values
</script>

<script src="js/pardot.js"></script>
<script src="js/vendor/jquery/divscroll/jquery.smoothdivscroll-1.3-min.js"></script>
<script src="js/vendor/jquery/jquery.infieldlabel.min.js"></script>
<script>
  var  ua = navigator.userAgent.toLowerCase();
  var isChrome= ua.indexOf("chrome") > -1; //&& ua.indexOf("mobile");

  $(function() {
    "use strict";
    // Chat Bubble Cookie
    var chatbubble_status = getCookie("chatbubble_status");
    if (chatbubble_status == null && chatbubble_status != "") {
        chatbubble_show();
    }
  
    //WAYPOINT for SUBMENU
    var nav_container = $('.sticky-wrapper');
    var nav = $('.nav_constraint');
    var waypoint_offset = 100;
    if (nav.outerWidth() < 767) {
      nav.addClass('mobile');
      var top_spacing = -93;
      nav.waypoint('sticky');
    } else {
      var top_spacing = 0;
      nav.waypoint('sticky',{
        handler: function(event, direction) {
          if (direction == 'down') {
            nav.stop().css("top",nav.outerHeight()).animate({"top":top_spacing});
          } else {
            nav.stop().css("top",nav.outerHeight()-waypoint_offset).animate({"top":""});
          }
        },
        offset: function() {
          return -nav.outerHeight()-waypoint_offset;
        }
      });
    }
  
    
    
    // FOOTER MANIPULATION
    var footerObj = {
          opened : false,
          heightOpened : 230,
          heightClosed : 30,
          slide : -200,
          speed : 500,
          bottom : 0
        };
    // On click open footer
    $('#footer_menu').on('click', function () {
      if(footerObj.opened === false) {
        footerObj.opened = true;
        $('#footer_menu_holder').css('min-height', footerObj.heightOpened+'px');
        //note that jQuery assumes pixels if you omit units
        $(this).stop().animate({
          bottom : footerObj.bottom}, footerObj.speed);
      }
    });
    // If mouse removed, collapse footer
    $('#footer_menu').mouseleave( function () {
      if (footerObj.opened === true) {
        $(this).stop().animate({
          bottom : footerObj.slide }, footerObj.speed, function(){
            footerObj.opened = false;
            $('#footer_menu_holder').css('min-height', footerObj.heightClosed+'px');
          }
        );
      }
    });
    // Don't let footer collapse while mouse is hovered
    $('#footer_menu').mouseenter( function () {
      if (footerObj.opened === true) {
        $(this).stop().animate({
          bottom : 0 }, footerObj.speed);
      };
    });
    
    
    // HEADER DROPDOWN
   /* $(".drop a").click(function(e) {
      if($('.menu-open').not(this).is(':visible')) {
        $('.menu-open').not(this).next("div").toggle('fast');
        $('.menu-open').not(this).toggleClass("menu-open");
      }
      $(this).next("div.drop-level").toggle('fast');
      // $("div.blurry").toggle('fast', 'linear');
      $(this).toggleClass("menu-open");
    });
    $(this).find("div.drop-level").mouseup(function() {
      return false;
    });*/
		/*******/
	$("#menu1").mouseenter(function() {
  			$("#espacio1").show('fast');
			$("#menu1").addClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio2").hide('fast');
			$(".drop #espacio3").hide('fast');
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
		/*$("#primary_nav").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});*/
		$("#etc").mouseenter(function() {
  			
			$("#menu1").removeClass("menu-open");
			$("#menu2").removeClass("menu-open");
			$("#menu3").removeClass("menu-open");
			$("#espacio1").hide('fast');
			$("#espacio2").hide('fast');
			$("#espacio3").hide('fast');
    	});

    
    $(document).mouseup(function(e) {
      if($(e.target).parent(".drop").length===0) {
        $(".drop a").removeClass("menu-open");
        $(this).find("div.drop-level").hide('fast', 'linear');
        // $(this).find("div.blurry").hide('fast', 'linear');
      }
    });

  // hide all images putted by JS plugins
  $('img[width*="1"]').css('display','none');

  });

  //blurry
  $(window).scroll(function () {
    var y = $(this).scrollTop();
    var x = $(this).scrollLeft();
    $('.blurry').css('background-position', parseInt(-x) + 'px ' + parseInt(-y) + 'px');
  });
 
</script>


<script src="js/vendor/jquery/jquery.cookie.js"></script>
<script src="js/vendor/jquery/jquery.xdomainrequest.js"></script>

<script>
	
function weblog() {

	$.ajax({
		type: "POST",
		url: "https://a.barracuda.com",
		data: {
			s_id: 		"c38e8813adb8bfa226c060b19bbff8ef",
			r_con_id: 	"",
			fid: 		"",
			ft: 		"",
			v_id:		"5809380",
			ref_url: 	"",
			t_code: 	"",
			kw: 		"",
			gclid: 		""
		},
		//timeout: 100, // Ajax object wont listen to for response after timeout exceeds
		success:function(data)
		{
		    //alert(data + data.length);
		    //$( "#response" ).text( data );
		    		    
	        		},
		
		error: function (xhr, ajaxOptions, thrownError)
		{
		    //console.log(thrownError);
		    //alert(xhr.status);
		    //alert(ajaxOptions);
		    //alert(thrownError);
		}
	});
	
}
        
	weblog();
	//setInterval("weblog();", 400); 

</script>