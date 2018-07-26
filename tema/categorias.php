 

<div class="enigma_project_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><? echo $campo['titulo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?></h3>		.
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" >
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<? 
$p=$_GET['p'];
if (!$p){$p=1;}
$items=20;
$limit=($p * $items) - $items;

if ($campo['id']){$SQLID="and superior='".$campo['id']."'";}
$SQLTIPO="(tipo='categoria' OR tipo='pagina' OR tipo='entrada' OR tipo='producto' ) ";				
if ($_GET['TIPO']){$SQLTIPO=" tipo='".$_GET['TIPO']."' ";}
				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' $SQLID  ORDER BY tipo, orden LIMIT $limit,$items; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		$b++;
 ?>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  pull-left "> 
					<div class="img-wrapper "  >
					
						<div class="enigma_home_portfolio_showcase"   >
						 <div style="width:100%;height:250px;overflow:hidden;">
							<img  style="width:100% " alt="<? echo $contenido['titulo']; ?>" src="/img/500_<? echo $contenido['foto']; ?>" onerror="this.src='/nofoto.png'">
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
																
					<? if ($b==2){$b=0;echo "<div style='clear:both;'></div>";}
	}
				
				if ($a==0){include ('buscar.php'); }
				
				?>											
								
				
											</div>
			</div>
						
		</div>
	<div class="col-xs-6">
		<? if ($p>1) { $menos=$p-1; ?>
			<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $menos; ?>" class=" pull-left enigma_blog_read_btn animated bounceInUp" ><i class="fa fa-arrow-left"></i></i></a>
		<? } ?>
	</div>
	<div class="col-xs-6">
			<? if ($a==$items) {  $mas=$p+1; ?>
			<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $mas; ?>" class=" pull-right enigma_blog_read_btn animated bounceInUp" ><i class="fa fa-arrow-right"></i></a>
		<? } ?>
	</div>
	</div>

