<?php
/* @var $this QAndAController */
/* @var $model QAndA */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'QA_id'); ?>
		<?php echo $form->textField($model,'QA_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_no'); ?>
		<?php echo $form->textField($model,'QA_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_qustion'); ?>
		<?php echo $form->textArea($model,'QA_qustion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_answer'); ?>
		<?php echo $form->textArea($model,'QA_answer',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_KEY_1'); ?>
		<?php echo $form->textArea($model,'QA_KEY_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_KEY_2'); ?>
		<?php echo $form->textArea($model,'QA_KEY_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_KEY_3'); ?>
		<?php echo $form->textArea($model,'QA_KEY_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_TEMP'); ?>
		<?php echo $form->textArea($model,'QA_TEMP',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_time'); ?>
		<?php echo $form->textField($model,'QA_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QA_who'); ?>
		<?php echo $form->textArea($model,'QA_who',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->