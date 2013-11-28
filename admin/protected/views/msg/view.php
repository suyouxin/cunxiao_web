<?php
/* @var $this MsgController */
/* @var $model Msg */

$this->breadcrumbs=array(
	'Msgs'=>array('index'),
	$model->m_ID,
);

$this->menu=array(
	array('label'=>'List Msg', 'url'=>array('index')),
	array('label'=>'Create Msg', 'url'=>array('create')),
	array('label'=>'Update Msg', 'url'=>array('update', 'id'=>$model->m_ID)),
	array('label'=>'Delete Msg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->m_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Msg', 'url'=>array('admin')),
);
?>

<h1>View Msg #<?php echo $model->m_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'm_ID',
		'm_name',
		'm_mail',
		'm_con',
		'm_time',
		'm_re',
		'm_re_time',
		'm_city',
		'm_ip',
	),
)); ?>
