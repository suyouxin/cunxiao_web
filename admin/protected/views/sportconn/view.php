<?php
/* @var $this SportconnController */
/* @var $model Sportconn */

$this->breadcrumbs=array(
	'Sportconns'=>array('index'),
	$model->sp_id,
);

$this->menu=array(
	array('label'=>'List Sportconn', 'url'=>array('index')),
	array('label'=>'Create Sportconn', 'url'=>array('create')),
	array('label'=>'Update Sportconn', 'url'=>array('update', 'id'=>$model->sp_id)),
	array('label'=>'Delete Sportconn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sportconn', 'url'=>array('admin')),
);
?>

<h1>View Sportconn #<?php echo $model->sp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sp_id',
		'sp_name',
		'sp_city',
		'sp_email',
		'sp_tel',
		'sp_time',
	),
)); ?>
