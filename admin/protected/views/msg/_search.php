<?php
/* @var $this MsgController */
/* @var $model Msg */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'m_ID'); ?>
		<?php echo $form->textField($model,'m_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_name'); ?>
		<?php echo $form->textArea($model,'m_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_mail'); ?>
		<?php echo $form->textArea($model,'m_mail',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_con'); ?>
		<?php echo $form->textArea($model,'m_con',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_time'); ?>
		<?php echo $form->textField($model,'m_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_re'); ?>
		<?php echo $form->textArea($model,'m_re',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_re_time'); ?>
		<?php echo $form->textField($model,'m_re_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_city'); ?>
		<?php echo $form->textArea($model,'m_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_ip'); ?>
		<?php echo $form->textArea($model,'m_ip',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->