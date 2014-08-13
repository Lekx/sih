<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */

$this->breadcrumbs=array(
	'Roles Moduloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>Create RolesModulos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>