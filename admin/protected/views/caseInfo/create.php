<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */

$this->breadcrumbs=array(
	'Case Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CaseInfo', 'url'=>array('index')),
	array('label'=>'Manage CaseInfo', 'url'=>array('admin')),
);
?>

<h1>Create CaseInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>