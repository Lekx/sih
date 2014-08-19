<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Areases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Nueva Área', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#areas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>GESTIÓN DE AREAS Y PUESTOS</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'areas-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {add} ','header'=>'<b>Acciones</b>','htmlOptions'=>array('width'=>'90px'),
				'buttons'=>array(
                    'add' => array(
                        'label'=>'Agregar Nuevo Puesto', 
                        'url'=>"CHtml::normalizeUrl(array('areas/create', 'id'=>\$data->id))",
                        'imageUrl'=>'images/add.png', // image URL of the button. If not set or false, a text link is used
                      //'options' => array('class'=>'add'), // HTML options for the button
                    ),
            	),
		),
		//'id',
		'nombre',
		//'estatus',
		array(
            'header' => '<b>Puestos Vinculados</b>',
            'value' => array($this,'puestosRelacionados'),'type'=>'raw'
        ),

	),
)); ?>
