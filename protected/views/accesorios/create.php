<?php
$this->breadcrumbs=array(
	'Accesorioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Manage Accesorios', 'url'=>array('admin')),
);
?>

<h1>Create Accesorios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>