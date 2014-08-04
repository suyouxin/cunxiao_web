<?php
/* @var $this StuOfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'一对一捐助学生资料',
);

$this->menu=array(
	array('label'=>'学生资料管理面板', 'url'=>array('admin')),
	array('label'=>'添加新资料', 'url'=>array('create')),
);
?>

<div id="logo">学生基本资料</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
