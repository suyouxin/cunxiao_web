<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */

$this->breadcrumbs=array(
	'Stu Feedbacks'=>array('index'),
	$model->stu_feedback_id,
);

$this->menu=array(
	array('label'=>'List StuFeedback', 'url'=>array('index')),
	array('label'=>'Create StuFeedback', 'url'=>array('create')),
	array('label'=>'Update StuFeedback', 'url'=>array('update', 'id'=>$model->stu_feedback_id)),
	array('label'=>'Delete StuFeedback', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stu_feedback_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StuFeedback', 'url'=>array('admin')),
);
?>

<h1>View StuFeedback #<?php echo $model->stu_feedback_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stu_feedback_id',
		'stu_number',
		'stu_name',
		'stu_feedback_stat',
		'stu_feedback_term',
		'stu_feedback_grade',
		'stu_feedback_class',
		'stu_feedback_who',
		'stu_feedback_info',
		'stu_feedback_image',
		'stu_feedback_image2',
		'stu_feedback_image3',
		'stu_feedback_time',
	),
)); ?>
