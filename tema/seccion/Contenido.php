 	<?	if ($seccion['array3']==0) {$seccion['array3']=4;};

						$sqlc = "SELECT id,  superior FROM contenido WHERE superior='".$seccion['array']."'   ";

	 
			 
	 
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
			
		 
	}
 
							$SQL="";
							$entradas="";
						  $entradas= ListarEntradas($seccion['array'] , $menus, 0, 0);
 

		$ids=explode(',',$entradas);

		foreach ($ids AS &$valor){
			if ($valor>-1){
				$SQL.= " OR id='".$valor."'";
			}
		}		

		 $SQL.= " OR id='".$seccion['array']."'";
		
		include ('Contenido-'.$seccion['array2'].'.php');
 
?>
