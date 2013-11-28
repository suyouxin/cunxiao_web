<?php
/* @var $this MsgController */
/* @var $model Msg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'msg-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'m_ID'); ?>
		<?php echo $form->textField($model,'m_ID'); ?>
		<?php echo $form->error($model,'m_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_name'); ?>
		<?php echo $form->textArea($model,'m_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_mail'); ?>
		<?php echo $form->textArea($model,'m_mail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_con'); ?>
		<?php echo $form->textArea($model,'m_con',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_con'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_time'); ?>
		<?php echo $form->textField($model,'m_time'); ?>
		<?php echo $form->error($model,'m_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_re'); ?>
		<?php echo $form->textArea($model,'m_re',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_re'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_re_time'); ?>
		<?php echo $form->textField($model,'m_re_time'); ?>
		<?php echo $form->error($model,'m_re_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_city'); ?>
		<?php echo $form->textArea($model,'m_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_ip'); ?>
		<?php echo $form->textArea($model,'m_ip',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'m_ip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->