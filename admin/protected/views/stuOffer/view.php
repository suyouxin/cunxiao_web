<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'学生资料'=>array('index'),
	$model->stu_id,
);

$this->menu=array(
	array('label'=>'浏览', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->stu_id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>View StuOffer #<?php echo $model->stu_id; ?></h1>

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
		'stu_imag',
		'stu_grade',
		'stu_class',
		'stu_offer_wait',
		'stu_inq',
		'stu_offer_name',
		'stu_offer_time',
		'stu_offer_mail_time',
		'stu_offer_showname',
		'stu_offer_mode',
		'stu_offer_email',
		'stu_offer_tel',
		'stu_offer_city',
		'stu_offer_add',
		'stu_maney',
		'stu_integer',
		'stu_1',
		'stu_2',
		'stu_3',
		'stu_4',
		'stu_5',
		'stu_6',
		'stu_7',
		'stu_8',
		'stu_9',
		'stu_10',
		'stu_11',
		'stu_12',
		'stu_work_process',
		'stu_timenow',
	),
)); ?>
