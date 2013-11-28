<?php

class NewsAction extends CAction
{
	public function run()
	{
		/* $rawData = Yii::app()->db->createCommand() */
			/* ->select('stu_id, stu_name, stu_school, stu_grade, stu_base, stu_maney, stu_imag')  */
			/* ->from('stu_offer') */
			/* ->where('stu_offer_wait=:stu_offer_wait', array(':stu_offer_wait'=>'待捐助')) */
			/* ->queryAll(); */
		$rawData = News::model()->findAllBySql('SELECT * FROM news ORDER BY new_time DESC LIMIT 10');
		$dataProvider = new CArrayDataProvider($rawData, array(
			'keyField'=>'new_id',
			'id'=>'new_id',
			'sort'=>array(
				'attributes'=>array(
					 'news_id'
				 ),
			),
			'pagination'=>array(
				'pageSize'=>50,
			),
		));

		$weekReport = Weekstory::model()->findBySql('SELECT * FROM weekstory ORDER BY week_time DESC LIMIT 1');
		$this->getController()->render('news_index',array(
			'dataProvider'=>$dataProvider,
			'weekReport'=>$weekReport,
		));
	}
}

?>
