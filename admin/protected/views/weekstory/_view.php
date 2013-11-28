<?php
/* @var $this WeekstoryController */
/* @var $data Weekstory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->week_id), array('view', 'id'=>$data->week_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_type')); ?>:</b>
	<?php echo CHtml::encode($data->week_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_con')); ?>:</b>
	<?php echo CHtml::encode($data->week_con); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_pic')); ?>:</b>
	<?php echo CHtml::encode($data->week_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_who')); ?>:</b>
	<?php echo CHtml::encode($data->week_who); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_time')); ?>:</b>
	<?php echo CHtml::encode($data->week_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_temp')); ?>:</b>
	<?php echo CHtml::encode($data->week_temp); ?>
	<br />


</div>