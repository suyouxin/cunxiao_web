<?php
/* @var $this QAndAController */
/* @var $model QAndA */

$this->breadcrumbs=array(
	'Qand As'=>array('index'),
	$model->QA_id=>array('view','id'=>$model->QA_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QAndA', 'url'=>array('index')),
	array('label'=>'Create QAndA', 'url'=>array('create')),
	array('label'=>'View QAndA', 'url'=>array('view', 'id'=>$model->QA_id)),
	array('label'=>'Manage QAndA', 'url'=>array('admin')),
);
?>

<h1>Update QAndA <?php echo $model->QA_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>