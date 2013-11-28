<?php
/* @var $this QAndAController */
/* @var $model QAndA */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'qand-a-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_id'); ?>
		<?php echo $form->textField($model,'QA_id'); ?>
		<?php echo $form->error($model,'QA_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_no'); ?>
		<?php echo $form->textField($model,'QA_no'); ?>
		<?php echo $form->error($model,'QA_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_qustion'); ?>
		<?php echo $form->textArea($model,'QA_qustion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_qustion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_answer'); ?>
		<?php echo $form->textArea($model,'QA_answer',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_KEY_1'); ?>
		<?php echo $form->textArea($model,'QA_KEY_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_KEY_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_KEY_2'); ?>
		<?php echo $form->textArea($model,'QA_KEY_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_KEY_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_KEY_3'); ?>
		<?php echo $form->textArea($model,'QA_KEY_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_KEY_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_TEMP'); ?>
		<?php echo $form->textArea($model,'QA_TEMP',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_TEMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_time'); ?>
		<?php echo $form->textField($model,'QA_time'); ?>
		<?php echo $form->error($model,'QA_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QA_who'); ?>
		<?php echo $form->textArea($model,'QA_who',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'QA_who'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->