<?php
/* @var $this LibraryconnController */
/* @var $data Libraryconn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->li_id), array('view', 'id'=>$data->li_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_name')); ?>:</b>
	<?php echo CHtml::encode($data->li_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_city')); ?>:</b>
	<?php echo CHtml::encode($data->li_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_email')); ?>:</b>
	<?php echo CHtml::encode($data->li_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_tel')); ?>:</b>
	<?php echo CHtml::encode($data->li_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_job')); ?>:</b>
	<?php echo CHtml::encode($data->li_job); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_time')); ?>:</b>
	<?php echo CHtml::encode($data->li_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('li_do_1')); ?>:</b>
	<?php echo CHtml::encode($data->li_do_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_do_2')); ?>:</b>
	<?php echo CHtml::encode($data->li_do_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_do_3')); ?>:</b>
	<?php echo CHtml::encode($data->li_do_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_do_4')); ?>:</b>
	<?php echo CHtml::encode($data->li_do_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('li_do_5')); ?>:</b>
	<?php echo CHtml::encode($data->li_do_5); ?>
	<br />

	*/ ?>

</div>