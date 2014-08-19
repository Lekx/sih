<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puestos', 'url'=>array('index')),
	array('label'=>'Manage Puestos', 'url'=>array('admin')),
);
?>

<h1>Create Puestos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>