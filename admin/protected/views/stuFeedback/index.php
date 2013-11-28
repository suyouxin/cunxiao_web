<?php
/* @var $this StuFeedbackController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stu Feedbacks',
);

$this->menu=array(
	array('label'=>'Create StuFeedback', 'url'=>array('create')),
	array('label'=>'Manage StuFeedback', 'url'=>array('admin')),
);
?>

<h1>Stu Feedbacks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
