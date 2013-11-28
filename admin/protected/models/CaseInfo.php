<?php

/**
 * This is the model class for table "case_info".
 *
 * The followings are the available columns in table 'case_info':
 * @property integer $case_info_id
 * @property integer $case_in_id
 * @property integer $case_in_no
 * @property string $case_in_title
 * @property string $case_in_con
 * @property string $case_in_time
 */
class CaseInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'case_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('case_info_id, case_in_id, case_in_no', 'numerical', 'integerOnly'=>true),
			array('case_in_title, case_in_con, case_in_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('case_info_id, case_in_id, case_in_no, case_in_title, case_in_con, case_in_time', 'safe', 'on'=>'search'),
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
			'case_info_id' => 'Case ±àºÅ',
			'case_in_id' => 'Case In ±àºÅ',
			'case_in_no' => 'Case In No',
			'case_in_title' => 'Case In Title',
			'case_in_con' => 'Case In Con',
			'case_in_time' => 'Case In Time',
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

		$criteria->compare('case_info_id',$this->case_info_id);
		$criteria->compare('case_in_id',$this->case_in_id);
		$criteria->compare('case_in_no',$this->case_in_no);
		$criteria->compare('case_in_title',$this->case_in_title,true);
		$criteria->compare('case_in_con',$this->case_in_con,true);
		$criteria->compare('case_in_time',$this->case_in_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaseInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
