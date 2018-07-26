<div class="content-wrapper2" style="position:relative; top:-50px;">
	<div class="foto" style="background: url(/img/800_<? echo $conf['logoh']; ?>)  no-repeat center center ; background-size: 100% 100%;
									  -webkit-background-size: cover;
									  -moz-background-size: cover;
									  -o-background-size: cover;
									  background-size: cover;
									text-align: center; ">
		<div class="titulocontacta">
			<? echo $conf['eslogan_largo']; ?>
		</div>
		<div class="subtitulocontacta">Contactar</div>
		<div style="position:relative; top:100px;">
			<div class="container">
				<div class=" col-xs-4 text-center">
					<a href="#detalles" class="white-text">
						<center>
							<div class="redondo"><i class="fa fa-address-card  " aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Detalles</p>
						</center>
					</a>
				</div>
				<div class="col-xs-4 center">
					<a href="#sobremi" class="white-text">
						<center>
							<div class="redondo"><i class="fa fa-user" aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Sobre mi</p>
						</center>
					</a>
				</div>
				<div class="col-xs-4 center">
					<a href="#contacto" class="text-white">
						<center>
							<div class="redondo"><i class="fa fa-envelope " aria-hidden="true"></i></div>
							<p style="color:white; text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);">Contacto</p>
						</center>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="pestana " id="detalles">
		<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-secundario'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
					echo " <a href='/".$item['slug']."'><span class='tabs ";
				if ($campo['slug']==$item['slug']) {echo "active";}
				echo "'> ".$item['titulo'] ."</span></a>  ";
				
			}
			?>

	</div>
	<section class="contenido" style="background-color:#f1f1f1;overflow:hidden;">
		<div class="container">
			<div class="row  ">
				<p>&nbsp;</p>
				<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
					<div style="margin-bottom:21px;"><i class="fa fa-address-card-o " style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
				</div>
				<div class=" col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
					<h2 style="color: <? echo $conf['primario']; ?>;">Detalles del editor</h2>
					<p><b>Nombre</b>:
						<? echo $conf['nombre']; ?>
					</p>
					<p><b>Geolocalizaci&oacute;n</b>:
						<? echo $conf['geolocalizacion']; ?>
					</p>
					<p id="sobremi">&nbsp;</p>
				</div>
			</div>
		</div>
	</section>
	<section class="contenido">
		<div class="container">
			<div class="row  ">
				<p>&nbsp;</p>
				<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
					<div style="margin-bottom:21px;"><i class="fa fa-user-circle-o" style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
				</div>
				<div class=" col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
					<h2 style="color: <? echo $conf['primario']; ?>;">Sobre el editor</h2>
					<p><b><? echo $conf['sobremi']; ?></p>
<p>&nbsp;</p>
</div>
</div>
</div>
</section>
<section class="contenido" id="contacto" style="background-color:#f1f1f1;">
<div class="container">
<div class="row  ">
<p>&nbsp;</p>
<div class=" col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4  col-xs-12   text-center">
<div style="margin-bottom:21px;"><i class="fa fa-envelope " style="color: <? echo $conf['primario']; ?>;font-size:80px;"></i></div>
</div>
<div class="  col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1">
<h2 style="color: <? echo $conf['primario']; ?>;">Contacto</h2>
<p> Puedes contactar mediante:
<p>
	
	<? if ($conf['facebook']){ ?>
<a href="<? echo $conf['facebook']; ?>" class="btn btn-app  btn-lg btn-default" target="14"><i class="fa fa-facebook"></i> Facebook </a> 
	<? } ?>
		
	<? if ($conf['twitter']){ ?>
<a href="<? echo $conf['twitter']; ?>" class="btn btn-app  btn-lg btn-default" target="14"><i class="fa fa-twitter"></i> Twitter </a> 
	<? } ?>
	
	<? if ($conf['instagram']){ ?>
<a href="<? echo $conf['instagram']; ?>" class="btn btn-app  btn-lg btn-default" target="14"><i class="fa fa-instagram"></i> Instagram </a> 
	<? } ?>
	
	<? if ($conf['google-plus']){ ?>
<a href="<? echo $conf['google-plus']; ?>" class="btn btn-app  btn-lg btn-default" target="14"><i class="fa fa-google-plus"></i> Google+ </a> 
	<? } ?>
	<? if ($conf['youtube']){ ?>
	<a href="<? echo $conf['youtube']; ?>" class="btn btn-app  btn-lg btn-default" target="14"><i class="fa fa-youtube"></i> Youtube</a>
	
	<? } ?>
	
		<? if ($conf['email']){ ?>
	<a href="#contacto" class="btn btn-app btn-lg btn-default" onclick="document.getElementById('formulario').style.display='inline';"><i class="fa fa-envelope-o"></i> Correo</a>
	
<? if ($_POST['email']){
	echo '<div class="col-lg-10  col-md-12  col-sm-12  col-xs-12 alert alert-success" >';
	echo 'Su mensaje ha sido enviado correctamente.';
	echo '</div>';
	$para  = $_POST['email'] . ', '; // atención a la coma
	$para .= $conf['email'] ;

// título
$titulo = 'Formulario de contacto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Formulario de contacto</title>
</head>
<body>
  <p>Su mensaje ha sido enviado correctamente. Datos enviados</p>
  <table>
    
   
       <tr><td>Nombre</td><td>'.$_POST['nombre'].'</td>  </tr>
			 <tr><td>Correo</td><td>'.$_POST['email'].'</td>  </tr>
			 <tr><td>Mensaje</td><td>'.$_POST['mensaje'].'</td>  </tr>
   
   
  </table>
</body>
</html>
';
 
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' . $_POST['email'] . "\r\n";
$cabeceras .= 'From: ' . $conf['email'] . "\r\n";
 

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
}
	?>
	
<div class="col-lg-10  col-md-12  col-sm-12  col-xs-12 " id='formulario' style="display:none;">
<form method="POST">
<h1>Formulario de contacto</h1>
<div class="form-group has-feedback">
<label>Nombre <sup class="text-red">*</sup></label>
<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
<span class="fa fa-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<label>Correo <sup class="text-red">*</sup></label>
<input type="email" class="form-control" name="email" placeholder="Email" required>
<span class="glyphicon glyphicon-envelope  form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<label>Mensaje <sup class="text-red">*</sup></label>
<textarea class="form-control" name="mensaje" placeholder="Mensaje" required></textarea>
<span class="glyphicon glyphicon-pencil  form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<label>
<input type="checkbox" name="robot" required> No soy un robot
</label>
</div>
<div class="row">
<div class="col-xs-12 pull-right">
<button type="submit" class="btn btn-primary btn-block btn-flat" id="boton">Enviar</button>
</div>
</div>
<label class="text-muted text-red">* Campos obligatorios</label>

	</form>
	<? } ?>
<script>
					  $(function () {
						$('input').iCheck({
						  checkboxClass: 'icheckbox_square-blue',
						  radioClass: 'iradio_square-blue',
						  increaseArea: '10%' // optional
						});
					  });
					</script>
</diV>
 
 </div>
</div>
</div>
</section>
 
</div>
</div> 