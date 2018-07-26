<?	if ($seccion['array3']==0) {$seccion['array3']=4;};

						$sqlc = "SELECT id, titulo, descripcion,slug FROM contenido WHERE superior='".$seccion['array']."'  AND tipo='".$seccion['array2']."' AND id!=".$campo['id']." AND activo='1' ORDER BY orden LIMIT ".$seccion['array3']."  ";

	 

	$result = mysqli_query($conex, $sqlc) or die("database error:". mysqli_error($conex));
 
?>
	<div class="enigma_project_section ">
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
				<div id="enigma_portfolio_section" class="enima_photo_gallery">
			<ul class="nav nav-tabs nav-justified" >		<?
	 $a=0;
	while ($contenido = mysqli_fetch_assoc($result)) {
			$a++;
 
			echo '<li  style="background-color:white;" ';
			if($a==1){echo 'class=" active  "';}
		
			echo ' ><a data-toggle="tab"   href="#'.$contenido['slug'].'">'.$contenido['titulo'].'</a></li>';
		 
	}
 
							 

?>
							
  
</ul>

					
					<div class="tab-content enigma_project_section" style="padding-top:0px;margin:0px;padding:0px;">
  
		
		<? 			$sqlc = "SELECT id, titulo, descripcion,slug FROM contenido WHERE superior='".$seccion['array']."'  AND tipo='".$seccion['array2']."' AND id!=".$campo['id']." AND activo='1' ORDER BY orden LIMIT ".$seccion['array3']."  ";
	 
	$result = mysqli_query($conex, $sqlc) or die("database error:". mysqli_error($conex));
 
		 $a=0;
			while ($contenido = mysqli_fetch_assoc($result)) {
				
			$a++;
				
				
				//Buscamos las preguntas	
				$b=0;
				
				$camposli= explode	('<ul>',$contenido['descripcion']);
				
				foreach ($camposli as &$valor) {
					$b++;
					$valor=str_replace('<li>','<li style="margin-bottom:10px;cursor:pointer;cursor:hand;" data-toggle="collapse" href="#faqs'.$a.$b.'" >',$valor);
  			 $valor=str_replace('</li>','</li>',$valor);
					
					
					$valor=str_replace('<blockquote>','<blockquote  class="collapse" id="faqs'.$a.$b.'" >',$valor);
					$valor=str_replace('</blockquote>','</blockquote>',$valor);
  			  
					$descripcion[$a] .= $valor;
			}
			
			//	$descripcion  = $contenido['descripcion'];
	 echo '
		<div id="'.$contenido['slug'].'" class="tab-pane fade ';
				if ($a==1){echo ' in active ';}
				echo '"> 
    <h3>'.$contenido['titulo'].'</h3>';
	echo '	 <h5>'.$contenido['subtitulo'].'</h5>
		  
    '.$descripcion[$a].'</p>
  </div>
   ';
						
	  }
	 ?>
</div>
							<!-- end div-->


				</div>

			</div>
		</div>
	</div>
<p>
  

<style>
	.tab-pane {padding:10px;}
	.tab-pane ul { list-style-type: none;
                padding:0px;margin-top:30px; }
	.tab-pane li {background-color: <? echo $conf['secundario']; ?>; color:white;margin:0px; padding: 10px 5px 10px 25px;border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;
-webkit-border-radius: 5px 5px 5px 5px;
border: 0px solid <? echo $conf['primario']; ?>;}
</style>

