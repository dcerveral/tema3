<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	 
		<div class="item active">

			<img src="/img/<? echo $seccion['foto']; ?>" class="img-responsive" alt="<? echo $seccion['titulo']; ?>">
			<div class="container">
				<div class="carousel-caption">
					<div class="carousel-text">
						<h1 class="animated bounceInRight"><? echo $seccion['titulo']; ?></h1>
						<ul class="list-unstyled carousel-list">
							<li class="animated bounceInLeft"><? echo $seccion['subtitulo']; ?></li>
						</ul>
						<? if ($seccion['url']){ ?>
						<a class="enigma_blog_read_btn animated bounceInUp" href="<? echo $seccion['url']; ?>" role="button"><? echo $seccion['enlace']; ?></a>
						<? } ?>
					</div>
				</div>
			</div>
		</div>
 

	</div>
  <div class="enigma_slider_shadow"></div>
</div>
<!-- /.carousel -->