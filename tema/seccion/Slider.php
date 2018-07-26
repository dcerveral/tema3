<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?  $consulta="SELECT * FROM contenido WHERE subtipo='Foto' AND activo='1' AND superior='".$seccion['id']."' ORDER BY orden";
		$sqlitem=mysqli_query($conex,$consulta);
		$a=0;
		while ($item=mysqli_fetch_array($sqlitem)){
		
		if ($a==0){$active="active";}else{$active="";}
		
			$indicador.='<li data-target="#myCarousel" data-slide-to="'.$a.'" class="'.$active.'"></li>';
			
			
		$a++;
		?>
		<div class="item <? echo $active; ?>">

			<img src="/img/<? echo $item['foto']; ?>" class="img-responsive" alt="<? echo $item['titulo']; ?>">
			<div class="container">
				<div class="carousel-caption">
					<div class="carousel-text">
						<h1 class="animated bounceInRight"><? echo $item['titulo']; ?></h1>
						<ul class="list-unstyled carousel-list">
							<li class="animated bounceInLeft"><? echo $item['subtitulo']; ?></li>
						</ul>
						<a class="enigma_blog_read_btn animated bounceInUp" href="<? echo $item['url']; ?>" role="button"><? echo $item['enlace']; ?></a>
					</div>
				</div>
			</div>
		</div>

<? } ?>

	</div>
	<ol class="carousel-indicators">
		<? echo $indicador; ?>
	</ol>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<div class="enigma_slider_shadow"></div>
</div>
<!-- /.carousel -->