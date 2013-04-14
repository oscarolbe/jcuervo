<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memegenerator Jose Cuervo Especial</title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
     <?  $idFb = split('/', $_SERVER['PATH_INFO']); if(count($idFb)==4){ if($idFb[2]=='Profile'){ Yii::app()->session['nidFb']=$idFb[3]; } } 
        $protocol="http://"; if(isset($_SERVER['HTTPS'])){ $protocol="https://"; }else{ $protocol="http://"; }
    ?>
    <script> 
             var iU="<? echo Yii::app()->session['nidFb']; ?>"; 
             var protocol="<? echo $protocol; ?>"; 
    </script> 
  </head>

  <body class="lb">
    <div id="detalle">
      <div id="pic">
        <? echo CHtml::image(Yii::app()->request->baseUrl."/Comics/".$json['comic']['comic']['imagen']); ?>
          <? if($json['comic']['comic']['eliminar']){ ?>
             <a href="#" class="btn delc" id="<? echo $json['comic']['comic']['id']; ?>"><i class="icon-trash"></i> Eliminar</a>
         <? } ?>     
        <div><span><? echo $json['comic']['comic']['NoCompartido']; ?></span><a href="#" id="<? echo $json['comic']['comic']['id'];  ?>" class="btn share"><i class="icon-share"></i> Compartir</a></div>
      </div>
      <div id="comentarios">
        <div><?echo CHtml::image('https://graph.facebook.com/'.$json['comic']['usuario']['idFb'].'/picture')?><span><? echo $json['comic']['usuario']['nombre']; ?></span></div>
        <form>
          <textarea id="com"></textarea>
          <button type="button" class="btn com" id="<? echo $json['comic']['comic']['id'];  ?>"><i class="icon-comment"></i> Comentar</button>
        </form>
        
        <div id="comics">
       

       <? 
           if(is_array($json['comic']['comic']['comments'])){
                foreach ($json['comic']['comic']['comments'] as $key => $value) {
        ?>        
         <article id="comentario<? echo $value['id']; ?>">
          <h3><?echo $value['nombre']; ?></h3>
          <p><? echo $value['comment'] ?></p>
          <? if($value['delete']){ ?>
             <a href="#" class="btn delcom" id="<? echo $value['id']; ?>"><i class="icon-trash"></i> Eliminar</a>
          <? } ?>
        </article>
              <?        
                }
              }
            ?>
      
        </div>
      </div>
    </div>
      
    <script type="text/javascript" src="/php2/jcuervo/assets/11f59b72/jquery.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/kinetic-v4.3.3.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lazyload.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easytabs.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.hashchange.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/all.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>
    <script type="text/javascript">
        $(document).live("keypress",function(e) {
          if(e.which == 13) {
              console.log("e");
          }
        });
    </script>

  </body>
</html>