<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */

$this->breadcrumbs=array(
	'Stu Feedbacks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StuFeedback', 'url'=>array('index')),
	array('label'=>'Manage StuFeedback', 'url'=>array('admin')),
);
?>

<h1>Create StuFeedback</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>