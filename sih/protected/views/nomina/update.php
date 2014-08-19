<?php
/* @var $this NominaController */
/* @var $model Nomina */

$this->breadcrumbs=array(
	'Nominas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nomina', 'url'=>array('index')),
	array('label'=>'Create Nomina', 'url'=>array('create')),
	array('label'=>'View Nomina', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nomina', 'url'=>array('admin')),
);
?>

<h1>Update Nomina <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>