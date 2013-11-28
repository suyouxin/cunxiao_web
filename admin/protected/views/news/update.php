<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->new_id=>array('view','id'=>$model->new_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'View News', 'url'=>array('view', 'id'=>$model->new_id)),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>Update News <?php echo $model->new_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>