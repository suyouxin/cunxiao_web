<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stu-offer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_number'); ?>
		<?php echo $form->textField($model,'stu_number',array(
				   	'size'=>50, 'maxlengh'=>50, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'stu_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_name'); ?>  
		<?php echo $form->textField($model,'stu_name',array('size'=>10, 'maxlengh'=>20)); ?>
		<?php echo $form->error($model,'stu_name'); ?>
	</div>

	<div class="row">
		School should be a drop down list<br>
		<?php echo $form->labelEx($model,'stu_school'); ?>
		<?php echo $form->textField($model,'stu_school',array('size'=>40, 'maxlengh'=>60)); ?>
		<?php echo $form->error($model,'stu_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_add'); ?>
		<?php echo $form->textArea($model,'stu_add',array('rows'=>2, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_grade'); ?>
		<?php echo $form->textField($model,'stu_grade',array('size'=>10, 'maxlengh'=>20)); ?>
		<?php echo $form->error($model,'stu_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_class'); ?>
		<?php echo $form->textField($model,'stu_class',array('size'=>10, 'maxlengh'=>20)); ?>
		<?php echo $form->error($model,'stu_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_base'); ?>
		<?php echo $form->textArea($model,'stu_base',array('rows'=>9, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_sex'); ?>
		<?php echo $form->dropDownList($model,'stu_sex',array('男'=>'男','女'=>'女')); ?>
		<?php echo $form->error($model,'stu_sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_born'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'stu_born',
			'language' => 'zh_cn',
			'options' => array(
				'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
				'showOtherMonths' => true,      // show dates in other months
				'selectOtherMonths' => true,    // can seelect dates in other months
				'changeYear' => true,           // can change year
				'changeMonth' => true,  
			),
			'htmlOptions' => array(
				'size' => '10',         // textField size
				'maxlength' => '10',    // textField maxlength
			),
			));	
		?>
		<?php echo $form->error($model,'stu_born'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_imag'); ?>
		<?php echo $form->textArea($model,'stu_imag',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_imag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_wait'); ?>
		<?php echo $form->textArea($model,'stu_offer_wait',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_wait'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_inq'); ?>
		<?php echo $form->textArea($model,'stu_inq',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_inq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_name'); ?>
		<?php echo $form->textArea($model,'stu_offer_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_time'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'stu_offer_time',
				'language' => 'zh_cn',
				'options' => array(
					'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
					'showOtherMonths' => true,      // show dates in other months
					'selectOtherMonths' => true,    // can seelect dates in other months
					'changeYear' => true,           // can change year
					'changeMonth' => true,  
				),
				'htmlOptions' => array(
					'size' => '10',         // textField size
					'maxlength' => '10',    // textField maxlength
				),
			));
		?>
		<?php echo $form->error($model,'stu_offer_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_mail_time'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'stu_offer_mail_time',
				'language' => 'zh_cn',
				'options' => array(
					'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
					'showOtherMonths' => true,      // show dates in other months
					'selectOtherMonths' => true,    // can seelect dates in other months
					'changeYear' => true,           // can change year
					'changeMonth' => true,  
				),
				'htmlOptions' => array(
					'size' => '10',         // textField size
					'maxlength' => '10',    // textField maxlength
				),
			));
		?>
		<?php echo $form->error($model,'stu_offer_mail_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_showname'); ?>
		<?php echo $form->textArea($model,'stu_offer_showname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_showname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_mode'); ?>
		<?php echo $form->textArea($model,'stu_offer_mode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_email'); ?>
		<?php echo $form->textArea($model,'stu_offer_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_tel'); ?>
		<?php echo $form->textArea($model,'stu_offer_tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_city'); ?>
		<?php echo $form->textArea($model,'stu_offer_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_offer_add'); ?>
		<?php echo $form->textArea($model,'stu_offer_add',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_offer_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_maney'); ?>
		<?php echo $form->textArea($model,'stu_maney',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_maney'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_integer'); ?>
		<?php echo $form->textArea($model,'stu_integer',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_integer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_1'); ?>
		<?php echo $form->textArea($model,'stu_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_2'); ?>
		<?php echo $form->textArea($model,'stu_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_3'); ?>
		<?php echo $form->textArea($model,'stu_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_work_process'); ?>
		<?php echo $form->textField($model,'stu_work_process'); ?>
		<?php echo $form->error($model,'stu_work_process'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_timenow'); ?>
		<?php echo $form->textField($model,'stu_timenow'); ?>
		<?php echo $form->error($model,'stu_timenow'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
