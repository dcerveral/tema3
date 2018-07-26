<?
			if ($widget['array3']==0) {$widget['array3']=10;};

						$sqlc = "SELECT id,  superior FROM contenido WHERE activo='1'    ";
 
	 
	$result = mysqli_query($conex, $sqlc) or die("database error:". mysqli_error($conex));
	// Create an array to conatin a list of items and parents
	$menus = array(
			'items' => array(),
			'parents' => array()
	);
	// Builds the array lists with data from the SQL result
	while ($items = mysqli_fetch_assoc($result)) {
			// Create current menus item id into array
			$menus['items'][$items['id']] = $items;
			// Creates list of all items with children
			$menus['parents'][$items['superior']][] = $items['id'];
			
		 
	}						$SQL="";
							$entradas="";
						  $entradas= ListarEntradas($widget['array'] , $menus, 0, 0);

		//	echo $entradas."<p>";		  

		$ids=explode(',',$entradas);

		foreach ($ids AS &$valor){
			if ($valor){
				if ($valor>0){	$SQL.= " OR id=".$valor;}
			}
		}		

		$SQL.= " OR superior=".$widget['array'];
		 
	$TIPO=" (tipo='pagina' OR tipo='entrada' OR tipo='producto' OR tipo='categoria') AND ";
	if ($widget['array2']=="pagina") 		{$TIPO=" tipo='pagina' AND ";}
	if ($widget['array2']=="entrada") 	{$TIPO=" tipo='entrada' AND ";}
	if ($widget['array2']=="producto")	{$TIPO=" tipo='producto' AND ";}
	if ($widget['array2']=="categoria")	{$TIPO=" tipo='categoria' AND ";}

		 $consulta ="SELECT titulo,slug,tipo FROM contenido WHERE  ".$TIPO." activo='1' AND (id=0 ".$SQL.")  ORDER BY act DESC  LIMIT ".$widget['array3'];
 
 // echo $consulta;
  
 
		echo " <ul>";
 			$sql=mysqli_query($conex,$consulta);
					while ($entrada=mysqli_fetch_array($sql)){
						if ($entrada['titulo']){
							echo "<li class='item '><a style='color:#7A7B7C' href='/".$entrada['slug']."'>".$entrada['titulo']."</a>";
						}
					}
			echo "</ul>"; 
			 
 
 

?>
 

 