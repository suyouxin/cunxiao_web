<?php
/* @var $this LibraryconnController */
/* @var $model Libraryconn */

$this->breadcrumbs=array(
	'Libraryconns'=>array('index'),
	$model->li_id=>array('view','id'=>$model->li_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Libraryconn', 'url'=>array('index')),
	array('label'=>'Create Libraryconn', 'url'=>array('create')),
	array('label'=>'View Libraryconn', 'url'=>array('view', 'id'=>$model->li_id)),
	array('label'=>'Manage Libraryconn', 'url'=>array('admin')),
);
?>

<h1>Update Libraryconn <?php echo $model->li_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>