<?php
/* @var $this QAndAController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Qand As',
);

$this->menu=array(
	array('label'=>'Create QAndA', 'url'=>array('create')),
	array('label'=>'Manage QAndA', 'url'=>array('admin')),
);
?>

<h1>Qand As</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
