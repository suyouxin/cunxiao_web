<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'li_id'); ?>
		<?php echo $form->textField($model,'li_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_name'); ?>
		<?php echo $form->textArea($model,'li_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_city'); ?>
		<?php echo $form->textArea($model,'li_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_email'); ?>
		<?php echo $form->textArea($model,'li_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_tel'); ?>
		<?php echo $form->textArea($model,'li_tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_job'); ?>
		<?php echo $form->textArea($model,'li_job',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_time'); ?>
		<?php echo $form->textField($model,'li_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_do_1'); ?>
		<?php echo $form->textArea($model,'li_do_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_do_2'); ?>
		<?php echo $form->textArea($model,'li_do_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_do_3'); ?>
		<?php echo $form->textArea($model,'li_do_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_do_4'); ?>
		<?php echo $form->textArea($model,'li_do_4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'li_do_5'); ?>
		<?php echo $form->textArea($model,'li_do_5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->