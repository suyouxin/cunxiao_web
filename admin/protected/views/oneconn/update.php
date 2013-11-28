<?php
/* @var $this OneconnController */
/* @var $model Oneconn */

$this->breadcrumbs=array(
	'Oneconns'=>array('index'),
	$model->one_id=>array('view','id'=>$model->one_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Oneconn', 'url'=>array('index')),
	array('label'=>'Create Oneconn', 'url'=>array('create')),
	array('label'=>'View Oneconn', 'url'=>array('view', 'id'=>$model->one_id)),
	array('label'=>'Manage Oneconn', 'url'=>array('admin')),
);
?>

<h1>Update Oneconn <?php echo $model->one_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>