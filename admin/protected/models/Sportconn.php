<?php

/**
 * This is the model class for table "sportconn".
 *
 * The followings are the available columns in table 'sportconn':
 * @property integer $sp_id
 * @property string $sp_name
 * @property string $sp_city
 * @property string $sp_email
 * @property string $sp_tel
 * @property string $sp_time
 */
class Sportconn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sportconn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sp_id', 'numerical', 'integerOnly'=>true),
			array('sp_name, sp_city, sp_email, sp_tel, sp_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sp_id, sp_name, sp_city, sp_email, sp_tel, sp_time', 'safe', 'on'=>'search'),
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
			'sp_id' => 'Sp',
			'sp_name' => 'Sp Name',
			'sp_city' => 'Sp City',
			'sp_email' => 'Sp Email',
			'sp_tel' => 'Sp Tel',
			'sp_time' => 'Sp Time',
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

		$criteria->compare('sp_id',$this->sp_id);
		$criteria->compare('sp_name',$this->sp_name,true);
		$criteria->compare('sp_city',$this->sp_city,true);
		$criteria->compare('sp_email',$this->sp_email,true);
		$criteria->compare('sp_tel',$this->sp_tel,true);
		$criteria->compare('sp_time',$this->sp_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sportconn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
