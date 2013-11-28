<?php
/* @var $this OneconnController */
/* @var $model Oneconn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oneconn-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'one_id'); ?>
		<?php echo $form->textField($model,'one_id'); ?>
		<?php echo $form->error($model,'one_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_name'); ?>
		<?php echo $form->textArea($model,'one_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_city'); ?>
		<?php echo $form->textArea($model,'one_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_email'); ?>
		<?php echo $form->textArea($model,'one_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_tel'); ?>
		<?php echo $form->textArea($model,'one_tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_stu_id'); ?>
		<?php echo $form->textArea($model,'one_stu_id',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_stu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_time'); ?>
		<?php echo $form->textField($model,'one_time'); ?>
		<?php echo $form->error($model,'one_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->