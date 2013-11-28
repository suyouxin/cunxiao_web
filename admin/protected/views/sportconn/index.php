<?php
/* @var $this SportconnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sportconns',
);

$this->menu=array(
	array('label'=>'Create Sportconn', 'url'=>array('create')),
	array('label'=>'Manage Sportconn', 'url'=>array('admin')),
);
?>

<h1>Sportconns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
