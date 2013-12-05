<?php

/**
 * This is the model class for table "oneconn".
 *
 * The followings are the available columns in table 'oneconn':
 * @property integer $one_id
 * @property string $one_name
 * @property string $one_city
 * @property string $one_email
 * @property string $one_tel
 * @property string $one_stu_id
 * @property string $one_time
 */
class Oneconn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oneconn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('one_id', 'numerical', 'integerOnly'=>true),
			array('one_name, one_city, one_email, one_tel, one_stu_id, one_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('one_id, one_name, one_city, one_email, one_tel, one_stu_id, one_time', 'safe', 'on'=>'search'),
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
			'one_id' => '资助人id',
			'one_name' => '资助人姓名',
			'one_city' => '资助人城市',
			'one_email' => '资助人邮件',
			'one_tel' => '资助人电话',
			'one_stu_id' => '被资助学生id',
			'one_time' => '提交资助申请时间',
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

		$criteria->compare('one_id',$this->one_id);
		$criteria->compare('one_name',$this->one_name,true);
		$criteria->compare('one_city',$this->one_city,true);
		$criteria->compare('one_email',$this->one_email,true);
		$criteria->compare('one_tel',$this->one_tel,true);
		$criteria->compare('one_stu_id',$this->one_stu_id,true);
		$criteria->compare('one_time',$this->one_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Oneconn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
