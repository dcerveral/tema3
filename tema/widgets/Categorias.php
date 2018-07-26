 <?
			 $sqlcat = "SELECT id, titulo, foto, superior, activo, url, array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='categoria'   ORDER BY superior, orden, titulo";

 
	 
	 
	$result = mysqli_query($conex, $sqlcat) or die("database error:". mysqli_error($conex));
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

					echo "<ul>";
					echo createTreeView2($widget['array'], $menus, 0, 0);
					echo "</ul>";

			 



?>
 

 