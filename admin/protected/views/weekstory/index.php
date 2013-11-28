<?php
/* @var $this WeekstoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Weekstories',
);

$this->menu=array(
	array('label'=>'Create Weekstory', 'url'=>array('create')),
	array('label'=>'Manage Weekstory', 'url'=>array('admin')),
);
?>

<h1>Weekstories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
