<?php
/* @var $this NominaController */
/* @var $model Nomina */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_persona'); ?>
		<?php echo $form->textField($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldo_base'); ?>
		<?php echo $form->textField($model,'sueldo_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horas_extra'); ?>
		<?php echo $form->textField($model,'horas_extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_trabajados'); ?>
		<?php echo $form->textField($model,'dias_trabajados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imss'); ?>
		<?php echo $form->textField($model,'imss'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isr'); ?>
		<?php echo $form->textField($model,'isr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo_pago_inicio'); ?>
		<?php echo $form->textField($model,'periodo_pago_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo_pago_fin'); ?>
		<?php echo $form->textField($model,'periodo_pago_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->