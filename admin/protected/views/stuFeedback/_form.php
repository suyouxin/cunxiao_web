<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stu-feedback-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_id'); ?>
		<?php echo $form->textField($model,'stu_feedback_id'); ?>
		<?php echo $form->error($model,'stu_feedback_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_number'); ?>
		<?php echo $form->textArea($model,'stu_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_name'); ?>
		<?php echo $form->textArea($model,'stu_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_stat'); ?>
		<?php echo $form->textArea($model,'stu_feedback_stat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_term'); ?>
		<?php echo $form->textArea($model,'stu_feedback_term',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_term'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_grade'); ?>
		<?php echo $form->textArea($model,'stu_feedback_grade',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_class'); ?>
		<?php echo $form->textArea($model,'stu_feedback_class',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_who'); ?>
		<?php echo $form->textArea($model,'stu_feedback_who',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_who'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_info'); ?>
		<?php echo $form->textArea($model,'stu_feedback_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_image'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_image2'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_image2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_image3'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_feedback_image3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_feedback_time'); ?>
		<?php echo $form->textField($model,'stu_feedback_time'); ?>
		<?php echo $form->error($model,'stu_feedback_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->