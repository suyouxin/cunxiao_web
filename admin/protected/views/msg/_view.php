<?php
/* @var $this MsgController */
/* @var $data Msg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->m_ID), array('view', 'id'=>$data->m_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_name')); ?>:</b>
	<?php echo CHtml::encode($data->m_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_mail')); ?>:</b>
	<?php echo CHtml::encode($data->m_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_con')); ?>:</b>
	<?php echo CHtml::encode($data->m_con); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_time')); ?>:</b>
	<?php echo CHtml::encode($data->m_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_re')); ?>:</b>
	<?php echo CHtml::encode($data->m_re); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_re_time')); ?>:</b>
	<?php echo CHtml::encode($data->m_re_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('m_city')); ?>:</b>
	<?php echo CHtml::encode($data->m_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_ip')); ?>:</b>
	<?php echo CHtml::encode($data->m_ip); ?>
	<br />

	*/ ?>

</div>