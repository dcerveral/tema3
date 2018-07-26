 
 
<?
//RUTA
 
	//COLUMNA IZQUIERDA
				if ($col_left > 0){  
					echo "<div class='col-md-".$col_left."' padtop>";
					
					//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='left' AND activo='1' AND (lugar='todo' OR lugar='".$campo['tipo']."s') ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
				<div class="scrollimation fade-right">
					
				
					<h3>
						<? echo $widget ['titulo']; ?>
						</h3>
				 
						<? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
			 </div>
					<?  
						 
						 
						
					}
					
					
					echo "</div>";
				}
		
	//columna CENTRAL
		 		//MOSTRAMOS SOLO 
			 
					
				if ($col_center!=12) { echo "<div class='col-md-".$col_center."'>";}
					
        
        
        // if ($_GET['pag']=="carro" {include ('carro.php');}
        
						//Categorias
						 if ($campo['tipo']=="categoria" || $_GET['TIPO']) {include ('categorias.php');}
				
						//CONTACTO
						if ($campo['id']==$contacto['id']) { include ('seccion/contacto.php');}
				
						//Contenido
						elseif ($campo['id']) {
							
								// avanzada
							if ($campo['tipo']=="pagina" && $campo['subtipo']=="avanzada"){
										//CABECERA DE LA PÁGINA		
								 
								 
								include ('seccion/pagina-avanzada.php');
									
								}
								elseif ($campo['subtipo']=="avanzada"){
										//CABECERA DE LA PÁGINA		
								 
								 
									
									 $consultasec="SELECT * FROM contenido WHERE tipo='seccion' AND activo='1' AND superior='".$campo['id']."' ORDER BY orden ;"	;	
								 
								$sqlsec=mysqli_query($conex,$consultasec);
									while ($seccion=mysqli_fetch_array($sqlsec)){
										
										 
									include ('seccion/'.$seccion ['subtipo'].'.php'); 
										//	echo $seccion['subtipo'];
									}
									
								}else {
								//Pagina sencilla y otros contenidos
									if ($campo['tipo']=="entrada" ){
									
										include ('seccion/entrada.php');
										
									} else {
										
											include ('seccion/pagina.php');
										
									}
								}
							
							
							
							
							
						}
				
						//elseif ($_GET['TIPO']){include ('categorias.php');}
				
						//Buscador
						else {  include ('buscar.php');}
				
				
			 
					
				if ($col_center!=12) { 	echo "</div>";}
			 

	//COLUMNA DERECHA
				if ($col_right > 0){  
					echo "<div class='col-md-".$col_right." padtop'>";
					
					//Buscamos los widget de la izquierda
					$consulta_left="Select * FROM contenido WHERE tipo='right' AND activo='1' AND (lugar='todo' OR lugar='".$campo['tipo']."s')  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
				<div  >
					
				
					<h3>
						<? echo $widget ['titulo']; ?>
						</h3>
				 
						<? echo $widget ['subtitulo']; ?>
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
			 </div>
		<? } } ?>
 