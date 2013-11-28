<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'case-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'case_info_id'); ?>
		<?php echo $form->textField($model,'case_info_id'); ?>
		<?php echo $form->error($model,'case_info_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_in_id'); ?>
		<?php echo $form->textField($model,'case_in_id'); ?>
		<?php echo $form->error($model,'case_in_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_in_no'); ?>
		<?php echo $form->textField($model,'case_in_no'); ?>
		<?php echo $form->error($model,'case_in_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_in_title'); ?>
		<?php echo $form->textArea($model,'case_in_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_in_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_in_con'); ?>
		<?php echo $form->textArea($model,'case_in_con',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'case_in_con'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'case_in_time'); ?>
		<?php echo $form->textField($model,'case_in_time'); ?>
		<?php echo $form->error($model,'case_in_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->