<?php

class StudetailAction extends CAction
{
	public function run()
	{
		/* $rawData = Yii::app()->db->createCommand() */
			/* ->select('stu_id, stu_name, stu_school, stu_grade, stu_base, stu_maney, stu_imag')  */
			/* ->from('stu_offer') */
			/* ->where('stu_offer_wait=:stu_offer_wait', array(':stu_offer_wait'=>'待捐助')) */
			/* ->queryAll(); */
		
		if (!isset($_GET['stu_id'])) {
			$this->getController()->render('mystu_error');
			return;
		}

		$id = $_GET['stu_id'];

		$criteria = new CDbCriteria;
		$criteria->mergeWith(array(
		    'select' => 'stu_base, stu_imag, stu_name, stu_add, stu_school, stu_grade, stu_number',
			'condition'=>'stu_id = "'.$id.'"',
		));

		$rawData = StuOffer::model()->find($criteria);
		$total = count($rawData);
		if ($total < 1) {
			$this->getController()->render('mystu_error');
			return;
		}

		$number = $rawData->stu_number;
		$query = new CDbCriteria;
		$query->mergeWith(array(
		    'select' => 'stu_feedback_info, stu_feedback_image, stu_feedback_image2, stu_feedback_image3',
			'condition'=>'stu_number = "'.$number.'"',
		));
		$feedbackArray = StuFeedback::model()->findAll($query);

		$this->getController()->render('stu_detail',array(
			'rawData'=>$rawData,
			'feedbackArray'=>$feedbackArray,
		));
	}
}

?>
