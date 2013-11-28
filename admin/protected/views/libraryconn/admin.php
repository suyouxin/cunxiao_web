<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */

$this->breadcrumbs=array(
	'Libraryconns'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Libraryconn', 'url'=>array('index')),
	array('label'=>'Create Libraryconn', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#libraryconn-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Libraryconns</h1>

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
	'id'=>'libraryconn-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'li_id',
		'li_name',
		'li_city',
		'li_email',
		'li_tel',
		'li_job',
		/*
		'li_time',
		'li_do_1',
		'li_do_2',
		'li_do_3',
		'li_do_4',
		'li_do_5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
