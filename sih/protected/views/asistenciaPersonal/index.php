<?php
/* @var $this AsistenciaPersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistencia Personals',
);

$this->menu=array(
	array('label'=>'Create AsistenciaPersonal', 'url'=>array('create')),
	array('label'=>'Manage AsistenciaPersonal', 'url'=>array('admin')),
);
?>

<h1>Asistencia Personals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
