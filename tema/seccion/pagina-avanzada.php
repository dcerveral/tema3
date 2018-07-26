<div class='content-wrapper2' style="position:relative;top:-60px;">
	<div class='foto' style="background: url(/img/800_<? echo $conf['logoh']; ?>) no-repeat center center ; background-size: 100% 100%; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;	text-align: center; ">
		<div class="titulo">
			<? echo $conf['eslogan_largo']; ?> 
		</div>
		<div class="subtitulo">
			<? echo $conf['eslogan_corto']; ?>
		</div><img class="fotoredonda " src="/img/300_<? echo $conf['logoc']; ?>" onerror="this.style.display='none';">

	</div>


	<div class="pestana " id="detalles">
		<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-secundario'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
					echo " <a href='/".$item['slug']."'><span class='tabs ";
				if ($campo['slug']==$item['slug']) {echo "active";}
				echo "'> ".$item['titulo'] ."</span></a>  ";
				
			}
			?>

	</div>




	<div class="contenido" style="background-color:#f1f1f1;overflow:hidden;">
		<div id="main" style="overflow: hidden;min-height:180px;">
			<section>
				<div class="col-md-12 ">
					<div class="box2 box-widget ">
						<div class="box-header with-border">
							<div class="user-block col-lg-4 col-xs-12">
								<a href="/<? echo $contacto['slug']; ?>">
								<img class="img-circle" src="/img/100_<? echo $conf['logoc']; ?>" onerror="this.src='<? echo $conf['tema']; ?>/jpg/nofoto.jpg'"> <span class="username"><? echo $conf['eslogan_corto']; ?></span> <span class="description"> <p>   <? echo $conf['eslogan_largo']; ?></a> </p>
								</span>
							</div>
							<form method="post" action="/buscar">

								<div class="col-lg-2 col-xs-12 col-sm-12 pull-right" style="padding:0px;">
									<div class="input-group " style="width:100%">
										<select name="anno" class="form-control " onchange="this.form.submit()">
											
											
							<option value="">Todos los a&ntilde;os</option> 
											
							<?  for ($a=$conf['anyo'];$a<=date('Y'); $a++){
									echo '<option value="'.$a.'">'.$a.'</option>';
							 	}				
							?>
						 
								
										</select></div>

								</div>
							</form>
						</div>
					</div>
				</div>
				<?
									
									 $consultasec="SELECT * FROM contenido WHERE tipo='seccion' AND activo='1' AND superior='".$campo['id']."' ORDER BY orden ;"	;	
							 
								$sqlsec=mysqli_query($conex,$consultasec);
									while ($seccion=mysqli_fetch_array($sqlsec)){
										
										 
									include (''.$seccion ['subtipo'].'.php'); 
									  
									}
						?>


					<div style="clear:both;"></div>

		</div>


		</section>
	</div>
</div>
 