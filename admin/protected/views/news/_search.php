<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'new_id'); ?>
		<?php echo $form->textField($model,'new_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'new_time'); ?>
		<?php echo $form->textField($model,'new_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'new_writ'); ?>
		<?php echo $form->textArea($model,'new_writ',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'new_title'); ?>
		<?php echo $form->textArea($model,'new_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'new_con'); ?>
		<?php echo $form->textArea($model,'new_con',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->