<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'case_id'); ?>
		<?php echo $form->textField($model,'case_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_no'); ?>
		<?php echo $form->textField($model,'case_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_name'); ?>
		<?php echo $form->textArea($model,'case_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_schoolname'); ?>
		<?php echo $form->textArea($model,'case_schoolname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_class'); ?>
		<?php echo $form->textArea($model,'case_class',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_member_up'); ?>
		<?php echo $form->textArea($model,'case_member_up',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_member_lead'); ?>
		<?php echo $form->textArea($model,'case_member_lead',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_member_do'); ?>
		<?php echo $form->textArea($model,'case_member_do',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_intro'); ?>
		<?php echo $form->textArea($model,'case_intro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_title_pic'); ?>
		<?php echo $form->textArea($model,'case_title_pic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_pic'); ?>
		<?php echo $form->textArea($model,'case_pic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_plan'); ?>
		<?php echo $form->textArea($model,'case_plan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_budget'); ?>
		<?php echo $form->textArea($model,'case_budget',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_use'); ?>
		<?php echo $form->textArea($model,'case_use',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_expect'); ?>
		<?php echo $form->textArea($model,'case_expect',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_blog'); ?>
		<?php echo $form->textArea($model,'case_blog',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_offer_name'); ?>
		<?php echo $form->textArea($model,'case_offer_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_offer_tel'); ?>
		<?php echo $form->textArea($model,'case_offer_tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_offer_email'); ?>
		<?php echo $form->textArea($model,'case_offer_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_report'); ?>
		<?php echo $form->textArea($model,'case_report',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_spend'); ?>
		<?php echo $form->textArea($model,'case_spend',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_do_state'); ?>
		<?php echo $form->textArea($model,'case_do_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_maney_state'); ?>
		<?php echo $form->textArea($model,'case_maney_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_ps'); ?>
		<?php echo $form->textArea($model,'case_ps',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_time'); ?>
		<?php echo $form->textArea($model,'case_time',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_autotime'); ?>
		<?php echo $form->textField($model,'case_autotime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->