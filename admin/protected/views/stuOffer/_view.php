<?php
/* @var $this StuOfferController */
/* @var $data StuOffer */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stu_name), array('view', 'id'=>$data->stu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_number')); ?>:</b>
	<?php echo CHtml::encode($data->stu_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_school')); ?>:</b>
	<?php echo CHtml::encode($data->stu_school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_grade')); ?>:</b>
	<?php echo CHtml::encode($data->stu_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_class')); ?>:</b>
	<?php echo CHtml::encode($data->stu_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_integer')); ?>:</b>
	<?php echo CHtml::encode($data->stu_integer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_maney')); ?>:</b>
	<?php echo CHtml::encode($data->stu_maney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_add')); ?>:</b>
	<?php echo CHtml::encode($data->stu_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_base')); ?>:</b>
	<?php echo CHtml::encode($data->stu_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_inq')); ?>:</b>
	<?php echo CHtml::encode($data->stu_inq); ?>
	<br />

	<?php echo $data->stu_imag; ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_add')); ?>:</b>
	<?php echo CHtml::encode($data->stu_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_school')); ?>:</b>
	<?php echo CHtml::encode($data->stu_school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_imag')); ?>:</b>
	<?php echo CHtml::encode($data->stu_imag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_grade')); ?>:</b>
	<?php echo CHtml::encode($data->stu_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_class')); ?>:</b>
	<?php echo CHtml::encode($data->stu_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_wait')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_wait); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_inq')); ?>:</b>
	<?php echo CHtml::encode($data->stu_inq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_name')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_time')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_mail_time')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_mail_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_showname')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_showname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_mode')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_email')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_tel')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_city')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_add')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_maney')); ?>:</b>
	<?php echo CHtml::encode($data->stu_maney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_integer')); ?>:</b>
	<?php echo CHtml::encode($data->stu_integer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_1')); ?>:</b>
	<?php echo CHtml::encode($data->stu_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_2')); ?>:</b>
	<?php echo CHtml::encode($data->stu_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_3')); ?>:</b>
	<?php echo CHtml::encode($data->stu_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_4')); ?>:</b>
	<?php echo CHtml::encode($data->stu_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_5')); ?>:</b>
	<?php echo CHtml::encode($data->stu_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_6')); ?>:</b>
	<?php echo CHtml::encode($data->stu_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_7')); ?>:</b>
	<?php echo CHtml::encode($data->stu_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_8')); ?>:</b>
	<?php echo CHtml::encode($data->stu_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_9')); ?>:</b>
	<?php echo CHtml::encode($data->stu_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_10')); ?>:</b>
	<?php echo CHtml::encode($data->stu_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_11')); ?>:</b>
	<?php echo CHtml::encode($data->stu_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_12')); ?>:</b>
	<?php echo CHtml::encode($data->stu_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_work_process')); ?>:</b>
	<?php echo CHtml::encode($data->stu_work_process); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_timenow')); ?>:</b>
	<?php echo CHtml::encode($data->stu_timenow); ?>
	<br />

	*/ ?>

</div>
