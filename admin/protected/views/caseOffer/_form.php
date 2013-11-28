<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'case-offer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'case_id'); ?>
		<?php echo $form->textField($model,'case_id'); ?>
		<?php echo $form->error($model,'case_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_no'); ?>
		<?php echo $form->textField($model,'case_no'); ?>
		<?php echo $form->error($model,'case_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_name'); ?>
		<?php echo $form->textArea($model,'case_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_schoolname'); ?>
		<?php echo $form->textArea($model,'case_schoolname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_schoolname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_class'); ?>
		<?php echo $form->textArea($model,'case_class',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_member_up'); ?>
		<?php echo $form->textArea($model,'case_member_up',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_member_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_member_lead'); ?>
		<?php echo $form->textArea($model,'case_member_lead',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_member_lead'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_member_do'); ?>
		<?php echo $form->textArea($model,'case_member_do',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_member_do'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_intro'); ?>
		<?php echo $form->textArea($model,'case_intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_title_pic'); ?>
		<?php echo $form->textArea($model,'case_title_pic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_title_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_pic'); ?>
		<?php echo $form->textArea($model,'case_pic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_plan'); ?>
		<?php echo $form->textArea($model,'case_plan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_plan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_budget'); ?>
		<?php echo $form->textArea($model,'case_budget',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_use'); ?>
		<?php echo $form->textArea($model,'case_use',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_expect'); ?>
		<?php echo $form->textArea($model,'case_expect',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_expect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_blog'); ?>
		<?php echo $form->textArea($model,'case_blog',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_blog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_offer_name'); ?>
		<?php echo $form->textArea($model,'case_offer_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_offer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_offer_tel'); ?>
		<?php echo $form->textArea($model,'case_offer_tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_offer_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_offer_email'); ?>
		<?php echo $form->textArea($model,'case_offer_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_offer_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_report'); ?>
		<?php echo $form->textArea($model,'case_report',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_spend'); ?>
		<?php echo $form->textArea($model,'case_spend',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_spend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_do_state'); ?>
		<?php echo $form->textArea($model,'case_do_state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_do_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_maney_state'); ?>
		<?php echo $form->textArea($model,'case_maney_state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_maney_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_ps'); ?>
		<?php echo $form->textArea($model,'case_ps',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_ps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_time'); ?>
		<?php echo $form->textArea($model,'case_time',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_autotime'); ?>
		<?php echo $form->textField($model,'case_autotime'); ?>
		<?php echo $form->error($model,'case_autotime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->