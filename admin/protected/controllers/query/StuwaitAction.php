<?php

class StuwaitAction extends CAction
{
	public function run()
	{
		/* $rawData = Yii::app()->db->createCommand() */
			/* ->select('stu_id, stu_name, stu_school, stu_grade, stu_base, stu_maney, stu_imag')  */
			/* ->from('stu_offer') */
			/* ->where('stu_offer_wait=:stu_offer_wait', array(':stu_offer_wait'=>'待捐助')) */
			/* ->queryAll(); */
		$rawData = StuOffer::model()->findAllByAttributes(array('stu_offer_wait'=>'待捐助'));
		$dataProvider = new CArrayDataProvider($rawData, array(
			'keyField'=>'stu_id',
			'id'=>'stu_wait',
			'sort'=>array(
				'attributes'=>array(
					 'stu_name'
				 ),
			),
			'pagination'=>array(
				'pageSize'=>50,
			),
		));
		$this->getController()->render('stuwait',array(
			'dataProvider'=>$dataProvider,
		));
	}
}

?>
