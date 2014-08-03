<?php

class QueryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/raw';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('stuwait', 'news', 'weekreports', 'stufunded', 'mystu', 'stu_detail', 'fund_request'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actions()
	{
		return array(
			'stu_detail'=>'application.controllers.query.StudetailAction',
			'mystu'=>'application.controllers.query.MystuAction',
			'stufunded'=>'application.controllers.query.StufundedAction',
			'stuwait'=>'application.controllers.query.StuwaitAction',
			'news'=>'application.controllers.query.NewsAction',
			'weekreports'=>'application.controllers.query.WeekreportsAction',
			'fund_request'=>'application.controllers.query.FundrequestAction',
		);
	}
}
