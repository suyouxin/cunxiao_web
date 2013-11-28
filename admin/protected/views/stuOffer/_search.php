<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stu_id'); ?>
		<?php echo $form->textField($model,'stu_id'); ?>
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
		<?php echo $form->label($model,'stu_sex'); ?>
		<?php echo $form->textArea($model,'stu_sex',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_born'); ?>
		<?php echo $form->textArea($model,'stu_born',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_base'); ?>
		<?php echo $form->textArea($model,'stu_base',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_add'); ?>
		<?php echo $form->textArea($model,'stu_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_school'); ?>
		<?php echo $form->textArea($model,'stu_school',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_imag'); ?>
		<?php echo $form->textArea($model,'stu_imag',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_grade'); ?>
		<?php echo $form->textArea($model,'stu_grade',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_class'); ?>
		<?php echo $form->textArea($model,'stu_class',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_wait'); ?>
		<?php echo $form->textArea($model,'stu_offer_wait',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_inq'); ?>
		<?php echo $form->textArea($model,'stu_inq',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_name'); ?>
		<?php echo $form->textArea($model,'stu_offer_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_time'); ?>
		<?php echo $form->textField($model,'stu_offer_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_mail_time'); ?>
		<?php echo $form->textArea($model,'stu_offer_mail_time',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_showname'); ?>
		<?php echo $form->textArea($model,'stu_offer_showname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_mode'); ?>
		<?php echo $form->textArea($model,'stu_offer_mode',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_email'); ?>
		<?php echo $form->textArea($model,'stu_offer_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_tel'); ?>
		<?php echo $form->textArea($model,'stu_offer_tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_city'); ?>
		<?php echo $form->textArea($model,'stu_offer_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_offer_add'); ?>
		<?php echo $form->textArea($model,'stu_offer_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_maney'); ?>
		<?php echo $form->textArea($model,'stu_maney',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_integer'); ?>
		<?php echo $form->textArea($model,'stu_integer',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_1'); ?>
		<?php echo $form->textArea($model,'stu_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_2'); ?>
		<?php echo $form->textArea($model,'stu_2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_3'); ?>
		<?php echo $form->textArea($model,'stu_3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_4'); ?>
		<?php echo $form->textArea($model,'stu_4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_5'); ?>
		<?php echo $form->textArea($model,'stu_5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_6'); ?>
		<?php echo $form->textArea($model,'stu_6',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_7'); ?>
		<?php echo $form->textArea($model,'stu_7',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_8'); ?>
		<?php echo $form->textArea($model,'stu_8',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_9'); ?>
		<?php echo $form->textArea($model,'stu_9',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_10'); ?>
		<?php echo $form->textArea($model,'stu_10',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_11'); ?>
		<?php echo $form->textArea($model,'stu_11',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_12'); ?>
		<?php echo $form->textArea($model,'stu_12',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_work_process'); ?>
		<?php echo $form->textField($model,'stu_work_process'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stu_timenow'); ?>
		<?php echo $form->textField($model,'stu_timenow'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->