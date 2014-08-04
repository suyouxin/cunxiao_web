<?php
/* @var $this StuFeedbackController */
/* @var $model StuFeedback */

$this->breadcrumbs=array(
	'Stu Feedbacks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StuFeedback', 'url'=>array('index')),
	array('label'=>'Create StuFeedback', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stu-feedback-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stu Feedbacks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stu-feedback-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'stu_feedback_id',
		'stu_number',
		'stu_name',
		'stu_feedback_info',
		'stu_feedback_time',
		/*
		'stu_feedback_stat',
		'stu_feedback_term',
		'stu_feedback_grade',
		'stu_feedback_class',
		'stu_feedback_who',
		'stu_feedback_image',
		'stu_feedback_image2',
		'stu_feedback_image3',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
