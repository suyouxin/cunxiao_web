<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'学生资料'=>array('index'),
	$model->stu_id,
);

$this->menu=array(
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->stu_id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'返回管理面板', 'url'=>array('admin')),
);
?>

<div id="logo">查看学生详细资料</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stu_id',
		'stu_number',
		'stu_name',
		'stu_sex',
		'stu_born',
		'stu_base',
		'stu_add',
		'stu_school',
		array(
		'label' => '照片',
		'type'=>'raw',
		'value' => CHtml::decode($model->stu_imag)
			),
		'stu_grade',
		'stu_class',
		'stu_offer_wait',
		'stu_inq',
		'stu_maney',
		'stu_1',
		'stu_2',
		'stu_3',
		'stu_work_process',
		'stu_timenow',
	),
)); ?>

<div id="logo">捐助者信息</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stu_offer_name',
		'stu_offer_time',
		'stu_offer_mail_time',
		'stu_offer_showname',
		'stu_offer_mode',
		'stu_offer_email',
		'stu_offer_tel',
		'stu_offer_city',
		'stu_offer_add',
		'stu_integer',
	),
)); ?>


<?php 
    if (!empty($feedbacks)) {

		echo('<div id="logo">学生反馈信息</div>');

		foreach ($feedbacks as $feedback) {
			$this->widget('zii.widgets.CDetailView', array(
			'data'=>$feedback,
			'attributes'=>array(
				'stu_feedback_info',
				array(
				'label' => '照片1',
				'type'=>'raw',
				'value' => CHtml::decode($feedback->stu_feedback_image)
					),
				array(
				'label' => '照片2',
				'type'=>'raw',
				'value' => CHtml::decode($feedback->stu_feedback_image2)
					),
				array(
				'label' => '照片3',
				'type'=>'raw',
				'value' => CHtml::decode($feedback->stu_feedback_image3)
					),
				'stu_feedback_time',
			),
			)); 
		}
	}
?>

