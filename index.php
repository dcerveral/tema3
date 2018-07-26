<? session_start();

 setlocale(LC_TIME,"es_ES");

//Conectamos

include ('conex.php');

//Cargamos la configuración
$consulta="SELECT * FROM conf;";
$sql=mysqli_query($conex,$consulta);
while ($opciones=mysqli_fetch_array($sql)){
  
  $conf[$opciones['campo']]=$opciones['valor'];
    
}
 
//Si es la protada, buscamos la página de inicio
 
  if (!$_GET['pag']){ 
      $consulta="SELECT * FROM contenido WHERE id='".$conf['pagina_inicio']."' LIMIT 1;";
  } 
  else{
    $consulta="SELECT * FROM contenido WHERE slug='".$_GET['pag']."' LIMIT 1;";
  }
 




//Buscamos el contenido
$sql=mysqli_query($conex,$consulta);
$campo=mysqli_fetch_array($sql);


//Averiguamos el nombre y el slug de las paginas de contacto y demas
	$consulta="SELECT id,slug,titulo FROM contenido WHERE id='".$conf['pagina_contacto']."' LIMIT 1;";
	$sql=mysqli_query($conex,$consulta);
	$contacto=mysqli_fetch_array($sql);
 
//Buscamos el número de columnas
 
 
switch($campo['tipo']){
		
		case "producto": 
								$columnas = $conf['columnas_productos'];
								break;
		case "entrada": 
								$columnas = $conf['columnas_entradas'];
								break;
		case "categoria": 
								$columnas = $conf['columnas_categorias'];
								break;
		case "pagina": 
						
								if ($campo['subtipo']=="sencilla"){
									$columnas = $conf['columnas_paginas'];
								} else {
									$columnas = $campo['col'];
								}
								
		
								break;
		
}
 
		switch($columnas){ 
		
				case 0: 	
								$col_left = 0;
								$col_center = 12;
								$col_right = 0;
								break;
				case 1: 	
								$col_left = 3;
								$col_center = 9;
								$col_right = 0;
								break;
				case 2: 	
								$col_left = 0;
								$col_center = 9;
								$col_right = 3;
								break;
				case 3: 	
								$col_left = 3;
								$col_center = 6;
								$col_right = 3;
								break;
		
}
 

//sanity
 ob_start("sanitize_output");


include ($conf['tema'].'/header.php');
include ($conf['tema'].'/body.php');
include ($conf['tema'].'/footer.php');

//file_put_contents('cache/temp.html',ob_get_flush(),LOCK_EX);

//FUNCIONES



function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

function createTreeView($parent, $menu, $arbol, $superior) {
			$arbol++;
	   $html = "";
	   if (isset($menu['parents'][$parent])) { 
		  $html .= " ";
		  
		  
		  
		   foreach ($menu['parents'][$parent] as $itemId) {
			   
			  
			   
			   $count=count($menu['parents'][$parent]);
			  if(!isset($menu['parents'][$itemId])) {
			 
		$html .= " <li    class='   ";
				if ($menu['items'][$itemId]['slug'] == $_GET['pag']){$html .= "   ";}
						if ( $menu['items'][$itemId]['id']==23){$html .= "   ";}
		$html .= "'> " ;
					 
				$html .=	"<a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>       ".$menu['items'][$itemId]['titulo']. "</a> </li>"; 
			
						 
			 }
		

		//dropdown
		if(isset($menu['parents'][$itemId])) {$html .= "<li   class='  dropdown";
			if ($menu['items'][$itemId]['slug'] == $_GET['pag']){$html .= "   ";}
		$html .= "' >";
					
         
					
				$html .=	" <a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>  ".$menu['items'][$itemId]['titulo']. "</a> <ul class='dropdown-menu'>"; 
			 
					 
				 $html .= "";
				 $html .= createTreeView($itemId, $menu, $arbol, $superior);
				
				 
			  } 
		   }
		  
	   }
		if ($arbol>1) { $html .= "</li> </ul> ";}
	   return $html;
	}




function ListarEntradas($parent, $menu, $arbol, $superior) {
			$arbol++;
	   $html = "";
	   if (isset($menu['parents'][$parent])) { 
		  $html .= " ";
		  
		  
		  
		   foreach ($menu['parents'][$parent] as $itemId) {
			 //  echo  $menu['items'][$itemId]['titulo'];
			   
			  if(!isset($menu['parents'][$itemId])) {
			 
		$html .= $menu['items'][$itemId]['id'] .",";  }
		 
		if(isset($menu['parents'][$itemId])) {
			$html .= $menu['items'][$itemId]['id'] .","; 
					 
				 $html .= ListarEntradas($itemId, $menu, $arbol, $superior);
				
				 
			  } 
		   }
		  
	   }
		 
	   return $html;
	}
	 

		 
 //FUNCIONES
function createTreeView2($parent, $menu, $arbol, $superior) {
			$arbol++;
	   $html = "";
	   if (isset($menu['parents'][$parent])) { 
		  $html .= " ";
		  
		  
		  
		   foreach ($menu['parents'][$parent] as $itemId) {
			   
			  
			   
			   $count=count($menu['parents'][$parent]);
			  if(!isset($menu['parents'][$itemId])) {
			 
		$html .= " <li  class='  ' > ";
					 
				$html .=	"<a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>       ".$menu['items'][$itemId]['titulo']. "</a> </li>"; 
			
						 
			 }
		

		//dropdown
		if(isset($menu['parents'][$itemId])) {$html .= "<li class='  '  >";
					
         
					
				$html .=	" <a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0 ){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>".$menu['items'][$itemId]['titulo']. "</a> <ul >"; 
			 
					 
				 $html .= "";
				 $html .= createTreeView2($itemId, $menu, $arbol, $superior);
				
				 
			  } 
		   }
		  
	   }
		if ($arbol>1) { $html .= "</li> </ul> ";}
	   return $html;
	}


?>