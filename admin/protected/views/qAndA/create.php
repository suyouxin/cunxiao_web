<?php
/* @var $this QAndAController */
/* @var $model QAndA */

$this->breadcrumbs=array(
	'Qand As'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QAndA', 'url'=>array('index')),
	array('label'=>'Manage QAndA', 'url'=>array('admin')),
);
?>

<h1>Create QAndA</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>