<?php

/**
 * This is the model class for table "msg".
 *
 * The followings are the available columns in table 'msg':
 * @property integer $m_ID
 * @property string $m_name
 * @property string $m_mail
 * @property string $m_con
 * @property string $m_time
 * @property string $m_re
 * @property string $m_re_time
 * @property string $m_city
 * @property string $m_ip
 */
class Msg extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'msg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('m_ID', 'numerical', 'integerOnly'=>true),
			array('m_name, m_mail, m_con, m_time, m_re, m_re_time, m_city, m_ip', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('m_ID, m_name, m_mail, m_con, m_time, m_re, m_re_time, m_city, m_ip', 'safe', 'on'=>'search'),
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
			'm_ID' => 'M',
			'm_name' => 'M Name',
			'm_mail' => 'M Mail',
			'm_con' => 'M Con',
			'm_time' => 'M Time',
			'm_re' => 'M Re',
			'm_re_time' => 'M Re Time',
			'm_city' => 'M City',
			'm_ip' => 'M Ip',
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

		$criteria->compare('m_ID',$this->m_ID);
		$criteria->compare('m_name',$this->m_name,true);
		$criteria->compare('m_mail',$this->m_mail,true);
		$criteria->compare('m_con',$this->m_con,true);
		$criteria->compare('m_time',$this->m_time,true);
		$criteria->compare('m_re',$this->m_re,true);
		$criteria->compare('m_re_time',$this->m_re_time,true);
		$criteria->compare('m_city',$this->m_city,true);
		$criteria->compare('m_ip',$this->m_ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Msg the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
