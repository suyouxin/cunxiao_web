<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_id'); ?>
		<?php echo $form->textField($model,'stu_feedback_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_number'); ?>
		<?php echo $form->textArea($model,'stu_number',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_name'); ?>
		<?php echo $form->textArea($model,'stu_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_stat'); ?>
		<?php echo $form->textArea($model,'stu_feedback_stat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_term'); ?>
		<?php echo $form->textArea($model,'stu_feedback_term',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_grade'); ?>
		<?php echo $form->textArea($model,'stu_feedback_grade',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_class'); ?>
		<?php echo $form->textArea($model,'stu_feedback_class',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_who'); ?>
		<?php echo $form->textArea($model,'stu_feedback_who',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_info'); ?>
		<?php echo $form->textArea($model,'stu_feedback_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_image'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_image2'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_image3'); ?>
		<?php echo $form->textArea($model,'stu_feedback_image3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_feedback_time'); ?>
		<?php echo $form->textField($model,'stu_feedback_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->