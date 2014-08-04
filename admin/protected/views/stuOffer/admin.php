<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'一对一捐助学生资料'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'学生基本资料', 'url'=>array('index')),
	array('label'=>'添加新资料', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stu-offer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="logo">学生资料管理面板</div>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stu-offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'stu_number',
		array(
			'name'=>'stu_offer_wait',
			'value'=>$model->stu_offer_wait,
			'filter'=>CHtml::dropDownList(
					'状态过滤',
					$model->stu_offer_wait,
					array('' => '全部', '不显示' => '不显示')
				),
		),
		'stu_name',
		'stu_school',
		'stu_offer_time',
		/*
		'stu_id',
		'stu_sex',
		'stu_born',
		'stu_add',
		'stu_imag',
		'stu_base',
		'stu_grade',
		'stu_class',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
