<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */

$this->breadcrumbs=array(
	'Case Offers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CaseOffer', 'url'=>array('index')),
	array('label'=>'Create CaseOffer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#case-offer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Case Offers</h1>

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
	'id'=>'case-offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'case_id',
		'case_no',
		'case_name',
		'case_schoolname',
		'case_class',
		'case_member_up',
		/*
		'case_member_lead',
		'case_member_do',
		'case_intro',
		'case_title_pic',
		'case_pic',
		'case_plan',
		'case_budget',
		'case_use',
		'case_expect',
		'case_blog',
		'case_offer_name',
		'case_offer_tel',
		'case_offer_email',
		'case_report',
		'case_spend',
		'case_do_state',
		'case_maney_state',
		'case_ps',
		'case_time',
		'case_autotime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
