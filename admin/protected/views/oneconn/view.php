<?php
/* @var $this OneconnController */
/* @var $model Oneconn */

$this->breadcrumbs=array(
	'Oneconns'=>array('index'),
	$model->one_id,
);

$this->menu=array(
	array('label'=>'List Oneconn', 'url'=>array('index')),
	array('label'=>'Create Oneconn', 'url'=>array('create')),
	array('label'=>'Update Oneconn', 'url'=>array('update', 'id'=>$model->one_id)),
	array('label'=>'Delete Oneconn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->one_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oneconn', 'url'=>array('admin')),
);
?>

<h1>View Oneconn #<?php echo $model->one_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'one_id',
		'one_name',
		'one_city',
		'one_email',
		'one_tel',
		'one_stu_id',
		'one_time',
	),
)); ?>
