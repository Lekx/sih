<?php
/* @var $this NominaController */
/* @var $model Nomina */

$this->breadcrumbs=array(
	'Nominas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nomina', 'url'=>array('index')),
	array('label'=>'Create Nomina', 'url'=>array('create')),
	array('label'=>'Update Nomina', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nomina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nomina', 'url'=>array('admin')),
);
?>

<h1>View Nomina #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_persona',
		'sueldo_base',
		'horas_extra',
		'dias_trabajados',
		'imss',
		'isr',
		'periodo_pago_inicio',
		'periodo_pago_fin',
		'estatus',
	),
)); ?>
