<?php
/* @var $this StuOfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'学生资料',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>Stu Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
