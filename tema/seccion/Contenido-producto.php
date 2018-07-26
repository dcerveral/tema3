<div class="enigma_project_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title"><p>
          &nbsp;<br /></p>
          </p>
					<h3><? echo $seccion['titulo']; ?></h3>		<h4><? echo $seccion['subtitulo']; ?></h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" >
			<div   class="enima_photo_gallery">
				<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden LIMIT  ".$seccion['array3']."; ";
			 
 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		$b++;
 ?>
												<div class="col-lg-3 col-md-6 col-sm-6  col-xs-12 pull-left "> 
					<div class="img-wrapper "   >
					
						<div class="enigma_home_portfolio_showcase"  style="width:100%"  >
						 <div style="background:  url(/img/300_<? echo $contenido['foto']; ?>);
    background-repeat: no-repeat;
    background-size:  cover; width:100%;">
							<img  style="width:100%;max-height:200px;" alt="<? echo $contenido['titulo']; ?>" src="/img/300_<? echo $contenido['foto']; ?>" onerror="this.src='/nofoto.png'">
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
						
						<div style="text-align: justify; padding-left:15px;padding-right:15px;-webkit-hyphens: auto;
-moz-hyphens: auto;
hyphens: auto;">	<? echo $contenido['description']; ?></div>
					</div>
										</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>
																
					<?   }
				
				if ($a==0){include ('buscar.php'); }
				
				?>											
								
				
											</div>
			</div>
						
		</div>
 
	</div>
 