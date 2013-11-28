<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */

$this->breadcrumbs=array(
	'Case Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CaseOffer', 'url'=>array('index')),
	array('label'=>'Manage CaseOffer', 'url'=>array('admin')),
);
?>

<h1>Create CaseOffer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>