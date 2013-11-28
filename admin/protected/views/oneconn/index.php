<?php
/* @var $this OneconnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oneconns',
);

$this->menu=array(
	array('label'=>'Create Oneconn', 'url'=>array('create')),
	array('label'=>'Manage Oneconn', 'url'=>array('admin')),
);
?>

<h1>Oneconns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
