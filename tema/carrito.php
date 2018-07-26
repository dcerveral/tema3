<? if ($_COOKIE['seguroscity']) { ?>

  <? if ($_POST['idcliente']) { ?>

    <div class="enigma_blog_area ">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="enigma_heading_title">
              <h3>Solicitud cursada</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Gracias por su pedido, en breve un agente se pondrá en contacto con usted, para completar su pedido.
            </p>
            <p>
              A continuación le remitimos los enviados:
            </p>
            <p>
              &nbsp;
            </p>
              <center>
                
           <? $tabla='
              <table  border="1" cellpadding="1" cellspacing="1" class="table table-striped table-bordered  " style="width:50%;">
                <caption><b>Pedido '.date('ymdHi').'</b></caption>

                <tbody>
                  <tr><td>Cliente</td><td>'.$_POST['idcliente'].'</td></tr>
                  <tr><td>Empresa</td><td>'.$_POST['oficina'].'</td></tr>
                  <tr><td>Correo</td><td>'.$_POST['email'].'</td></tr>
                  <tr><td>Teléfono</td><td>'.$_POST['telefono'].'</td></tr>
                  <tr><td>Producto</td><td>'.$_POST['pro'].'</td></tr>
									<tr><td>Cantidad</td><td>'.$_POST['cantidad'].'</td></tr>
									<tr><td>Total IVA incl.</td><td>'.$_POST['total'].' &euro;</td></tr>
                  <tr><td>Mensaje</td><td>'.$_POST['mensaje'].'</td></tr>
                </tbody>
              </table>';
              echo $tabla;
            ?>
          </center>
            <p>
              
              <a href="https://panel.seguroscity.com/objetivos" class="btn btn-success pull-right">Continuar</a>
              
            </p>

          </div>
        </div>
      </div>
    </div>
  <? //ENVIAMOS EMAIL CON COPIA PARA LOS TRES
      // Varios destinatarios
$para  = $_POST['email'] ; // atención a la coma
 

// título
$titulo = 'Pedido '.date('ymdHi').' promoempresa.eu';

// mensaje
$mensaje = '
	<html>
	<head>
		<title>Pedido '.date('ymdHi').' promoempresa.eu</title>
	</head>
	<body>
		<p>Detalle de su pedido de promoempresa.eu, con descuento especial por ser cliente de la plataforma
		seguroscity.com:</p>
		'.$tabla.'

		<p> Gracias por su pedido, en breve un agente se pondrá en contacto con usted. <p>

	</body>
	</html>
	';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: '.$_POST['email'].', info@seguroscity.com, info@promoempresa.eu, dcerveral@gmail.com' . "\r\n";
$cabeceras .= 'From: info@promoempresa.eu' . "\r\n";
 

// Enviarlo
 mail($para, $titulo, $mensaje, $cabeceras);                        
  
  // Añadimos el cliente a SEGUROSCITY
  $url = 'https://panel.seguroscity.com/promoempresa.php?id='. $_COOKIE['seguroscity'].'&producto='.urlencode ($_POST['producto']); 
 				 
              $c = curl_init($url); 
              curl_setopt($c, CURLOPT_POST, true); 
              curl_setopt($c, CURLOPT_POSTFIELDS, $body); 
              curl_setopt($c, CURLOPT_RETURNTRANSFER, true); 
              $page = curl_exec($c); 
              curl_close($c); 
              echo $page;        
				 										 
	 // Añadimos el cliente a nuestra base de datos
    mysqli_query($conex,"INSERT INTO `usuarios` (`id`, `activo`, `usuario`, `email`, `clave`, `rol`, `empresa`, `contacto`, `cif`, `telefono`, `movil`, `direccion`, `cp`, `ciudad`, `provincia`, `pais`, `web`, `notas`, `fecha`, `act`) VALUES (NULL, '1', '".$_POST['oficina']."', '".$_POST['email']."', '".$_COOKIE['seguroscity']."', 'cliente', '".$_POST['oficina']."', 'seguroscity', '', '".$_POST['telefono']."', '', '', '', '', '', '', '', '".$_POST['mensaje']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);");                      
    		
		//Averiguamos el numero de cliente de promoempresa.eu
		$idcliente= mysqli_insert_id($conex); 
			
		//Averiguamos el número de pedido		
		$consulta="SELECT count(docu_id) FROM docus WHERE docu_id_pedido>0 AND docu_fecha_pedido>='".date('Y')."-01-01' AND docu_fecha_pedido<='".date('Y')."-12-31'";
	
				 									 
		
		$sql=mysqli_query($conex,$consulta);
		$idped=mysqli_fetch_array($sql);
		$idpedido	=	$idped[0]	+	1;											 
															 
			 		
															 
	//Creamos un pedido
 	mysqli_query($conex,"INSERT INTO `docus` (`docu_id`, `docu_id_cliente`, `docu_id_user`, `docu_id_presupuesto`, `docu_id_pedido`, `docu_id_factura`, `docu_serie`, `docu_id_envio`, `docu_estado`, `docu_fecha_presupuesto`, `docu_fecha_pedido`, `docu_fecha_factura`, `docu_neto`, `docu_iva`, `docu_total`, `docu_pendiente`, `docu_id_abono`, `docu_fecha_`, `observa_presupuesto`, `observa_pedido`, `observa_factura`, `fecha_entrega`) VALUES (NULL, '".$idcliente."', '1', '0', '".$idpedido."', '0', '', '', '', '', CURRENT_DATE(), '', '".$_POST['neto']."', '21', '".$_POST['total']."', '".$_POST['total']."', '', CURRENT_TIMESTAMP, 'Cliente ".$_POST['idcliente']." de seguroscity.com ', '', '', '');");							 
				
	//Averiguamos el id del documento
		$id_documento= mysqli_insert_id($conex); 									 
				
	//Insertamos linea del documento
		mysqli_query($conex,"INSERT INTO `lineas` (`linea_id`, `linea_ref`, `linea_concepto`, `linea_neto`, `linea_iva`, `linea_dto`, `linea_total`, `linea_cantidad`, `linea_id_docu`, `linea_id_articulo`) VALUES (NULL, '".$_POST['idcliente']."', '".$_POST['pro']."', '".$_POST['unitario']."', '21', '0', '".$_POST['total']."', '".$_POST['cantidad']."', '".$id_documento."', '209');");												 
															 
  ?>


    <? } else { 
	
		 // obtenemos datos del producto pasado en array
							 
				$datos=explode(';',$_GET['p']);	
				$pro=$datos[0];
				$cantidad=$datos[1];
				$unitario=$datos[2];
				$neto=($cantidad * $unitario);
				$total=($cantidad * $unitario) * 1.21;
			?>
      <div class="enigma_blog_area ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="enigma_heading_title">
                <h3>Solicitud de información</h3>
                <h4>
                  <? echo ucfirst($pro); ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5"><img src="/img/800_logo-maissonave.jpg" class="img-responsive" alt="Contacto"><p>
							&nbsp;
							</p></div> 
						
            <div class="col-lg-7">
							
							
		
							
              <form method="POST">
                <input type="hidden" name="producto" value="<? echo ucfirst($_GET['p']); ?>">
								<input type="hidden" name="neto" value="<? echo $neto; ?>">

                
                <?php 
          /*
          $data=$_COOKIE['seguroscity'];
          $key="SegurosCity@PromoEmpresa";
          $method = 'AES-256-ECB';
          $ivSize = openssl_cipher_iv_length($method);
          $iv = openssl_random_pseudo_bytes($ivSize);
          $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
          $encrypted = base64_encode($iv . $encrypted);
          */
    
          $encrypted=$_COOKIE['seguroscity'];
          
              $url = 'https://panel.seguroscity.com/mediador.php?id='. $encrypted; 

              $c = curl_init($url); 
              curl_setopt($c, CURLOPT_POST, true); 
              curl_setopt($c, CURLOPT_POSTFIELDS, $body); 
              curl_setopt($c, CURLOPT_RETURNTRANSFER, true); 
              $page = curl_exec($c); 
              curl_close($c); 
              echo $page; 
           ?>
								
								<div class="col-xs-12"> <label id='label4'>Producto</label>
                  <br><input type="text" name="pro" readonly value="<? echo ucfirst($pro); ?>" class='form-control'>

                </div>
								  <div class="col-lg-3"> <label >Cantidad</label>
                  <br><input name="cantidad" style="text-align: right" type="text" readonly value="<? echo $cantidad; ?>" class='form-control'> 
								</div>
								 <div class="col-lg-3"> <label >P.Unidad</label>
                  <br><input name="unitario" style="text-align: right"  type="text" readonly value="<? print number_format ($unitario,2); ?>" class='form-control'> 
								</div>
								<div class="col-lg-3"> <label >IVA</label>
                  <br><input name="iva" style="text-align: right"  type="text" readonly value="21%" class='form-control'> 
								</div>
									<div class="col-lg-3"> <label >Total <small>IVA incluido</small></label>
                  <br><input name="total" style="text-align: right"  type="text" readonly value="<? print number_format ($total,2); ?>" class='form-control'> 
								</div>
								<p>&nbsp;</p>
                <div id='div4' class="col-xs-12"> <label id='label4'>Mensaje</label>
                  <br><textarea name='mensaje' id='select4'   class='form-control'></textarea>

                </div>
                <div id='div6' class="col-xs-12"> <input type="checkbox" required> Acepto las <a href="/condiciones-legales"  target="legal">condiciones legales</a>.
                </div>
                <div id='div5' class="col-xs-12"> <input id='select5' type='submit' value='Solicitar' class='btn btn-success'>

                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <?         } 
   } else { ?>

        <div class="enigma_blog_area ">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="enigma_heading_title">
                  <h3>Solicitud de información</h3>
                  <h4>
                    Usuario no identificado
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">

              <div class="col-lg-12">
                <p>


                  Debes de acceder desde tu <a href="https://panel.seguroscity.com/">panel de control de seguroscity.com</a> para solicitar el descuento especial para mediadores.
                </p>
                <p>

                  Si usted no es cliente de seguroscity.com, puede <a href="https://www.seguroscity.com/pag/nosotros">solicitar el alta</a>.
                </p>

              </div>

            </div>
          </div>
        </div>


        <? } ?>