<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */

$this->breadcrumbs=array(
	'Case Infos'=>array('index'),
	$model->case_info_id,
);

$this->menu=array(
	array('label'=>'List CaseInfo', 'url'=>array('index')),
	array('label'=>'Create CaseInfo', 'url'=>array('create')),
	array('label'=>'Update CaseInfo', 'url'=>array('update', 'id'=>$model->case_info_id)),
	array('label'=>'Delete CaseInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->case_info_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CaseInfo', 'url'=>array('admin')),
);
?>

<h1>View CaseInfo #<?php echo $model->case_info_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'case_info_id',
		'case_in_id',
		'case_in_no',
		'case_in_title',
		'case_in_con',
		'case_in_time',
	),
)); ?>
