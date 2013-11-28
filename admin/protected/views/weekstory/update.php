<?php
/* @var $this WeekstoryController */
/* @var $model Weekstory */

$this->breadcrumbs=array(
	'Weekstories'=>array('index'),
	$model->week_id=>array('view','id'=>$model->week_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Weekstory', 'url'=>array('index')),
	array('label'=>'Create Weekstory', 'url'=>array('create')),
	array('label'=>'View Weekstory', 'url'=>array('view', 'id'=>$model->week_id)),
	array('label'=>'Manage Weekstory', 'url'=>array('admin')),
);
?>

<h1>Update Weekstory <?php echo $model->week_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>