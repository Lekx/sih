<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'Update Personas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Personas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>View Personas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'ap_pat',
		'ap_mat',
		'fecha_nac',
		'nss',
		'rfc',
		'curp',
		'sexo',
		'estado_civil',
		'escolaridad',
		'fecha_ingreso',
		'fecha_creacion',
		'id_area_puesto',
		'id_personas_info',
		'id_turno',
		'estatus',
	),
)); ?>
