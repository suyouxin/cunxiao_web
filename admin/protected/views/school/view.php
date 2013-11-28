<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->school_id,
);

$this->menu=array(
	array('label'=>'List School', 'url'=>array('index')),
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'Update School', 'url'=>array('update', 'id'=>$model->school_id)),
	array('label'=>'Delete School', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->school_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>View School #<?php echo $model->school_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'school_id',
		'school_name',
		'school_image_title',
		'school_add',
		'school_case',
		'school_image_1',
		'school_image_2',
		'school_image_3',
		'school_image_4',
		'school_image_5',
		'school_image_6',
		'school_introduce_1',
		'school_introduce_2',
		'school_introduce_3',
		'school_number',
	),
)); ?>
