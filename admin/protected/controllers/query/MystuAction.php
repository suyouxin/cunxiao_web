<?php

class MystuAction extends CAction
{
	public function run()
	{
		/* $rawData = Yii::app()->db->createCommand() */
			/* ->select('stu_id, stu_name, stu_school, stu_grade, stu_base, stu_maney, stu_imag')  */
			/* ->from('stu_offer') */
			/* ->where('stu_offer_wait=:stu_offer_wait', array(':stu_offer_wait'=>'待捐助')) */
			/* ->queryAll(); */
		
		if (!isset($_GET['stu_offer_email'])) {
			$this->getController()->render('mystu_error');
			return;
		}

		$email = $_GET['stu_offer_email'];

		$criteria = new CDbCriteria;
		$criteria->mergeWith(array(
		    'select' => 'stu_id, stu_imag, stu_name, stu_number',
			'condition'=>'stu_offer_email = "'.$email.'"',
		));

		$rawData = StuOffer::model()->findAll($criteria);
		$total = count($rawData);
		if ($total < 1) {
			$this->getController()->render('mystu_error');
			return;
		}

		$this->getController()->render('mystu',array(
			'rawData'=>$rawData,
			'total'=>$total,
		));
	}
}

?>
