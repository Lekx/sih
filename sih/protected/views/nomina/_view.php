<?php
/* @var $this NominaController */
/* @var $data Nomina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sueldo_base')); ?>:</b>
	<?php echo CHtml::encode($data->sueldo_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horas_extra')); ?>:</b>
	<?php echo CHtml::encode($data->horas_extra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_trabajados')); ?>:</b>
	<?php echo CHtml::encode($data->dias_trabajados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imss')); ?>:</b>
	<?php echo CHtml::encode($data->imss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isr')); ?>:</b>
	<?php echo CHtml::encode($data->isr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo_pago_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->periodo_pago_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo_pago_fin')); ?>:</b>
	<?php echo CHtml::encode($data->periodo_pago_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	*/ ?>

</div>