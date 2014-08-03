<?php
/* @var $this WeekstoryController */
/* @var $model Weekstory */

$this->breadcrumbs=array(
	'Weekstories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Weekstory', 'url'=>array('index')),
	array('label'=>'Manage Weekstory', 'url'=>array('admin')),
);
?>

<h1>Create Weekstory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>