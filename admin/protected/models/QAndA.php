<?php

/**
 * This is the model class for table "Q_and_A".
 *
 * The followings are the available columns in table 'Q_and_A':
 * @property integer $QA_id
 * @property integer $QA_no
 * @property string $QA_qustion
 * @property string $QA_answer
 * @property string $QA_KEY_1
 * @property string $QA_KEY_2
 * @property string $QA_KEY_3
 * @property string $QA_TEMP
 * @property string $QA_time
 * @property string $QA_who
 */
class QAndA extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Q_and_A';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('QA_id, QA_no', 'numerical', 'integerOnly'=>true),
			array('QA_qustion, QA_answer, QA_KEY_1, QA_KEY_2, QA_KEY_3, QA_TEMP, QA_time, QA_who', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('QA_id, QA_no, QA_qustion, QA_answer, QA_KEY_1, QA_KEY_2, QA_KEY_3, QA_TEMP, QA_time, QA_who', 'safe', 'on'=>'search'),
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
			'QA_id' => 'Qa',
			'QA_no' => 'Qa No',
			'QA_qustion' => 'Qa Qustion',
			'QA_answer' => 'Qa Answer',
			'QA_KEY_1' => 'Qa Key 1',
			'QA_KEY_2' => 'Qa Key 2',
			'QA_KEY_3' => 'Qa Key 3',
			'QA_TEMP' => 'Qa Temp',
			'QA_time' => 'Qa Time',
			'QA_who' => 'Qa Who',
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

		$criteria->compare('QA_id',$this->QA_id);
		$criteria->compare('QA_no',$this->QA_no);
		$criteria->compare('QA_qustion',$this->QA_qustion,true);
		$criteria->compare('QA_answer',$this->QA_answer,true);
		$criteria->compare('QA_KEY_1',$this->QA_KEY_1,true);
		$criteria->compare('QA_KEY_2',$this->QA_KEY_2,true);
		$criteria->compare('QA_KEY_3',$this->QA_KEY_3,true);
		$criteria->compare('QA_TEMP',$this->QA_TEMP,true);
		$criteria->compare('QA_time',$this->QA_time,true);
		$criteria->compare('QA_who',$this->QA_who,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QAndA the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
