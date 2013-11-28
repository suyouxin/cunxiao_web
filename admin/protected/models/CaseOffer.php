<?php

/**
 * This is the model class for table "case_offer".
 *
 * The followings are the available columns in table 'case_offer':
 * @property integer $case_id
 * @property integer $case_no
 * @property string $case_name
 * @property string $case_schoolname
 * @property string $case_class
 * @property string $case_member_up
 * @property string $case_member_lead
 * @property string $case_member_do
 * @property string $case_intro
 * @property string $case_title_pic
 * @property string $case_pic
 * @property string $case_plan
 * @property string $case_budget
 * @property string $case_use
 * @property string $case_expect
 * @property string $case_blog
 * @property string $case_offer_name
 * @property string $case_offer_tel
 * @property string $case_offer_email
 * @property string $case_report
 * @property string $case_spend
 * @property string $case_do_state
 * @property string $case_maney_state
 * @property string $case_ps
 * @property string $case_time
 * @property string $case_autotime
 */
class CaseOffer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'case_offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('case_id, case_no', 'numerical', 'integerOnly'=>true),
			array('case_name, case_schoolname, case_class, case_member_up, case_member_lead, case_member_do, case_intro, case_title_pic, case_pic, case_plan, case_budget, case_use, case_expect, case_blog, case_offer_name, case_offer_tel, case_offer_email, case_report, case_spend, case_do_state, case_maney_state, case_ps, case_time, case_autotime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('case_id, case_no, case_name, case_schoolname, case_class, case_member_up, case_member_lead, case_member_do, case_intro, case_title_pic, case_pic, case_plan, case_budget, case_use, case_expect, case_blog, case_offer_name, case_offer_tel, case_offer_email, case_report, case_spend, case_do_state, case_maney_state, case_ps, case_time, case_autotime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'case_id' => 'Case',
			'case_no' => 'Case No',
			'case_name' => 'Case Name',
			'case_schoolname' => 'Case Schoolname',
			'case_class' => 'Case Class',
			'case_member_up' => 'Case Member Up',
			'case_member_lead' => 'Case Member Lead',
			'case_member_do' => 'Case Member Do',
			'case_intro' => 'Case Intro',
			'case_title_pic' => 'Case Title Pic',
			'case_pic' => 'Case Pic',
			'case_plan' => 'Case Plan',
			'case_budget' => 'Case Budget',
			'case_use' => 'Case Use',
			'case_expect' => 'Case Expect',
			'case_blog' => 'Case Blog',
			'case_offer_name' => 'Case Offer Name',
			'case_offer_tel' => 'Case Offer Tel',
			'case_offer_email' => 'Case Offer Email',
			'case_report' => 'Case Report',
			'case_spend' => 'Case Spend',
			'case_do_state' => 'Case Do State',
			'case_maney_state' => 'Case Maney State',
			'case_ps' => 'Case Ps',
			'case_time' => 'Case Time',
			'case_autotime' => 'Case Autotime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('case_id',$this->case_id);
		$criteria->compare('case_no',$this->case_no);
		$criteria->compare('case_name',$this->case_name,true);
		$criteria->compare('case_schoolname',$this->case_schoolname,true);
		$criteria->compare('case_class',$this->case_class,true);
		$criteria->compare('case_member_up',$this->case_member_up,true);
		$criteria->compare('case_member_lead',$this->case_member_lead,true);
		$criteria->compare('case_member_do',$this->case_member_do,true);
		$criteria->compare('case_intro',$this->case_intro,true);
		$criteria->compare('case_title_pic',$this->case_title_pic,true);
		$criteria->compare('case_pic',$this->case_pic,true);
		$criteria->compare('case_plan',$this->case_plan,true);
		$criteria->compare('case_budget',$this->case_budget,true);
		$criteria->compare('case_use',$this->case_use,true);
		$criteria->compare('case_expect',$this->case_expect,true);
		$criteria->compare('case_blog',$this->case_blog,true);
		$criteria->compare('case_offer_name',$this->case_offer_name,true);
		$criteria->compare('case_offer_tel',$this->case_offer_tel,true);
		$criteria->compare('case_offer_email',$this->case_offer_email,true);
		$criteria->compare('case_report',$this->case_report,true);
		$criteria->compare('case_spend',$this->case_spend,true);
		$criteria->compare('case_do_state',$this->case_do_state,true);
		$criteria->compare('case_maney_state',$this->case_maney_state,true);
		$criteria->compare('case_ps',$this->case_ps,true);
		$criteria->compare('case_time',$this->case_time,true);
		$criteria->compare('case_autotime',$this->case_autotime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaseOffer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
