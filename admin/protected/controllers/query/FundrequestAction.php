<?php

class FundrequestAction extends CAction
{
	public function run()
	{
		if (!isset($_GET['stu_id'])) {
			$this->getController()->render('mystu_error');
			return;
		}

		$id = $_GET['stu_id'];

		$criteria = new CDbCriteria;
		$criteria->mergeWith(array(
		    'select' => 'stu_id, stu_imag, stu_name, stu_number',
			'condition'=>'stu_id = "'.$id.'"',
		));

		$rawData = StuOffer::model()->find($criteria);
		$total = count($rawData);
		if ($total < 1) {
			$this->getController()->render('mystu_error');
			return;
		}

		$this->getController()->render('fund_request',array(
			'rawData'=>$rawData,
		));
	}
}

?>
