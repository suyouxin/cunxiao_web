<?php
/* @var $this SportconnController */
/* @var $model Sportconn */

$this->breadcrumbs=array(
	'Sportconns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sportconn', 'url'=>array('index')),
	array('label'=>'Manage Sportconn', 'url'=>array('admin')),
);
?>

<h1>Create Sportconn</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>