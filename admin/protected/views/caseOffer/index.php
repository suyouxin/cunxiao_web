<?php
/* @var $this CaseOfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Case Offers',
);

$this->menu=array(
	array('label'=>'Create CaseOffer', 'url'=>array('create')),
	array('label'=>'Manage CaseOffer', 'url'=>array('admin')),
);
?>

<h1>Case Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
