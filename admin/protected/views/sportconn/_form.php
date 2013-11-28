<?php
/* @var $this SportconnController */
/* @var $model Sportconn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sportconn-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_id'); ?>
		<?php echo $form->textField($model,'sp_id'); ?>
		<?php echo $form->error($model,'sp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_name'); ?>
		<?php echo $form->textArea($model,'sp_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sp_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_city'); ?>
		<?php echo $form->textArea($model,'sp_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sp_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_email'); ?>
		<?php echo $form->textArea($model,'sp_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_tel'); ?>
		<?php echo $form->textArea($model,'sp_tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sp_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_time'); ?>
		<?php echo $form->textField($model,'sp_time'); ?>
		<?php echo $form->error($model,'sp_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->