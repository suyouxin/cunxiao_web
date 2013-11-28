<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'Stu Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'浏览', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>Create StuOffer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
