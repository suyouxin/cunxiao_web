<?php
/* @var $this MsgController */
/* @var $model Msg */

$this->breadcrumbs=array(
	'Msgs'=>array('index'),
	$model->m_ID=>array('view','id'=>$model->m_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Msg', 'url'=>array('index')),
	array('label'=>'Create Msg', 'url'=>array('create')),
	array('label'=>'View Msg', 'url'=>array('view', 'id'=>$model->m_ID)),
	array('label'=>'Manage Msg', 'url'=>array('admin')),
);
?>

<h1>Update Msg <?php echo $model->m_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>