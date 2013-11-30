<?php

/**
 * This is the model class for table "libraryconn".
 *
 * The followings are the available columns in table 'libraryconn':
 * @property integer $li_id
 * @property string $li_name
 * @property string $li_city
 * @property string $li_email
 * @property string $li_tel
 * @property string $li_job
 * @property string $li_time
 * @property string $li_do_1
 * @property string $li_do_2
 * @property string $li_do_3
 * @property string $li_do_4
 * @property string $li_do_5
 */
class Libraryconn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'libraryconn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('li_id', 'numerical', 'integerOnly'=>true),
			array('li_name, li_city, li_email, li_tel, li_job, li_time, li_do_1, li_do_2, li_do_3, li_do_4, li_do_5', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('li_id, li_name, li_city, li_email, li_tel, li_job, li_time, li_do_1, li_do_2, li_do_3, li_do_4, li_do_5', 'safe', 'on'=>'search'),
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
			'li_id' => '图书室id',
			'li_name' => '图书室捐助人姓名',
			'li_city' => '图书室捐助人所在城市',
			'li_email' => '图书室捐助人邮件',
			'li_tel' => '图书室捐助人电话',
			'li_job' => '图书室企业捐助',
			'li_time' => '图书室捐助时间',
			'li_do_1' => 'Li Do 1',
			'li_do_2' => 'Li Do 2',
			'li_do_3' => 'Li Do 3',
			'li_do_4' => 'Li Do 4',
			'li_do_5' => 'Li Do 5',
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

		$criteria->compare('li_id',$this->li_id);
		$criteria->compare('li_name',$this->li_name,true);
		$criteria->compare('li_city',$this->li_city,true);
		$criteria->compare('li_email',$this->li_email,true);
		$criteria->compare('li_tel',$this->li_tel,true);
		$criteria->compare('li_job',$this->li_job,true);
		$criteria->compare('li_time',$this->li_time,true);
		$criteria->compare('li_do_1',$this->li_do_1,true);
		$criteria->compare('li_do_2',$this->li_do_2,true);
		$criteria->compare('li_do_3',$this->li_do_3,true);
		$criteria->compare('li_do_4',$this->li_do_4,true);
		$criteria->compare('li_do_5',$this->li_do_5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libraryconn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
