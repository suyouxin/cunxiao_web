<?php

/**
 * This is the model class for table "weekstory".
 *
 * The followings are the available columns in table 'weekstory':
 * @property integer $week_id
 * @property string $week_type
 * @property string $week_con
 * @property string $week_pic
 * @property string $week_who
 * @property string $week_time
 * @property string $week_temp
 */
class Weekstory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'weekstory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('week_id', 'numerical', 'integerOnly'=>true),
			array('week_type, week_con, week_pic, week_who, week_time, week_temp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('week_id, week_type, week_con, week_pic, week_who, week_time, week_temp', 'safe', 'on'=>'search'),
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
			'week_id' => 'Week',
			'week_type' => 'Week Type',
			'week_con' => 'Week Con',
			'week_pic' => 'Week Pic',
			'week_who' => 'Week Who',
			'week_time' => 'Week Time',
			'week_temp' => 'Week Temp',
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

		$criteria->compare('week_id',$this->week_id);
		$criteria->compare('week_type',$this->week_type,true);
		$criteria->compare('week_con',$this->week_con,true);
		$criteria->compare('week_pic',$this->week_pic,true);
		$criteria->compare('week_who',$this->week_who,true);
		$criteria->compare('week_time',$this->week_time,true);
		$criteria->compare('week_temp',$this->week_temp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Weekstory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
