<?
include ('conex.php');
//Cargamos la configuración
	$consulta="SELECT valor FROM conf WHERE campo='nombre_pagina' LIMIT 1;";
	$sql=mysqli_query($conex,$consulta);
 	$dominio=mysqli_fetch_array($sql);

  

?>

<html>
	<head>
		<style type="text/css">
    html, body, div, iframe { margin:0; padding:0; height:100%; }
    iframe { display:block; width:100%; border:none; }
</style>
	</head>
	<body>
		<iframe src="https://cms.my1.es/?dominio=<? echo $dominio[0]; ?>">
			
		</iframe>
	</body>
</html>