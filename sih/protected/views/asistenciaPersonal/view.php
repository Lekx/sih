<?php
/* @var $this AsistenciaPersonalController */
/* @var $model AsistenciaPersonal */

$this->breadcrumbs=array(
	'Asistencia Personals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AsistenciaPersonal', 'url'=>array('index')),
	array('label'=>'Create AsistenciaPersonal', 'url'=>array('create')),
	array('label'=>'Update AsistenciaPersonal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AsistenciaPersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsistenciaPersonal', 'url'=>array('admin')),
);
?>

<h1>View AsistenciaPersonal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_persona',
		'hora_entrada',
		'hora_salida',
		'fecha',
	),
)); ?>
