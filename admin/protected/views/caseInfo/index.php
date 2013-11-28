<?php
/* @var $this CaseInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Case Infos',
);

$this->menu=array(
	array('label'=>'Create CaseInfo', 'url'=>array('create')),
	array('label'=>'Manage CaseInfo', 'url'=>array('admin')),
);
?>

<h1>Case Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
