<?php
/* @var $this SportconnController */
/* @var $model Sportconn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sp_id'); ?>
		<?php echo $form->textField($model,'sp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_name'); ?>
		<?php echo $form->textArea($model,'sp_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_city'); ?>
		<?php echo $form->textArea($model,'sp_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_email'); ?>
		<?php echo $form->textArea($model,'sp_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_tel'); ?>
		<?php echo $form->textArea($model,'sp_tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_time'); ?>
		<?php echo $form->textField($model,'sp_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->