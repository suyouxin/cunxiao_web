<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	array('label'=>'Create School', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#school-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Schools</h1>

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
	'id'=>'school-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'school_id',
		'school_name',
		'school_image_title',
		'school_add',
		'school_case',
		'school_image_1',
		/*
		'school_image_2',
		'school_image_3',
		'school_image_4',
		'school_image_5',
		'school_image_6',
		'school_introduce_1',
		'school_introduce_2',
		'school_introduce_3',
		'school_number',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
