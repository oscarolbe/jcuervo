
<h2>Administrador Usuarios</h2>

<a href="<?php echo CController::createUrl('app/admin'); ?>">Regresar</a>
<div id="myerrordiv"></div>
<?php
//$image = CHtml::image($imageUrl, $data->name, array('class' => 'deals_product_image'));

//echo CHtml::link($image, array('items/viewslug', 'slug'=>$data->slug));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'enableSorting' => false,
	'ajaxUpdateError'=>'function(xhr,ts,et,err){ $("#myerrordiv").text(err); }',
	'columns'=>array(
		array(
            'header' => 'Facebook', 
	        'value'=>'  CHtml::link(CHtml::image("https://graph.facebook.com/".$data->id_facebook."/picture"), "https://www.facebook.com/".$data->id_facebook) ',
	        'type'=>'raw',
        ),
		'correo',
		'nombre',
		array(
            'header' => 'es Fan?',
            'name' => 'isFan',
            'value'=>' Usuarios::isFan($data->id,$data->isFan); '
        ),
        array(
            'header' => 'comics creados',
	        'value'=>' count( UsuariosHasTblComics::getMyComics($data->id) ) ',
	        'type'=>'raw',
	        'htmlOptions'=>array('width'=>5),
        ),
       	/* array(
            'header' => 'No Compartidos totales',
            'name' => 'isFan',
            'value'=>' Comics::NoCompartidosTotalUsuario($data->id); '
        ),
        */
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

<br><br>


<?php 
	$comics = UsuariosHasTblComics::getComicsSplash();
    if(count($comics)==4){
      foreach ($comics as $key => $value) { ?>
      	<!--<div class="itemThumbnail"><div><a href="#"><img src="<?php echo Yii::app()->request->baseUrl."/Comics/".$value['imagen']; ?>"></a></div></div>-->
		<?php
			echo "imagen:".$value['imagen'];
      }
    } 
?>