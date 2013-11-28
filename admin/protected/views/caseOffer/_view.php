<?php
/* @var $this CaseOfferController */
/* @var $data CaseOffer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->case_id), array('view', 'id'=>$data->case_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_no')); ?>:</b>
	<?php echo CHtml::encode($data->case_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_name')); ?>:</b>
	<?php echo CHtml::encode($data->case_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_schoolname')); ?>:</b>
	<?php echo CHtml::encode($data->case_schoolname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_class')); ?>:</b>
	<?php echo CHtml::encode($data->case_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_member_up')); ?>:</b>
	<?php echo CHtml::encode($data->case_member_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_member_lead')); ?>:</b>
	<?php echo CHtml::encode($data->case_member_lead); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('case_member_do')); ?>:</b>
	<?php echo CHtml::encode($data->case_member_do); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_intro')); ?>:</b>
	<?php echo CHtml::encode($data->case_intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_title_pic')); ?>:</b>
	<?php echo CHtml::encode($data->case_title_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_pic')); ?>:</b>
	<?php echo CHtml::encode($data->case_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_plan')); ?>:</b>
	<?php echo CHtml::encode($data->case_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_budget')); ?>:</b>
	<?php echo CHtml::encode($data->case_budget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_use')); ?>:</b>
	<?php echo CHtml::encode($data->case_use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_expect')); ?>:</b>
	<?php echo CHtml::encode($data->case_expect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_blog')); ?>:</b>
	<?php echo CHtml::encode($data->case_blog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_offer_name')); ?>:</b>
	<?php echo CHtml::encode($data->case_offer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_offer_tel')); ?>:</b>
	<?php echo CHtml::encode($data->case_offer_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_offer_email')); ?>:</b>
	<?php echo CHtml::encode($data->case_offer_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_report')); ?>:</b>
	<?php echo CHtml::encode($data->case_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_spend')); ?>:</b>
	<?php echo CHtml::encode($data->case_spend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_do_state')); ?>:</b>
	<?php echo CHtml::encode($data->case_do_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_maney_state')); ?>:</b>
	<?php echo CHtml::encode($data->case_maney_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_ps')); ?>:</b>
	<?php echo CHtml::encode($data->case_ps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_time')); ?>:</b>
	<?php echo CHtml::encode($data->case_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_autotime')); ?>:</b>
	<?php echo CHtml::encode($data->case_autotime); ?>
	<br />

	*/ ?>

</div>