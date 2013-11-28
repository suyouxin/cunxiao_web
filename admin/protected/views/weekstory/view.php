<?php
/* @var $this WeekstoryController */
/* @var $model Weekstory */

$this->breadcrumbs=array(
	'Weekstories'=>array('index'),
	$model->week_id,
);

$this->menu=array(
	array('label'=>'List Weekstory', 'url'=>array('index')),
	array('label'=>'Create Weekstory', 'url'=>array('create')),
	array('label'=>'Update Weekstory', 'url'=>array('update', 'id'=>$model->week_id)),
	array('label'=>'Delete Weekstory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->week_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Weekstory', 'url'=>array('admin')),
);
?>

<h1>View Weekstory #<?php echo $model->week_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'week_id',
		'week_type',
		'week_con',
		'week_pic',
		'week_who',
		'week_time',
		'week_temp',
	),
)); ?>
