<?php
/* @var $this WeekstoryController */
/* @var $model Weekstory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'week_id'); ?>
		<?php echo $form->textField($model,'week_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_type'); ?>
		<?php echo $form->textArea($model,'week_type',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_con'); ?>
		<?php echo $form->textArea($model,'week_con',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_pic'); ?>
		<?php echo $form->textArea($model,'week_pic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_who'); ?>
		<?php echo $form->textArea($model,'week_who',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_time'); ?>
		<?php echo $form->textField($model,'week_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'week_temp'); ?>
		<?php echo $form->textArea($model,'week_temp',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->