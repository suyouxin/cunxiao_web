<?php
/* @var $this LibraryconnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Libraryconns',
);

$this->menu=array(
	array('label'=>'Create Libraryconn', 'url'=>array('create')),
	array('label'=>'Manage Libraryconn', 'url'=>array('admin')),
);
?>

<h1>Libraryconns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
