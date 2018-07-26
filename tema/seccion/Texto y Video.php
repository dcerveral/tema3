 <!-- enigma_blog_area -->
<div class="enigma_blog_area ">
 
	
	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6">
				<h3>
					<? echo $seccion['titulo']; ?>
				</h3>
				
				<h5><? echo $seccion['subtitulo']; ?></h5>
					<? echo $seccion['descripcion']; ?>
			
			</div>
			
		<div class="col-lg-6">
				<div class="embed-container">
				<iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/<? echo $seccion['video']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="enigma_slider_shadow"></div>
			</div>
		</div>
	</div>
	
	
</div>