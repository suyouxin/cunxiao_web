<?php
/* @var $this OneconnController */
/* @var $data Oneconn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->one_id), array('view', 'id'=>$data->one_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_name')); ?>:</b>
	<?php echo CHtml::encode($data->one_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_city')); ?>:</b>
	<?php echo CHtml::encode($data->one_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_email')); ?>:</b>
	<?php echo CHtml::encode($data->one_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_tel')); ?>:</b>
	<?php echo CHtml::encode($data->one_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_stu_id')); ?>:</b>
	<?php echo CHtml::encode($data->one_stu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_time')); ?>:</b>
	<?php echo CHtml::encode($data->one_time); ?>
	<br />


</div>