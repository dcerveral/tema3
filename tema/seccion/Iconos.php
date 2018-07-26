<!-- service section -->
<div class="enigma_service" style="margin-top:60px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3>
						<? echo $seccion['titulo']; ?>
					</h3>
					</div>
					
			
			</div>
			
			
			
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<? echo $seccion['descripcion']; ?>
			</div>
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row isotope" id="isotope-service-container">

	<?  $consulta="SELECT * FROM contenido WHERE subtipo='Icono y Texto' AND activo='1' AND superior='".$seccion['id']."' ORDER BY orden";
		$sqlicono=mysqli_query($conex,$consulta);
		 
		while ($icono=mysqli_fetch_array($sqlicono)){
		
		 
		?>


			<div class=" col-md-<? echo $icono['col']; ?> service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa">&#xf<? echo dechex ($icono['array']); ?>;</i></div>
					<div class="enigma_service_detail media-body">
						<h3> <? echo $icono['titulo']; ?> </h3>
					 
							<p><? echo $icono['subtitulo']; ?></p>
					 
					</div>
				</div>
			</div>

<? } ?>

		</div>
	</div>

	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h4><? echo $seccion['subtitulo']; ?></h4>
					
				
			</div>
		</div>
	</div>
	
</div>
<!-- /Service section -->