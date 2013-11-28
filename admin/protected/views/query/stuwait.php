<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_stu_view',
	'template' => '{items}{pager}',
	)); 
?>
