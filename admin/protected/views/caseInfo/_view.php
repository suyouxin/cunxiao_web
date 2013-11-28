<?php
/* @var $this CaseInfoController */
/* @var $data CaseInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_info_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->case_info_id), array('view', 'id'=>$data->case_info_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_in_id')); ?>:</b>
	<?php echo CHtml::encode($data->case_in_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_in_no')); ?>:</b>
	<?php echo CHtml::encode($data->case_in_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_in_title')); ?>:</b>
	<?php echo CHtml::encode($data->case_in_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_in_con')); ?>:</b>
	<?php echo CHtml::encode($data->case_in_con); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_in_time')); ?>:</b>
	<?php echo CHtml::encode($data->case_in_time); ?>
	<br />


</div>