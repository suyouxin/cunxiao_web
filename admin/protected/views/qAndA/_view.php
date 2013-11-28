<?php
/* @var $this QAndAController */
/* @var $data QAndA */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->QA_id), array('view', 'id'=>$data->QA_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_no')); ?>:</b>
	<?php echo CHtml::encode($data->QA_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_qustion')); ?>:</b>
	<?php echo CHtml::encode($data->QA_qustion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_answer')); ?>:</b>
	<?php echo CHtml::encode($data->QA_answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_KEY_1')); ?>:</b>
	<?php echo CHtml::encode($data->QA_KEY_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_KEY_2')); ?>:</b>
	<?php echo CHtml::encode($data->QA_KEY_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_KEY_3')); ?>:</b>
	<?php echo CHtml::encode($data->QA_KEY_3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_TEMP')); ?>:</b>
	<?php echo CHtml::encode($data->QA_TEMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_time')); ?>:</b>
	<?php echo CHtml::encode($data->QA_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QA_who')); ?>:</b>
	<?php echo CHtml::encode($data->QA_who); ?>
	<br />

	*/ ?>

</div>