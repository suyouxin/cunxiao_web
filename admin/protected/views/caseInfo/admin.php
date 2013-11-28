<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */

$this->breadcrumbs=array(
	'Case Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CaseInfo', 'url'=>array('index')),
	array('label'=>'Create CaseInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#case-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Case Infos</h1>

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
	'id'=>'case-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'case_info_id',
		'case_in_id',
		'case_in_no',
		'case_in_title',
		'case_in_con',
		'case_in_time',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
