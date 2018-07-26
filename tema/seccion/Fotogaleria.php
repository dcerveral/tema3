 
<div class="enigma_project_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><? echo $seccion['titulo']; ?></h3>		
					<h5><? echo $seccion['subtitulo']; ?></h5>	
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" >
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				
				<div class="col-lg-12">
				<p>	<? echo $seccion['descripcion']; ?></p>
					<p>
						&nbsp;
					</p>
				</div>
				<? 
 
 		

				
$consultas="SELECT * FROM contenido WHERE superior='".$seccion['id']."' AND subtipo='Foto' AND activo='1'  ; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
 ?>
												<div class="col-lg-3 col-md-2 col-sm-6  col-xs-6  pull-left "> 
					<div class="img-wrapper "  >
					
						<div class="enigma_home_portfolio_showcase"  >
						 <div style="width:100%;height:200px;overflow:hidden;display:table-cell;
 vertical-align:middle;text-align:center;background-color:#ffffff;border: 1px solid #eeeeee;padding:2px;">
							<img  style="width:100%;max-height:190px;" alt="<? echo $contenido['titulo']; ?>" src="/img/300_<? echo $contenido['foto']; ?>" onerror="this.src='/nofoto.png'">
							</div>
							
						</div>
					
						
					
										</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>
																
					<? }
				
				if ($a==0){include ('buscar.php'); }
				
				?>											
								
				
											</div>
			</div>
						
		</div>
 
	</div>
 
