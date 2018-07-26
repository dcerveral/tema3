<? 
header("Content-type: text/css");

include('conex.php');

//Cargamos la configuración
$consulta="SELECT * FROM conf;";
$sql=mysqli_query($conex,$consulta);
while ($opciones=mysqli_fetch_array($sql)){
  
  $conf[$opciones['campo']]=$opciones['valor'];
    
}
include ($conf['tema'].'/css.php');
?>