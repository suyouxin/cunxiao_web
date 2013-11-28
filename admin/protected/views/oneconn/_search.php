<?php
/* @var $this OneconnController */
/* @var $model Oneconn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'one_id'); ?>
		<?php echo $form->textField($model,'one_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_name'); ?>
		<?php echo $form->textArea($model,'one_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_city'); ?>
		<?php echo $form->textArea($model,'one_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_email'); ?>
		<?php echo $form->textArea($model,'one_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_tel'); ?>
		<?php echo $form->textArea($model,'one_tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_stu_id'); ?>
		<?php echo $form->textArea($model,'one_stu_id',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_time'); ?>
		<?php echo $form->textField($model,'one_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->