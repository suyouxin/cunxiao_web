<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */

$this->breadcrumbs=array(
	'Libraryconns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Libraryconn', 'url'=>array('index')),
	array('label'=>'Manage Libraryconn', 'url'=>array('admin')),
);
?>

<h1>Create Libraryconn</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>