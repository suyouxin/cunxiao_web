<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'libraryconn-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'li_id'); ?>
		<?php echo $form->textField($model,'li_id'); ?>
		<?php echo $form->error($model,'li_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_name'); ?>
		<?php echo $form->textArea($model,'li_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_city'); ?>
		<?php echo $form->textArea($model,'li_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_email'); ?>
		<?php echo $form->textArea($model,'li_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_tel'); ?>
		<?php echo $form->textArea($model,'li_tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_job'); ?>
		<?php echo $form->textArea($model,'li_job',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_time'); ?>
		<?php echo $form->textField($model,'li_time'); ?>
		<?php echo $form->error($model,'li_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_do_1'); ?>
		<?php echo $form->textArea($model,'li_do_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_do_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_do_2'); ?>
		<?php echo $form->textArea($model,'li_do_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_do_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_do_3'); ?>
		<?php echo $form->textArea($model,'li_do_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_do_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_do_4'); ?>
		<?php echo $form->textArea($model,'li_do_4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_do_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'li_do_5'); ?>
		<?php echo $form->textArea($model,'li_do_5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'li_do_5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->