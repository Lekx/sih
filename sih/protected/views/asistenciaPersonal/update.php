<?php
/* @var $this AsistenciaPersonalController */
/* @var $model AsistenciaPersonal */

$this->breadcrumbs=array(
	'Asistencia Personals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsistenciaPersonal', 'url'=>array('index')),
	array('label'=>'Create AsistenciaPersonal', 'url'=>array('create')),
	array('label'=>'View AsistenciaPersonal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AsistenciaPersonal', 'url'=>array('admin')),
);
?>

<h1>Update AsistenciaPersonal <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>