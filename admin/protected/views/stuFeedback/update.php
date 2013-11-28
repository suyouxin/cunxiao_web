<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */

$this->breadcrumbs=array(
	'Stu Feedbacks'=>array('index'),
	$model->stu_feedback_id=>array('view','id'=>$model->stu_feedback_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StuFeedback', 'url'=>array('index')),
	array('label'=>'Create StuFeedback', 'url'=>array('create')),
	array('label'=>'View StuFeedback', 'url'=>array('view', 'id'=>$model->stu_feedback_id)),
	array('label'=>'Manage StuFeedback', 'url'=>array('admin')),
);
?>

<h1>Update StuFeedback <?php echo $model->stu_feedback_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>