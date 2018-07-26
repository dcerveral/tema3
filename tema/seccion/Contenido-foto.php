


<div style="clear:both;"></div> 
 
         <div class="flex_grid credits" style="width:100%;padding:0px; margin:0px; margin-top:20px;">
       
		<? 
 

 
 $SQLTIPO="(tipo='entrada' ) ";				

		 		

if (!$_GET['p']){$_GET['p']=1;}
$hasta=$seccion['array3'];
$desde=($_GET['p'] * $hasta) - $hasta ;
 
 		$consultar="SELECT count(id) FROM contenido WHERE $SQLTIPO AND activo='1' and foto!='' and video='' and  (id='0' $SQL)  ";
		$noticias = mysqli_query($conex, $consultar);
		$total = mysqli_fetch_array($noticias);
		$total_paginas = ceil($total[0]/ $hasta);
	 
	//REALIZAMOS LA CONSULTA DE ESTA PAGINA
	
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and video='' and foto!=''  and  (id='0' $SQL) ORDER BY tipo, orden , fecha DESC, act DESC LIMIT ".$desde.", ".$hasta.";; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;$b++;
 ?>
	 <div class="item white" data-w="<? echo $contenido['width']; ?>" data-h="<? echo $contenido['height']; ?>"> <a href="/<? echo $contenido['slug']; ?>"> <img class="loading" src="/img/400_<? echo $contenido['foto']; ?>" alt="<? echo $contenido['titulo']; ?>" title="<? echo $contenido['titulo']; ?>" onerror="this.src.style.display='none'"> </a> <div> <a href="/<? echo $contenido['slug']; ?>"><i class="fa fa-camera"></i> <? echo $contenido['titulo']; ?></a> </div> </div>
					 
		  
			
				
	
		<?
			}	 
			//PAGINACION
	$pagina=$_GET['p'];
	echo '<div class="col-xs-12   grid-item" 		>';
		if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href="/'.$campo['slug'].'/'.($pagina-1).'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left" style="margin:1px;"></i></a>';
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo '<a href="/'.$campo['slug'].'/'.($pagina).'" class="btn btn-xs btn-info" style="margin:1px;">'.$pagina.'</a>';
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
					  echo '<a href="/'.$campo['slug'].'/'.($i).'" class="btn btn-xs btn-default" style="margin:1px; "> '.$i.'</a>';
				
            
      }
      if ($pagina != $total_paginas)
          echo '<a href="/'.$campo['slug'].'/'.($pagina+1).'" class="btn btn-xs btn-default" style="margin:1px;"><i class="fa fa-arrow-right"></i></a>';
}
		
		echo "</div>";
		
	
				
				if ($a==0){include ('buscar.php'); }
				
				?>						
						
						
					
	</div>
	
	 








