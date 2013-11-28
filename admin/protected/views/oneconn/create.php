<?php
/* @var $this OneconnController */
/* @var $model Oneconn */

$this->breadcrumbs=array(
	'Oneconns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Oneconn', 'url'=>array('index')),
	array('label'=>'Manage Oneconn', 'url'=>array('admin')),
);
?>

<h1>Create Oneconn</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>