<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stu-offer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_number'); ?>
		<?php echo $form->textField($model,'stu_number',array('value'=>uniqid(),
				   	'size'=>50, 'maxlengh'=>50, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'stu_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_name'); ?>  
		<?php echo $form->textField($model,'stu_name',array('size'=>10, 'maxlengh'=>20)); ?>
		<span class="required">*</span>
		<?php echo $form->error($model,'stu_name'); ?>
	</div>

	<div class="row">
		</p>TODO: School should be a drop down list
		</p>就读学校请按照此格式填写：***省***县***乡/镇+（学校名称）
		</p>如：贵州省大方县大方一中</p>
		<?php echo $form->labelEx($model,'stu_school'); ?>
		<?php echo $form->textField($model,'stu_school',array('size'=>40, 'maxlengh'=>60)); ?>
		<?php echo $form->error($model,'stu_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_add'); ?>
		<?php echo $form->textArea($model,'stu_add',array('rows'=>2, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_grade'); ?>
		<?php echo $form->textField($model,'stu_grade',array('size'=>10, 'maxlengh'=>20)); ?>
		<?php echo $form->error($model,'stu_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_class'); ?>
		<?php echo $form->textField($model,'stu_class',array('size'=>10, 'maxlengh'=>20)); ?>
		<?php echo $form->error($model,'stu_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_base'); ?>
		<?php echo $form->textArea($model,'stu_base',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_imag'); ?>
		<?php echo CHtml::activeFileField($model, 'stu_imag'); ?>
		<?php echo $form->error($model,'stu_imag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_integer'); ?>
		<?php echo $form->dropDownList($model,'stu_integer',array('个人'=>'个人','炬力'=>'炬力')); ?>
		<?php echo $form->error($model,'stu_integer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_maney'); ?>
		<?php echo $form->textField($model,'stu_maney',array('value'=>'建议捐助：  元/学期',
				   	'size'=>20, 'maxlengh'=>30)); ?>
		<?php echo $form->error($model,'stu_maney'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_inq'); ?>
		<?php echo $form->textField($model,'stu_inq',array('size'=>10, 'maxlengh'=>20)); ?>
		<span class="required">*</span>
		<?php echo $form->error($model,'stu_inq'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
