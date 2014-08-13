<?php
/* @var $this NominaController */
/* @var $model Nomina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nomina-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_persona'); ?>
		<?php echo $form->textField($model,'id_persona'); ?>
		<?php echo $form->error($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldo_base'); ?>
		<?php echo $form->textField($model,'sueldo_base'); ?>
		<?php echo $form->error($model,'sueldo_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horas_extra'); ?>
		<?php echo $form->textField($model,'horas_extra'); ?>
		<?php echo $form->error($model,'horas_extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_trabajados'); ?>
		<?php echo $form->textField($model,'dias_trabajados'); ?>
		<?php echo $form->error($model,'dias_trabajados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imss'); ?>
		<?php echo $form->textField($model,'imss'); ?>
		<?php echo $form->error($model,'imss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isr'); ?>
		<?php echo $form->textField($model,'isr'); ?>
		<?php echo $form->error($model,'isr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo_pago_inicio'); ?>
		<?php echo $form->textField($model,'periodo_pago_inicio'); ?>
		<?php echo $form->error($model,'periodo_pago_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo_pago_fin'); ?>
		<?php echo $form->textField($model,'periodo_pago_fin'); ?>
		<?php echo $form->error($model,'periodo_pago_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus'); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->