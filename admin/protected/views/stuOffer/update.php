<?php
/* @var $this StuOfferController */
/* @var $model StuOffer */

$this->breadcrumbs=array(
	'Stu Offers'=>array('index'),
	$model->stu_id=>array('view','id'=>$model->stu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'浏览', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'查看', 'url'=>array('view', 'id'=>$model->stu_id)),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>Update StuOffer <?php echo $model->stu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
