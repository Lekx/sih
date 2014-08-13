<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */

$this->breadcrumbs=array(
	'Areas Puestoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AreasPuestos', 'url'=>array('index')),
	array('label'=>'Manage AreasPuestos', 'url'=>array('admin')),
);
?>

<h1>Create AreasPuestos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>