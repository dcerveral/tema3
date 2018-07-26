<div class="container">


	<div class="col-lg-4 col-xs-12">


		<div class="  box-group" id="accordion">

		<?  
			//AÑO Y MES POR DEFECTO
			if (!$_GET['p']){$_GET['p']=date('Y');}
			if (!$_GET['v']){$_GET['v']=date('m');}
			 
			for ($a=date('Y');$a>=$conf['anyo']; $a--){   ?>
			
			<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
			<div class="box panel ">
				<div class="box-header with-border">
					<h4 class="box-title">
						<a data-toggle="collapse" style="color:black" data-parent="#accordion" href="#collapse<? echo $a; ?>" >
                       <? echo $a; ?>
                      </a>
					</h4>
				</div>
				<div id="collapse<? echo $a; ?>" class="panel-collapse collapse <? if ($a==$_GET['p']){echo "in";} ?>">
					<div class="box-body">
				
						<ul>
							
							
							<? 
						//ARRAY MESES																		 
						$meses= array ('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');					
						//Recorro los meses
						for ($mes=12;$mes>=1; $mes--){
							
						//Busco el total de articulos publicados este mes
							
							$consulta="SELECT count(id) FROM contenido WHERE tipo='entrada' AND activo='1' AND (fecha>='".$a."-".$mes."-01' AND fecha<='".$a."-".$mes."-31')";
						
							
							$noticias = mysqli_query($conex, $consulta);
							$total = mysqli_fetch_array($noticias);
							
							//Mostramos mes solo si hay archivo
							if ($total[0]>0) { 
							?>
							<li  ><a href="/<? echo $campo['slug']; ?>/<? echo $a; ?>/<? echo $mes; ?>"><? echo $meses[$mes]; ?> (<? echo $total[0]; ?>)</a></li>
							
							
						<?
							}
						} ?>
						</ul>
						
					</div>
				</div>
			</div>

			<? } ?>

		</div>




	</div>

	<div class="col-lg-8 col-xs-12">
		 
			<div class="box ">
				<div class="box-header with-border">
					<h4 class="box-title">
						 
                <? echo $_GET['p']; ?> <? print ($meses[intval($_GET['v'])]); ?>
                  
					</h4>
				</div>
		 
					<div class="box-body"> 
		<? 	$consulta="SELECT * FROM contenido WHERE tipo='entrada' AND activo='1' AND (fecha>='".$_GET['p']."-".$_GET['v']."-01' AND fecha<='".$_GET['p']."-".$_GET['v']."-31') order by fecha DESC";
						
					 
					 
				$sql=mysqli_query($conex,$consulta);
						$x=0;
					while ($not=mysqli_fetch_array($sql)){ $x++; ?>
					 
						<div class="col-xs-2 ">
							<span class="hidden-xs hidden-sm">Día</span>  <? echo date("d", strtotime($not['fecha']));   ?>
						</div>
							<div class="col-xs-10">
							<a href="/<? echo $not['slug']; ?>">	<? echo $not['titulo']; ?></a>
						</div>
						<div style="clear:both;width:100%; border-bottom: 1px solid #eeeeee;">
							
						</div>
					<? } if ($x==0) {echo "No hay publicaciones en este mes ";} ?>	
						
					</div>
			 
		</div>
		
		
		
	</div>
</div>