<?php

 
//include ('conex.php');
 
include('../configurar.php');
  $conex=mysqli_connect($servidor,$usuario,$clave,$db);
  if(!$conex){
    
        die("Estamos actualizando este site");
    } 



//Cargamos la configuración
$consulta="select img,tipo from fotos  where foto='".$_GET['file']."' ;";
$sql=mysqli_query($conex,$consulta);
$img=mysqli_fetch_array($sql);
  
  $width=$_GET['width'];
  
 $im = imagecreatefromstring ( $img[0] );
	$w = imagesx($im);
	$h = imagesy($im);

	
	//if (!$width){$width=$_GET['width'] ;}

	$ratio = $w / $h ;
	
	$height = round($width / $ratio);

	
	// Se crea la mascara de la imagen nueva
    $dst_img = ImageCreateTrueColor($width,$height);
	 
	 
	 
			$color = imagecolorallocatealpha($dst_img, 0, 0, 0, 127); //fill transparent back
			imagefill($dst_img, 0, 0, $color);
			imagesavealpha($dst_img, true);
	 
	 
// Se copia y reajusta el nuevo tamaño en la nueva imagen.
    imagecopyresampled($dst_img,$im,0,0,0,0,$width,$height,$w,$h); 
	
	
header("Content-type: ".$img[1]);
//echo $img[0];
	imagepng($dst_img);
    imagedestroy($dst_img);

?>
