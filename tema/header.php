 <!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	  
	<title><? echo $campo['title']; ?></title>
 
	<meta name="description" content="<? echo $campo['description']; ?>" />
	

	<meta name="robots" content="<? echo $conf['robots']; ?>" />
	 
	<link rel="canonical" href="<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<? echo $campo['title']; ?>" />
	<meta property="og:description" content="<? echo $campo['description']; ?>" />
	<meta property="og:url" content="<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>" />
	<meta property="og:site_name" content="<? echo $campo['title']; ?>" />
	<meta property="og:image" content="/img/<? echo $campo['foto']; ?>" />
	 
	 

	<link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='https://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="<? echo $campo['title']; ?>" href="/feed" />
 
	
	
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/ionicons.min.css">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/_all-skins.min.css">
	
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/base.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/_all.css">
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/_all-2.css">
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/_all-3.css">
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/_all-4.css">
	
	
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/base.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/css-cuadrado.css">
	
	
	
	
	
	
	<meta name="generator" content="cms.my1.es" />

 
	<link rel="icon" href="/img/32_<? echo $conf['fabicon']; ?>" sizes="32x32" />
	<link rel="icon" href="/img/192_<? echo $conf['fabicon']; ?>" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="/img/32_<? echo $conf['fabicon']; ?>" sizes="32x32" />
	<meta name="msapplication-TileImage" content="/img/64_<? echo $conf['fabicon']; ?>"  />
	 <?  echo $conf['header']; ?>
	<style>
	<? include('css.php'); ?>
	
	</style>
</head>


<body class="hold-transition skin-purple fixed layout-top-nav" style="max-width:100%">
  <header class="main-header "  style="max-width:100%">
   
		
		
		
		

		
		
		
		
		
		
		
		
    <nav class="navbar navbar-static-top " style="max-width:100%;background-color:<? echo $conf['primario']; ?>">
			
			
			
			
			
			
			
			
			
      <div class="container">
        <div class="navbar-header" style=" height:50px;overflow:hidden;"> <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar-collapse" style="float:left"> <i class="fa fa-bars"></i> </button>
          <div class="navbar-custom-menu hidden-lg hidden-md hidden-sm">
            <ul class="nav navbar-nav">
           
					<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-principal'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
					echo "<li><a href='/".$item['slug']."'><i class='fa'>&#xf". dechex ($item['array2'])."</i> <span class='hidden-xs hidden-sm'>".$item['titulo']. "</span></a></li>";
				
			}
			?>	
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            	<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-principal'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
					echo "<li><a href='/".$item['slug']."'><i class='fa'>&#xf". dechex ($item['array2'])."</i> ".$item['titulo']. "</a></li>";
				
			}
			?>	
        
  
            
          </ul>
        </div>
      </div>
    </nav>
		
 
  </header>
	
 
		
		
		
		
								
								
           
	 
	