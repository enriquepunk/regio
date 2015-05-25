<header>
	<div class="logo">
		<img src="images/logo_login.png" alt="" />
	</div>
	<div class="welcome-user">
		<img src="images/user.jpg" alt=""/>
		<span><?php  echo $usu_nombre; ?></span>
		<p><?php  echo $usu_empresa; ?></p>
	</div>
	<div class="side-navigation">
		<ul>
			<li><a href="index.php" title=""><i class="icon-home"></i>Home</a></li>
			<li><a href="#" title=""><i class="icon-th"></i>Nuestro Grupo</a></li>
          	<li><a href="#" title=""><i class="icon-book"></i>Corporativo</a></li>
           <li><a href="#" title=""><i class="icon-legal"></i>Asesoría Legal</a>
          		<ul>
              		<li><a href="#" title=""><i class="icon-reorder"></i>Mis Tickets</a></li>
                 	<li><a href="#" title=""><i class="icon-edit"></i>Nuevos Tickets</a></li>	
                 	<li><a href="#" title=""><i class="icon-bar-chart"></i>Estadísticas</a></li>	  
              	</ul>
           </li>
           <li><a href="#" title=""><i class="icon-list-ol"></i>Reportes</a>
           	<ul>
            		<?php 
				  	if($usu_area=="Contabilidad")
					{
						echo '<li><a href="reportes.php" title=""><i class="icon-list-alt"></i>Reporte Semanal</a></li>';
					}
					?>
              		
                 	<li><a href="mis-reportes.php" title=""><i class="icon-reorder"></i>Mis Reportes</a></li>	
                  <?php 
				  	if($usu_area=="Legal")
					{
						echo '<li><a href="nuevo-reporte-2.php" title=""><i class="icon-edit"></i>Nuevo Reporte</a></li>';
					}
					else
					{
						echo '<li><a href="nuevo-reporte-1.php" title=""><i class="icon-edit"></i>Nuevo Reporte</a></li>';
					}
					?>
              	</ul>
           </li>
			<li><a href="login.php" title=""><i class="icon-share"></i>Cerrar Sesión</a></li>
		</ul>
	</div>
</header>