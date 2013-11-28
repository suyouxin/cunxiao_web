<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->new_id,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->new_id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->new_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>View News #<?php echo $model->new_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'new_id',
		'new_time',
		'new_writ',
		'new_title',
		'new_con',
	),
)); ?>
