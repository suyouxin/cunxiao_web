<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'一对一捐助学生资料'=>array('index'),
	'添加新资料',
);

$this->menu=array(
	array('label'=>'返回管理面板', 'url'=>array('admin')),
);
?>

<div id="logo">添加一对一捐助学生基本资料</div>

<?php $this->renderPartial('_create_form', array('model'=>$model)); ?>
