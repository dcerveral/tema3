





<div id='oculto' style='display:none;'></div>
<? if ($campo['tipo']!="entrada") { ?>

 
	

  <footer class="main-footer " style="background-color:#1A1D1F">
		
	 
		 
		<div class="footer-copyright  "> 
   
    <div class="container">
			<div class="col-lg-12">
				<p>
					&nbsp;
				</p>
			</div>
			
		 
			<div class="col-lg-3 ">
					<?	//Buscamos los widget de la pie 1
					$consulta_left="Select * FROM contenido WHERE tipo='footer-uno' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <span style="color:white"><? echo $widget ['titulo']; ?></span>
						<? echo $widget ['subtitulo'];
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
			</div>
			<div class="col-lg-3  ">
					<?	//Buscamos los widget de la pie 2
					$consulta_left="Select * FROM contenido WHERE tipo='footer-dos' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <span style="font-size:1.2em; color:white; line-height:30px;"><? echo $widget ['titulo']; ?></span>
				<br>
						<? echo $widget ['subtitulo'];
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
			</div>
			<div class="col-lg-3   ">
				<?	//Buscamos los widget de la pie tres
					$consulta_left="Select * FROM contenido WHERE tipo='footer-tres' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <span style="font-size:1.2em; color:white; line-height:30px;"><? echo $widget ['titulo']; ?></span>
				<br>
						<? echo $widget ['subtitulo'];
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
			</div>
			<div class="col-lg-3 ">
				<?	//Buscamos los widget de la pie 4
					$consulta_left="Select * FROM contenido WHERE tipo='footer-cuatro' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <span style="font-size:1.2em; color:white; line-height:30px;"><? echo $widget ['titulo']; ?></span>
				<br>
						<? echo $widget ['subtitulo'];
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
			</div>
			<div class="col-lg-12">
				<p>
					&nbsp;
				</p>
			</div>
			 </div>
		 
		</div>
		
  </footer>
 <footer class="main-footer bg-black" style="border-top: 0px;">
		
	 
		 
		<div class="footer-copyright text-center "> 
   
    <div class="container">
			
			
			<div class="col-lg-12">
			<span  style="color:#B5AFAF;" > &copy; <? echo date('Y'); ?></span> <a style="color:#B5AFAF;" href="https://my1.es">Desarrollado por my1.es</a>
			</div>
		 
		 
			
			 </div>
		 
		</div>
		
  </footer>
	
<? } ?>

  <script src="/cms/<? echo $conf['tema']; ?>/js/jquery-2.2.3.min.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/bootstrap.min.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/jquery.slimscroll.min.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/fastclick.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/app.min.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/demo.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/masonry.pkgd.min.js"></script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/base48.min.js"></script>
  <script>
    var tamano = window.innerWidth;
    if (tamano > 800) {
      $('.flex_grid').flexImages({
        rowHeight: 300,
        truncate: false
      });
    } else {
      $('.flex_grid').flexImages({
        rowHeight: 180,
        truncate: false
      });
    }
    $(window).resize(function() {
      var tamano = window.innerWidth;
      if (tamano > 800) {
        $('.flex_grid').flexImages({
          rowHeight: 300,
          truncate: false
        });
      } else {
        $('.flex_grid').flexImages({
          rowHeight: 180,
          truncate: false
        });
      }
    });
    $('.flex_grid120').flexImages({
      rowHeight: 120,
      truncate: false
    });
    $(window).load(function() {
      $('.carousel').carousel();
      $('.grid').masonry({
        itemSelector: '.grid-item',
      });  
    });
     
  </script>
  </script>
  <script src="/cms/<? echo $conf['tema']; ?>/js/icheck.min.js"></script>
  <script>
    $(function() {
          $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional }); });
  </script>
 


</body>

 

</html>
