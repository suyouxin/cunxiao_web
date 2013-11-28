<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_name'); ?>
		<?php echo $form->textArea($model,'school_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_title'); ?>
		<?php echo $form->textArea($model,'school_image_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_add'); ?>
		<?php echo $form->textArea($model,'school_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_case'); ?>
		<?php echo $form->textArea($model,'school_case',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_1'); ?>
		<?php echo $form->textArea($model,'school_image_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_2'); ?>
		<?php echo $form->textArea($model,'school_image_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_3'); ?>
		<?php echo $form->textArea($model,'school_image_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_4'); ?>
		<?php echo $form->textArea($model,'school_image_4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_5'); ?>
		<?php echo $form->textArea($model,'school_image_5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_image_6'); ?>
		<?php echo $form->textArea($model,'school_image_6',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_introduce_1'); ?>
		<?php echo $form->textArea($model,'school_introduce_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_introduce_2'); ?>
		<?php echo $form->textArea($model,'school_introduce_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_introduce_3'); ?>
		<?php echo $form->textArea($model,'school_introduce_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_number'); ?>
		<?php echo $form->textField($model,'school_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->