<?php
/* @var $this SportconnController */
/* @var $model Sportconn */

$this->breadcrumbs=array(
	'Sportconns'=>array('index'),
	$model->sp_id=>array('view','id'=>$model->sp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sportconn', 'url'=>array('index')),
	array('label'=>'Create Sportconn', 'url'=>array('create')),
	array('label'=>'View Sportconn', 'url'=>array('view', 'id'=>$model->sp_id)),
	array('label'=>'Manage Sportconn', 'url'=>array('admin')),
);
?>

<h1>Update Sportconn <?php echo $model->sp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>