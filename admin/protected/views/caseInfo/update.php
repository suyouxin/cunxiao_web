<?php
/* @var $this CaseInfoController */
/* @var $model CaseInfo */

$this->breadcrumbs=array(
	'Case Infos'=>array('index'),
	$model->case_info_id=>array('view','id'=>$model->case_info_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CaseInfo', 'url'=>array('index')),
	array('label'=>'Create CaseInfo', 'url'=>array('create')),
	array('label'=>'View CaseInfo', 'url'=>array('view', 'id'=>$model->case_info_id)),
	array('label'=>'Manage CaseInfo', 'url'=>array('admin')),
);
?>

<h1>Update CaseInfo <?php echo $model->case_info_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>