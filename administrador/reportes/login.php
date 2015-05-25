<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistema Administrativo | Grupo Cancún</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="log-in-bg">
	<div class="log-in">
		<div class="top-sec-log">	
			<span class="user-log-in">
				<img src="images/logo_login.png" alt="" />
			</span>
			<h1>SISTEMA <span>Administrativo</span></h1>
		</div>
		<h4>&nbsp;</h4>
       <form name="form_articulo" id="validar_form" onsubmit="" method="post" action="lib/login.php">
			<div class="form">
				<span><i class="icon-user"></i></span>
				<input type="text" name="usu_user" id="usu_user" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="User name" />
			</div>
			<div class="form">
				<span><i class="icon-key"></i></span>
          		<input type="password" name="usu_pass" id="usu_pass" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="password" />
			</div>
			<div style="clear:both"></div>
			<div align="center" style="margin-top:10px;">
              <input type="submit" class="boton_aceptar2" value="Aceptar" class="log-in-btn"/>
       		</div>
       	</form>
	</div>
</body>
</html>