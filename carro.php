 <?

//Conectamos

include ('conex.php');

//Cargamos la configuración
$consulta="SELECT * FROM conf;";
$sql=mysqli_query($conex,$consulta);
while ($opciones=mysqli_fetch_array($sql)){
  
  $conf[$opciones['campo']]=$opciones['valor'];
    
}
 
  
 
//sanity
 ob_start("sanitize_output");


include ($conf['tema'].'/header.php');
include ($conf['tema'].'/carrito.php');
include ($conf['tema'].'/footer.php');

   file_put_contents('cache/temp.html',ob_get_flush(),LOCK_EX);

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
			 
		$html .= " <li    class='menu-item  ";
				if ($menu['items'][$itemId]['slug'] == $_GET['pag']){$html .= " active ";}
						if ( $menu['items'][$itemId]['id']==23){$html .= " active2 ";}
		$html .= "'> " ;
					 
				$html .=	"<a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>       ".$menu['items'][$itemId]['titulo']. "</a> </li>"; 
			
						 
			 }
		

		//dropdown
		if(isset($menu['parents'][$itemId])) {$html .= "<li   class='menu-item dropdown";
			if ($menu['items'][$itemId]['slug'] == $_GET['pag']){$html .= " active ";}
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
			 
		$html .= " <li  class='menu-item ' > ";
					 
				$html .=	"<a href='/";
					//URL
					 if ($menu['items'][$itemId]['ARR']==0){$html .=$menu['items'][$itemId]['url'];}else{$html .= $menu['items'][$itemId]['slug'];}
				$html .= "'>       ".$menu['items'][$itemId]['titulo']. "</a> </li>"; 
			
						 
			 }
		

		//dropdown
		if(isset($menu['parents'][$itemId])) {$html .= "<li class='menu-item '  >";
					
         
					
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