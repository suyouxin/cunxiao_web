<?php
/* @var $this MsgController */
/* @var $model Msg */

$this->breadcrumbs=array(
	'Msgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Msg', 'url'=>array('index')),
	array('label'=>'Manage Msg', 'url'=>array('admin')),
);
?>

<h1>Create Msg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>