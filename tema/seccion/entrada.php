<div class="content-wrapper2" style="background-color: #f1f1f1; margin-top:40px;">
	<div class="col-lg-3 col-sm-4 col-xs-12 affix h100">
		<div style="height:180px; overflow:hidden; background: url('/img/800_<? echo $conf['logoh']; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; "> </div><img class="img-circle" src="/img/200_<? echo $conf['logoc']; ?>" onerror="this.style.display='none';" style="width:50px;height:50px; position:relative; top:-25px; left:25px; border: 2px solid white;">
		
	 
		
		<div class="hidden-lg hidden-md hidden-sm " style="position:absolute; top:190px;width:100%; right:20px; "> <a class="btn btn-default pull-right" href="#leer" style="color: #576c77">Leer</a></div>
		<div style="position:relative; top:0px; color:white; font-size:2em;width:100%;">
			<div style="margin-left:25px;" class="truncate"><strong> <a href="/@sauwy-music/publicaciones/" style="color: white"><? echo $conf['eslogan_corto']; ?></a> </strong></div>
		</div>
		<div style="height:40px; overflow:hidden;position:relative; top:5px; left:25px; font-size:0.9em; color: #c8d1d7"> <a href="/<? echo $contacto['slug']; ?>" style="color:white"><? echo $contacto['titulo']; ?></a>
	</div>
	</div>
	
	<div id="leer" class="col-lg-7 col-lg-offset-4 col-sm-8 col-sm-offset-4 col-xs-12 container100">
		<div>&nbsp;</div>
		<div class="box box-widget" style="width:100%; margin-bottom:15px;margin-top:15px;">
			<div class="box-header with-border"> <span class="description text-muted "><i class="btn fa fa-calendar"></i><?  echo utf8_encode (strftime("%A %d de %B del %Y", strtotime($campo['fecha']))); ?></span>
				<div class="box-tools"> <a class="btn dropdown-toggle " data-toggle="dropdown"><i class="fa fa-ellipsis-v" style="color:#aeaeae"></i> </a>
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li class="dropdown-header" href="#">Compartir: </li>
						<li class="dropdown-header"> <button onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>');" type="button" class="btn btn-default btn-xs pull-right "><i class="fa fa-thumbs-o-up"></i></button>
							<button onclick="window.open('https://twitter.com/share?text=<? echo urlencode($campo['titulo']); ?>&url=<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>');" type="button" class="btn btn-default btn-xs pull-right "><i class="fa fa-twitter"></i></button>
							<button
							 onclick="window.open('https://www.linkedin.com/cws/share?url=<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>');" type="button" class="btn btn-default btn-xs pull-right "><i class="fa fa-linkedin"></i></button>
								<button onclick="window.open('https://plus.google.com/share?url=<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>');" type="button" class="btn btn-default btn-xs pull-right "><i class="fa fa-google-plus"></i></button>
						</li>
					</ul>
				</div>
			</div>
			<div class="box-body" style="padding:0px;">
				<h3 class="pad" style="word-wrap: break-word; color: #858596"><? echo $campo['titulo']; ?></h3>
				
				<? if ($campo['video']){ ?>
				<div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<? echo $campo['video']; ?>?autoplay=1&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>
				<? } else { ?>
					<img style="max-width:100%;text-align: center;" alt="<? echo $campo['titulo']; ?>" src="/img/800_<? echo $campo['foto']; ?>" onerror="this.style.display='none'">
				
				<? } ?>
				
				<div class="padd">&nbsp;<br>
					<div class="" id="texto" style="margin-top:15px;">
						<p>
							<? echo $campo['descripcion']; ?>
						</p>
						 
				 
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-12 ">
					<div class="user-block" style="margin-top:5px;"><a href="/<? echo $contacto['slug']; ?>"><img class="img-circle" src="/img/200_<? echo $conf['logoc']; ?>" onerror="this.style.display='none'"><div class="username"> <i><? echo $conf['eslogan_corto']; ?></i></div><span class="description" style="color: <? echo $conf['primario']; ?>;"> <? echo $contacto['titulo']; ?> </span></a></div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-lg-12" style="padding:20px;"><strong>Últimas entradas:</strong></div>
				
				
				<? //Noticias relaccionadas 
				
					
$consultas="SELECT * FROM contenido WHERE tipo='entrada' AND activo='1' and  (id!='".$campo['id']."') ORDER BY tipo, orden, fecha DESC, act DESC LIMIT 6; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($rel=mysqli_fetch_array($sql)){
				
				?>
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding:5px">
					<a href="<? echo $rel['slug']; ?>">
						<div class=" ">
							<div class="wrapper">
								
								<? if ($rel['video']){ ?>
					<div class="square" style=" background: url('https://img.youtube.com/vi/<? echo $rel['video']; ?>/0.jpg') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;border: 1px solid #eeeeee;">
								</div>
				<? } else { ?>
						<div class="square" style=" background: url('/img/400_<? echo $rel['foto']; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;border: 1px solid #eeeeee;">
								</div>
				
				<? } ?>
								
								
							
							</div>
							<div class="box-footer" style="height:95px;overflow:hidden">
								<p class=" "><? echo $rel['titulo']; ?></p>
							</div>
						</div>
					</a>
				</div>
				
				
				<? } ?>
				
				
				
			</div>
		</div>
	</div>
	<div style="clear:both;"></div>
	<style>
		.derecha {
			position: absolute;
			top: 10px;
			right: 10px;
			color: white;
		}

		.h100 {
			background-color: <? echo $conf['terciario']; ?>;
			height: 100%;
			min-height: 100%;
			height: 100vh;
			padding: 0px;
			overflow: hidden;
		}

		@media (max-width: 767px) {
			.affix {
				position: relative;
				width: 100%;
			}
			.h100 {
				height: auto;
				overflow: hidden;
			}
		}
	</style>
</div>


 