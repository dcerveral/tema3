<!-- /portfolio section --><div class="enigma_blog_area ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><? echo $seccion['titulo']; ?></h3>		
					<h4><? echo $seccion['subtitulo']; ?></h4>
				</div>
			</div>
		</div>
	</div>
		<div class="container">	
	<div class="row">
		<div class="col-lg-5">
				<img src="/img/800_<? echo $seccion['foto']; ?>" class="img-responsive" alt="<? echo $seccion['titulo']; ?>" >
			</div>
		<div class="col-lg-7">
			<form method="POST">
			
			
			<?
if ($_POST['campo']){
 
	
	echo " 
<pre><strong>Su mensaje ha sido enviado correctamente.</strong></pre>
 ";
	
 
								foreach ($_POST['campo'] as &$valor) {
									
									$mensaje.=$valor."<br>";
								}
	
 // Varios destinatarios
 
$para = $conf['email'];

// título
$titulo = 'Mensaje desde formulario';

// mensaje
$mensaje = '
<html>
 
<body>
  <p>Estos son los datos enviados desde web:</p>
  '.$mensaje.'
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' . $conf['email'] . "\r\n";
$cabeceras .= 'From: ' . $para. "\r\n";


// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
     





}
 

 
					 
						$formulario= explode(';',$seccion['descripcion']); 
						$b=0;
						foreach ($formulario as &$valor) { 
								$b++;
								$input	= explode(',',$valor);
							echo "<div id='div".$b."'> ";
								$a=0;
								foreach ($input as &$contenido) {
									$a++;
									
									if ($a==1){
										if ($contenido)	{	
											 
									
										
											echo "<label id='label".$b."'>".$contenido."</label><br>";$boton=$contenido;
														}	
												
														
														}
									if ($a==2){
									  
										switch ($contenido) {
												case "input":
														echo "<input name='campo[]' id='select".$b."' class='form-control' >";
														break;
												case "textarea":
														echo "<textarea name='campo[]' id='select".$b."' class='form-control' ></textarea>";
														break;
													case "submit":
														echo "<input id='select".$b."' type='submit' value='".$boton."' class='btn btn-success' ><script>document.getElementById('label".$b."').style.display='none';</script><br>";
											 
												
												break;
												
												case "select":
												
														echo "<select name='campo[]' id='select".$b."' class='form-control' ><option>Seleccione una opción</option></select>";
														break;
											 
											}
										}
										if ($a==3){  
											if ($contenido=="true"){
												echo "<div class='red-text pull-right'>* Obligatorio</div>";
												?>
			<script>document.getElementById("select<? echo $b; ?>").required= "required";</script>
												
												<?
											}
											
										
											echo "<p>";
										}
											if ($a==4){ 
												if ($contenido) { ?>
							<script>
												  
												 var select = document.getElementById("select<? echo $b; ?>");
								
							<?	$cont=explode('|',$contenido); 
								foreach ($cont as &$valor) {
     
 
								?>
								
								
												select.options[select.options.length] = new Option('<? echo $valor; ?>', '<? echo $valor; ?>');
  <? } ?>
												 
							</script>
												<?
											}
											}
								
									
								}
									echo "</div>";													 
						}
						?>
			
			<? //Averiguamos el slug de condiciones legales
				
				$consulta="Select slug FROM contenido WHERE id='".$conf['pagina_legal']."' LIMIT 1; ";
				$sql=mysqli_query($conex,$consulta);
				$slug=mysqli_fetch_array($sql);
				
				?>	
				
				<input type="checkbox" required> Acepto las <a href="/<? echo $slug[0]; ?>" 				<input type="checkbox" required> Acepto las <a href="/<? echo $slug[0]; ?>" target="legal">condiciones legales</a>. 
				
			</form>
			
		</div>
			</div></div></div>
 