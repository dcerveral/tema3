<div style="clear:both;"></div> 
<div class=" grid" id='go'>
         
       
		<? 
 

 
$SQLTIPO="(tipo='".$seccion['array2']."' ) ";				

if (!$_GET['p']){$_GET['p']=1;}
$hasta=$seccion['array3'];
$desde=($_GET['p'] * $hasta) - $hasta ;
 
 		$consultar="SELECT count(id) FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL)  ";
		$noticias = mysqli_query($conex, $consultar);
		$total = mysqli_fetch_array($noticias);
		$total_paginas = ceil($total[0]/ $hasta);
	 
	//REALIZAMOS LA CONSULTA DE ESTA PAGINA
	
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' and  (id='0' $SQL) ORDER BY tipo, orden, fecha DESC, act DESC LIMIT ".$desde.", ".$hasta.";; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;$b++;
 ?>
	 
	   <div class='col-md-6 col-lg-6 grid-item '>
                <div class="box box-widget" style="width:100%; margin-bottom:15px;margin-top:15px;">
                  <div class="box-header with-border"> <span class="description text-muted "><i class="btn fa fa-calendar"></i><?  echo utf8_encode (strftime("%A %d de %B del %Y", strtotime($contenido['fecha']))); ?>
 
 </span>
                    <div class="box-tools"> <a class="btn dropdown-toggle " data-toggle="dropdown"><i class="fa fa-ellipsis-v" style="color:#aeaeae"></i> </a>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a class="dropdown-header" href="/<? echo $contenido['slug']; ?>">Leer m&aacute;s</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="box-body" style="padding:0px;">
                    <a href="/<? echo $contenido['slug']; ?>">
                      <h3 class="padd " style="margin-top:0px;word-wrap: break-word; color: #858596"><? echo $contenido['titulo']; ?></h3>
                      <div style="width:100%; text-align: center;">
												
												<? if ($contenido['video']){ ?> 
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="https://img.youtube.com/vi/<? echo $contenido['video']; ?>/hqdefault.jpg" onerror="this.style.display='none'">
												
												<? }else{ ?>
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="/img/600_<? echo $contenido['foto']; ?>" onerror="this.style.display='none'">
											
											<? } ?>
											</div> 
											 
											
                    </a>
                    <p class="pad"><? echo $contenido['description']; ?><a href='/<? echo $contenido['slug']; ?>'> </a></p>
                  </div>
                  <div class="box-footer"><a href="/<? echo $contacto['slug']; ?>" style="font-size:11px;"><? echo $conf['eslogan_corto']; ?></a><a href="/<? echo $contenido['slug']; ?>" class=" pull-right" style="font-size:11px;">Leer m&aacute;s<i class="fa fa-long-arrow-right"></i></a></div>
                </div>
	 </div>
	 
			 
			
				
	
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
	
	 




