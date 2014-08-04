<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'Stu Offers'=>array('index'),
	$model->stu_id=>array('view','id'=>$model->stu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'返回', 'url'=>array('view', 'id'=>$model->stu_id)),
);
?>

<h1>Update StuOffer <?php echo $model->stu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
