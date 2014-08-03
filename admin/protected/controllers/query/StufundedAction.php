<?php

class StufundedAction extends CAction
{
	public function run()
	{
		/* $rawData = Yii::app()->db->createCommand() */
			/* ->select('stu_id, stu_name, stu_school, stu_grade, stu_base, stu_maney, stu_imag')  */
			/* ->from('stu_offer') */
			/* ->where('stu_offer_wait=:stu_offer_wait', array(':stu_offer_wait'=>'待捐助')) */
			/* ->queryAll(); */
		$criteria = new CDbCriteria;
		$criteria->mergeWith(array(
		    'select' => 'stu_imag',
			'condition'=>'stu_offer_wait != "待捐助"',
			'order'=>'stu_id DESC',
		));

		$total = StuOffer::model()->count($criteria);

		$criteria->mergeWith(array(
			'limit' => '40'
		));

		$offset = 0;
		if (isset($_GET['offset'])) {
			$offset = $_GET['offset'];
			$criteria->mergeWith(array(
				'offset' => $offset
			));
		}

		$rawData = StuOffer::model()->findAll($criteria);
		// $queryNum = count($rawData);
		$queryNum = 40;
		$this->getController()->render('funded_stu',array(
			'rawData'=>$rawData,
			'total'=>$total,
			'offset'=>$offset,
			'queryNum'=>$queryNum,
		));
	}
}

?>
