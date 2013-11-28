<?php
/* @var $this SchoolController */
/* @var $data School */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->school_id), array('view', 'id'=>$data->school_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_name')); ?>:</b>
	<?php echo CHtml::encode($data->school_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_title')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_add')); ?>:</b>
	<?php echo CHtml::encode($data->school_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_case')); ?>:</b>
	<?php echo CHtml::encode($data->school_case); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_1')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_2')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_3')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_4')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_5')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_image_6')); ?>:</b>
	<?php echo CHtml::encode($data->school_image_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_introduce_1')); ?>:</b>
	<?php echo CHtml::encode($data->school_introduce_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_introduce_2')); ?>:</b>
	<?php echo CHtml::encode($data->school_introduce_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_introduce_3')); ?>:</b>
	<?php echo CHtml::encode($data->school_introduce_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_number')); ?>:</b>
	<?php echo CHtml::encode($data->school_number); ?>
	<br />

	*/ ?>

</div>