<?php

class WeekreportsAction extends CAction
{
	public function run()
	{
		$rawData = Weekstory::model()->findAllBySql('SELECT * FROM weekstory ORDER BY week_time DESC');
		$dataProvider = new CArrayDataProvider($rawData, array(
			'keyField'=>'week_id',
			'id'=>'week_id',
			'sort'=>array(
				'attributes'=>array(
					 'week_time'
				 ),
			),
			'pagination'=>array(
				'pageSize'=>1,
			),
		));

		$this->getController()->render('weeks_index',array(
			'dataProvider'=>$dataProvider,
		));
	}
}

?>
