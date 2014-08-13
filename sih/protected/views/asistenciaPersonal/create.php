<?php
/* @var $this AsistenciaPersonalController */
/* @var $model AsistenciaPersonal */

$this->breadcrumbs=array(
	'Asistencia Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AsistenciaPersonal', 'url'=>array('index')),
	array('label'=>'Manage AsistenciaPersonal', 'url'=>array('admin')),
);
?>

<h1>Create AsistenciaPersonal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>