<div class="enigma_project_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><? echo $seccion['titulo']; ?></h3>		<h4><? echo $seccion['subtitulo']; ?></h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" >
			<div  class="enima_photo_gallery">
				<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden LIMIT  ".$seccion['array3']."; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
 ?>
												<div class="col-lg-3 col-md-2 col-sm-6 pull-left "> 
					<div class="img-wrapper "  >
					
						<div class="enigma_home_portfolio_showcase"  >
						 <div style="width:100%;height:200px;overflow:hidden;display:table-cell;
 vertical-align:middle;text-align:center;background-color:#ffffff;border: 1px solid #eeeeee;padding:2px;">
							<img  style="width:100%;max-height:190px;" alt="<? echo $contenido['titulo']; ?>" src="/img/300_<? echo $contenido['foto']; ?>" onerror="this.src='/nofoto.png'">
							</div>
							<div class="enigma_home_portfolio_showcase_overlay">
								<div class="enigma_home_portfolio_showcase_overlay_inner ">
									<div class="enigma_home_portfolio_showcase_icons">
										<a  href="/<? echo $contenido['slug']; ?>"><i class="fa fa-link"></i></a>
										
									</div>
								</div>
							</div>
						</div>
					
						
					<div class="enigma_home_portfolio_caption" style="border-right:0px;border-left:0px;">
					<h3  class="truncate"><a  href="<? echo $contenido['slug']; ?>"> <? echo $contenido['titulo']; ?> </a></h3>
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
 