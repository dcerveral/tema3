<div class="enigma_blog_area ">



  <div class="container">
    <div class="row">

      <? if ($seccion['titulo'] || $seccion['subtitulo']) { ?>
        <div class="col-lg-12 col-xs-12">
          <div class="enigma_heading_title" style="margin-bottom:0px;">

            <h3>
              <? echo $seccion['titulo']; ?>
            </h3>
            <? if ($seccion['subtitulo']) { ?>
              <h4>
                <? echo $seccion['subtitulo']; ?>
              </h4>
              <? } ?>
          </div>
        </div>
        <? } ?>
 <div class="col-lg-7 col-xs-12">


            <? echo $seccion['descripcion']; ?>


          </div>

          <div class="col-lg-5 col-xs-12"  >
            <img src="/img/600_<? echo $seccion['foto']; ?>" style="padding:10px;" class="img-responsive" alt="<? echo $seccion['titulo']; ?>">
            <div class="enigma_slider_shadow"></div>
          </div>
         
    </div>
  </div>


</div>