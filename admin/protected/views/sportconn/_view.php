<?php
/* @var $this SportconnController */
/* @var $data Sportconn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sp_id), array('view', 'id'=>$data->sp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_name')); ?>:</b>
	<?php echo CHtml::encode($data->sp_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_city')); ?>:</b>
	<?php echo CHtml::encode($data->sp_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_email')); ?>:</b>
	<?php echo CHtml::encode($data->sp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_tel')); ?>:</b>
	<?php echo CHtml::encode($data->sp_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_time')); ?>:</b>
	<?php echo CHtml::encode($data->sp_time); ?>
	<br />


</div>