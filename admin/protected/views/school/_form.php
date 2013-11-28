<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'school-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_name'); ?>
		<?php echo $form->textArea($model,'school_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_title'); ?>
		<?php echo $form->textArea($model,'school_image_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_add'); ?>
		<?php echo $form->textArea($model,'school_add',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_case'); ?>
		<?php echo $form->textArea($model,'school_case',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_case'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_1'); ?>
		<?php echo $form->textArea($model,'school_image_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_2'); ?>
		<?php echo $form->textArea($model,'school_image_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_3'); ?>
		<?php echo $form->textArea($model,'school_image_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_4'); ?>
		<?php echo $form->textArea($model,'school_image_4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_5'); ?>
		<?php echo $form->textArea($model,'school_image_5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_image_6'); ?>
		<?php echo $form->textArea($model,'school_image_6',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_image_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_introduce_1'); ?>
		<?php echo $form->textArea($model,'school_introduce_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_introduce_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_introduce_2'); ?>
		<?php echo $form->textArea($model,'school_introduce_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_introduce_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_introduce_3'); ?>
		<?php echo $form->textArea($model,'school_introduce_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'school_introduce_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_number'); ?>
		<?php echo $form->textField($model,'school_number'); ?>
		<?php echo $form->error($model,'school_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->