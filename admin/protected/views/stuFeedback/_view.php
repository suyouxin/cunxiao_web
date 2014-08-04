<?php
/* @var $this StuFeedbackController */
/* @var $data StuFeedback */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stu_feedback_id), array('view', 'id'=>$data->stu_feedback_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_number')); ?>:</b>
	<?php echo CHtml::encode($data->stu_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_name')); ?>:</b>
	<?php echo CHtml::encode($data->stu_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_info')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_image')); ?>:</b>
	<?php echo $data->stu_feedback_image; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_image2')); ?>:</b>
	<?php echo $data->stu_feedback_image2; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_image3')); ?>:</b>
	<?php echo $data->stu_feedback_image3; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_time')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_who')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_who); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_stat')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_term')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_term); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_grade')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_feedback_class')); ?>:</b>
	<?php echo CHtml::encode($data->stu_feedback_class); ?>
	<br />


	*/ ?>

</div>
