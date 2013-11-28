<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */

$this->breadcrumbs=array(
	'Case Offers'=>array('index'),
	$model->case_id=>array('view','id'=>$model->case_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CaseOffer', 'url'=>array('index')),
	array('label'=>'Create CaseOffer', 'url'=>array('create')),
	array('label'=>'View CaseOffer', 'url'=>array('view', 'id'=>$model->case_id)),
	array('label'=>'Manage CaseOffer', 'url'=>array('admin')),
);
?>

<h1>Update CaseOffer <?php echo $model->case_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>