<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'case_info_id'); ?>
		<?php echo $form->textField($model,'case_info_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_in_id'); ?>
		<?php echo $form->textField($model,'case_in_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_in_no'); ?>
		<?php echo $form->textField($model,'case_in_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_in_title'); ?>
		<?php echo $form->textArea($model,'case_in_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_in_con'); ?>
		<?php echo $form->textArea($model,'case_in_con',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_in_time'); ?>
		<?php echo $form->textField($model,'case_in_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->