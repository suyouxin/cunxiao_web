<?php
/* @var $this CaseOfferController */
/* @var $model CaseOffer */

$this->breadcrumbs=array(
	'Case Offers'=>array('index'),
	$model->case_id,
);

$this->menu=array(
	array('label'=>'List CaseOffer', 'url'=>array('index')),
	array('label'=>'Create CaseOffer', 'url'=>array('create')),
	array('label'=>'Update CaseOffer', 'url'=>array('update', 'id'=>$model->case_id)),
	array('label'=>'Delete CaseOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->case_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CaseOffer', 'url'=>array('admin')),
);
?>

<h1>View CaseOffer #<?php echo $model->case_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'case_id',
		'case_no',
		'case_name',
		'case_schoolname',
		'case_class',
		'case_member_up',
		'case_member_lead',
		'case_member_do',
		'case_intro',
		'case_title_pic',
		'case_pic',
		'case_plan',
		'case_budget',
		'case_use',
		'case_expect',
		'case_blog',
		'case_offer_name',
		'case_offer_tel',
		'case_offer_email',
		'case_report',
		'case_spend',
		'case_do_state',
		'case_maney_state',
		'case_ps',
		'case_time',
		'case_autotime',
	),
)); ?>
