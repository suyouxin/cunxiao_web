<?php
/* @var $this WeekstoryController */
/* @var $model Weekstory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'weekstory-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'week_id'); ?>
		<?php echo $form->textField($model,'week_id'); ?>
		<?php echo $form->error($model,'week_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_type'); ?>
		<?php echo $form->textArea($model,'week_type',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'week_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_con'); ?>
		<?php echo $form->textArea($model,'week_con',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'week_con'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_pic'); ?>
		<?php echo $form->textArea($model,'week_pic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'week_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_who'); ?>
		<?php echo $form->textArea($model,'week_who',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'week_who'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_time'); ?>
		<?php echo $form->textField($model,'week_time'); ?>
		<?php echo $form->error($model,'week_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_temp'); ?>
		<?php echo $form->textArea($model,'week_temp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'week_temp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->