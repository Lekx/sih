<?php
/* @var $this NominaController */
/* @var $model Nomina */

$this->breadcrumbs=array(
	'Nominas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nomina', 'url'=>array('index')),
	array('label'=>'Manage Nomina', 'url'=>array('admin')),
);
?>

<h1>Create Nomina</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>