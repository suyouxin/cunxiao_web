<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->new_id), array('view', 'id'=>$data->new_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_time')); ?>:</b>
	<?php echo CHtml::encode($data->new_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_writ')); ?>:</b>
	<?php echo CHtml::encode($data->new_writ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_title')); ?>:</b>
	<?php echo CHtml::encode($data->new_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_con')); ?>:</b>
	<?php echo CHtml::encode($data->new_con); ?>
	<br />


</div>