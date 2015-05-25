<?php 
	session_start();
	if (!isset($_SESSION["DB_admin"]))
	{
		header("Location: login.php"); 
		exit(); 
		session_destroy();
	}
	$usu_nombre=$_SESSION["usu_nombre"];
	$usu_empresa=$_SESSION["usu_empresa"];
	$usu_id=$_SESSION["usu_id"];
	$usu_area=$_SESSION["usu_area"];
	include("lib/conexion.php"); 
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Administrativo | Grupo Cancún</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,900,800,700,600,500,400,300,200' rel='stylesheet' type='text/css'><!-- Google Fonts -->

<!-- Styles -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" /><!-- Custom Scroll Bar -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->
<link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive Style -->

<!-- Script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- Jquery -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script><!-- Scroll Bar -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script><!-- Circle Chart -->
<script type="text/javascript"  src="js/bootstrap.js"></script><!-- Bootstrap -->
<script type="text/javascript"  src="js/script.js"></script><!-- Script -->
<script type="text/javascript" src="js/tcal.js"></script> <!-- Input Calendar -->
<script type="text/javascript" src="js/jquery.sparkline.min.js"></script> <!-- Sparkline -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script> <!-- Google Map -->
<script src="js/jquery-ui.custom.min.js"></script> <!-- Jquery UI Custom -->
<script src="js/jquery.easypiechart.min.js"></script> <!-- Easy Pie Chart -->
<script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script><!-- Sidebar Add Tag -->
<script src="js/chart-line-and-graph.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/header-line-chart.js"></script>
<script src="js/jquery.flot.min.js"></script><!-- Chart -->
<script src="js/flot-chart-header.js"></script>
<script src="js/flot-jquery-header.js"></script>
<script src="js/side-navigation-tag.js"></script>



<!-- Google Map-->
<script type='text/javascript'>
     google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
</script>

<!-- Easy Pie Chart -->
<script type="text/javascript">
	$(function() {
		//create instance
	   $(".visitor").easyPieChart({animate:2000});setTimeout(function(){$(".visitor").data("easyPieChart").update(50)},5000);setTimeout(function(){$(".visitor").data("easyPieChart").update(70)},10000);setTimeout(function(){$(".visitor").data("easyPieChart").update(30)},15000);setTimeout(function(){$(".visitor").data("easyPieChart").update(90)},19000);setTimeout(function(){$(".visitor").data("easyPieChart").update(40)},32000)

	   $(".returning-visitor").easyPieChart({animate:2000});setTimeout(function(){$(".returning-visitor").data("easyPieChart").update(78)},5000);setTimeout(function(){$(".returning-visitor").data("easyPieChart").update(67)},10000);setTimeout(function(){$(".returning-visitor").data("easyPieChart").update(84)},15000);setTimeout(function(){$(".returning-visitor").data("easyPieChart").update(23)},19000);setTimeout(function(){$(".returning-visitor").data("easyPieChart").update(40)},32000)
	});
</script>

<!-- Sparklines -->
<script type="text/javascript">
	$(function() {
	$("#new-orders").sparkline([4,5,6,7,6,5,4,3,2,2,3,4], {
    type: 'bar',
    height: '40px',
	barSpacing:3,
    barWidth: 6,
    barColor: '#ff4646',
    negBarColor: '#D6A838'});
    });
	
	$(function() {
	$("#my-balance").sparkline([4,5,6,7,6,5,4,3,2,2,3,4], {
    type: 'bar',
    height: '40px',
	barSpacing:3,
    barWidth: 6,
    barColor: '#21b95e',
    negBarColor: '#27A9E3'});
    });
	
	$(function() {
	$("#large-bar-chart").sparkline([4,5,6,7,6,5,4,5,6,7,8,9,10,9,8,7,6,5,4,5,6,7,8,9,10,9,8], {
    type: 'bar',
    height: '300px',
	barSpacing:3,
    barWidth: 15,
    barColor: '#656260',
    negBarColor: '#35AA47'});
    });
</script>
</head>
<body>
	<div class="wrapper">
		<?php include("componentes/menu.php"); ?>
		<section class="main-section">
			<?php include("componentes/menu-responsivo.php"); ?>
			<div class="container">
				<div class="row">
					<div class="main-bg">
						<div class="heading-buttons-sec">
							<h1>Mis Reportes</h1>
							<p>Bienvenido(a) <?php  echo $usu_nombre; ?></p>
						</div>
						<div class="body-sec">
							<div class="col-md-12">
								<div class="widget-body">
									
                                   
			
			
			
			<div class="col-md-9">
				<div class="widget-body">
					<div class="widget-heading green">
						<i class="icon-signal pull-left"></i><h3 class="pull-left">Line Chart & Bar Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop2"> <b class="caret"></b></a>
							<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div id="graph-wrapper">
							<div class="graph-info">
								<a href="" class="visitors"><span class="green"></span>Visitors</a>
								<a href="" class="returning"><span class="brown"></span>Returning Visitors</a>

								<a href="#" id="bars"><span><i class="icon-bar-chart"></i></span></a>
								<a href="#" id="lines" class="active"><span><i class="icon-code-fork"></i></span></a>
							</div>
							<div class="graph-container">
								<div id="graph-lines"></div>
								<div id="graph-bars"></div>
							</div>
							<div class="graph-details">
								<ul>
									<li><strong>$5,450<span class="green">+5.00%</span></strong><p>Average of $450.35 Per Day</p></li>
									<li><strong>1,120<span class="blue">+5.00%</span></strong><p>Total Visitors : 2,58,256,00</p></li>
									<li>					
										<form action="#">
											<label>From</label>
											<!-- add class="tcal" to your input field -->
											<div><input type="text" name="date" class="tcal" value="" /></div>
										</form>
										
										<form action="#">
											<label>To</label>
											<!-- add class="tcal" to your input field -->
											<div><input type="text" name="date" class="tcal" value="" /></div>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-3">
				<div class="widget-body">
					<div class="widget-heading blue">
						<i class="icon-time pull-left"></i><h3 class="pull-left">Circle Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop3"> <b class="caret"></b></a>
							<ul aria-labelledby="drop3" role="menu" class="dropdown-menu" id="menu3">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div class="circle-sta">
							<div class="visitor chart-bg" data-percent="73">
								<span></span>
							</div>
							<p>Lorem ipsum dolor sit amet, co
							ns ectetuer.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="widget-body">
					<div class="widget-heading red">
						<i class="icon-time pull-left"></i><h3 class="pull-left">Circle Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop4"> <b class="caret"></b></a>
							<ul aria-labelledby="drop4" role="menu" class="dropdown-menu" id="menu4">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div class="circle-sta">
							<div class="returning-visitor chart-bg" data-percent="73">
								<span></span>
							</div>
							<p>Lorem ipsum dolor sit amet, co
							ns ectetuer.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="widget-body">
					<div class="widget-heading purple">
						<i class="icon-eye-open pull-left"></i><h3 class="pull-left">Live Updating Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop5"> <b class="caret"></b></a>
							<ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu5">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec no-padding">
						<div id="flot-placeholder"></div>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-6">
				<div class="widget-body">
					<div class="widget-heading orange">
						<i class="icon-globe pull-left"></i><h3 class="pull-left">Map Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop6"> <b class="caret"></b></a>
							<ul aria-labelledby="drop6" role="menu" class="dropdown-menu" id="menu6">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div id="chart_div" style="width: 100%; height: 300px;"></div>	
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="widget-body">
					<div class="widget-heading gray">
						<i class="icon-signal pull-left"></i><h3 class="pull-left">Bar Chart</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop7"> <b class="caret"></b></a>
							<ul aria-labelledby="drop7" role="menu" class="dropdown-menu" id="menu7">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<span id="large-bar-chart" class="sparkline">4,5,6,7,6,5,4,3,2,2,4</span>
					</div>
				</div>
			</div>

									
								</div>
							</div>	
           			</div>
                 	</div>
           	</div>
       		</div>
		</section>
	</div>
</body>
</html>