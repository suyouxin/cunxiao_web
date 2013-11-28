<?php
/* @var $this QAndAController */
/* @var $model QAndA */

$this->breadcrumbs=array(
	'Qand As'=>array('index'),
	$model->QA_id,
);

$this->menu=array(
	array('label'=>'List QAndA', 'url'=>array('index')),
	array('label'=>'Create QAndA', 'url'=>array('create')),
	array('label'=>'Update QAndA', 'url'=>array('update', 'id'=>$model->QA_id)),
	array('label'=>'Delete QAndA', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->QA_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QAndA', 'url'=>array('admin')),
);
?>

<h1>View QAndA #<?php echo $model->QA_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'QA_id',
		'QA_no',
		'QA_qustion',
		'QA_answer',
		'QA_KEY_1',
		'QA_KEY_2',
		'QA_KEY_3',
		'QA_TEMP',
		'QA_time',
		'QA_who',
	),
)); ?>
