 
 
	<div class="enigma_blog_area texto">
	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12">
					 
			<div class="col-sm-12">
				<? if ($seccion['titulo'] || $seccion['subtitulo']) { ?>
				<div class="enigma_heading_title">
					<h3><? echo $seccion['titulo']; ?></h3>		
						<h5><? echo $seccion['subtitulo']; ?></h5>
				</div>
			</div>
	 <? } ?>
				
			
					<? echo $seccion['descripcion']; ?>
			
			</div>
			
		
		</div>
	</div>
</div>

<style>
	 
	.texto ul { list-style-type: none;
                padding:0px;margin-top:30px; }
	.texto li {background-color: <? echo $conf['secundario']; ?>; color:white;margin-bottom:5px; padding: 10px 5px 10px 25px;border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;
-webkit-border-radius: 5px 5px 5px 5px;
border: 0px solid <? echo $conf['primario']; ?>;}
</style>