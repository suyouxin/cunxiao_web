<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */

$this->breadcrumbs=array(
	'Libraryconns'=>array('index'),
	$model->li_id,
);

$this->menu=array(
	array('label'=>'List Libraryconn', 'url'=>array('index')),
	array('label'=>'Create Libraryconn', 'url'=>array('create')),
	array('label'=>'Update Libraryconn', 'url'=>array('update', 'id'=>$model->li_id)),
	array('label'=>'Delete Libraryconn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->li_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Libraryconn', 'url'=>array('admin')),
);
?>

<h1>View Libraryconn #<?php echo $model->li_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'li_id',
		'li_name',
		'li_city',
		'li_email',
		'li_tel',
		'li_job',
		'li_time',
		'li_do_1',
		'li_do_2',
		'li_do_3',
		'li_do_4',
		'li_do_5',
	),
)); ?>
